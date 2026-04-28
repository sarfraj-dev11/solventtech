<?php

// ─── LOAD .ENV (NO COMPOSER VERSION) ───────────────────────
function loadEnv($path)
{
    if (!file_exists($path)) return;

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;

        if (!str_contains($line, '=')) continue;

        list($key, $value) = explode('=', $line, 2);

        $key = trim($key);
        $value = trim($value);

        putenv("$key=$value");
        $_ENV[$key] = $value;
    }
}

loadEnv(__DIR__ . '/.env');


// ─── SECURITY ──────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}


// ─── CREDENTIALS ───────────────────────────────────────────
$tenantId     = 'd05e89a3-fd33-420f-8ecb-faaa88cb2db4';
$clientId     = '161e63a3-857d-498f-acd0-c1d8fa0da612';
$clientSecret = getenv('AZURE_CLIENT_SECRET');
$senderEmail  = 'support@seastarfix.com';

if (!$clientSecret) {
    die("Missing AZURE_CLIENT_SECRET in .env file");
}


// ─── SANITIZE INPUT ─────────────────────────────────────────
$name    = htmlspecialchars(trim($_POST['customer_name'] ?? ''));
$email   = filter_var(trim($_POST['customer_email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = preg_replace('/[^0-9]/', '', $_POST['customer_phone'] ?? '');
$zip     = htmlspecialchars(trim($_POST['customer_zip'] ?? ''));
$state   = htmlspecialchars(trim($_POST['customer_state'] ?? ''));
$source  = htmlspecialchars($_POST['source_page'] ?? 'SolventTech Contact Form');


// ─── VALIDATION ────────────────────────────────────────────
if (
    !$name ||
    strlen($phone) !== 10 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    strlen($zip) !== 5 ||
    !$state
) {
    header('Location: index.php?error=validation');
    exit;
}


// ─── GET ACCESS TOKEN (MICROSOFT GRAPH) ────────────────────
$tokenUrl = "https://login.microsoftonline.com/$tenantId/oauth2/v2.0/token";

$tokenData = http_build_query([
    'client_id'     => $clientId,
    'client_secret' => $clientSecret,
    'scope'         => 'https://graph.microsoft.com/.default',
    'grant_type'    => 'client_credentials',
]);

$tokenContext = stream_context_create([
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'content' => $tokenData,
    ],
]);

$tokenResult = file_get_contents($tokenUrl, false, $tokenContext);
$tokenJson   = json_decode($tokenResult, true);

$accessToken = $tokenJson['access_token'] ?? null;

if (!$accessToken) {
    header('Location: index.php?error=auth');
    exit;
}


// ─── EMAIL PAYLOAD ─────────────────────────────────────────
$emailPayload = json_encode([
    'message' => [
        'subject' => "SolventTech — New Lead: $name",
        'body' => [
            'contentType' => 'HTML',
            'content' => "
                <div style='font-family:Arial,sans-serif;line-height:1.6;color:#333;max-width:600px;'>
                    <h2 style='background:#0B6E4F;color:#fff;padding:12px 16px;border-radius:6px;margin:0 0 20px;'>
                        New Lead — Solvent Technology LLC
                    </h2>

                    <table cellpadding='8' cellspacing='0' style='width:100%;border-collapse:collapse;'>
                        <tr><td><b>Name</b></td><td>$name</td></tr>
                        <tr><td><b>Phone</b></td><td>$phone</td></tr>
                        <tr><td><b>Email</b></td><td>$email</td></tr>
                        <tr><td><b>ZIP</b></td><td>$zip</td></tr>
                        <tr><td><b>State</b></td><td>$state</td></tr>
                        <tr><td><b>Source</b></td><td>$source</td></tr>
                    </table>

                    <p style='margin-top:20px;font-size:12px;color:#aaa;'>
                        Sent: " . date('Y-m-d H:i:s') . "
                    </p>
                </div>
            ",
        ],
        'toRecipients' => [
            ['emailAddress' => ['address' => 'support@seastarfix.com']],
        ],
        'bccRecipients' => [
            ['emailAddress' => ['address' => 'developerbrocus@gmail.com']],
            ['emailAddress' => ['address' => 'knowledgemarket@gmail.com']],
        ],
        'replyTo' => $email ? [['emailAddress' => ['address' => $email]]] : [],
    ],
    'saveToSentItems' => true,
]);


// ─── SEND EMAIL VIA GRAPH API ──────────────────────────────
$sendUrl = "https://graph.microsoft.com/v1.0/users/$senderEmail/sendMail";

$sendContext = stream_context_create([
    'http' => [
        'method'  => 'POST',
        'header'  =>
            "Authorization: Bearer $accessToken\r\n" .
            "Content-Type: application/json\r\n",
        'content' => $emailPayload,
    ],
]);

$sendResult = file_get_contents($sendUrl, false, $sendContext);


// ─── FINAL REDIRECT ─────────────────────────────────────────
if (isset($http_response_header) && strpos($http_response_header[0], '202') !== false) {
    header('Location: thank-you.php?status=success');
    exit;
}

header('Location: index.php?error=send');
exit;