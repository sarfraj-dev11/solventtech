<?php
/* ─── SITE CONFIG ────────────────────────────────────────── */
$brand       = 'SolventTech';
$phone       = '+1 (866) 483 4006';
$phone_link  = 'tel:+18664834006';
$org_name    = 'Solvent Technology LLC';
$org_address = '100 1st St Apt 121, Rockville, MD 20851';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You — <?= $brand ?></title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/png" href="https://solventtech.com/favicon.png">

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P7LV3KDN');
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P7LV3KDN');
    </script>
    <!-- End Google Tag Manager -->
    <style>
        /* ── TOKENS & RESET ──────────────────────────────────────── */
        :root {
            --bg: #FAFAFA;
            --card: #FFF;
            --text: #1A1A2E;
            --muted: #555568;
            --accent: #0B6E4F;
            --accent-lt: #E8F5F0;
            --accent-dk: #094D38;
            --cta: #D14B28;
            --cta-dk: #B03D1F;
            --border: #E4E4EA;
            --r: 10px;
            --sh: 0 2px 12px rgba(0, 0, 0, .06);
            --nav-h: 64px;
            --transition: all .25s cubic-bezier(.4, 0, .2, 1);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            padding-top: var(--nav-h);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            max-width: 780px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ── NAVBAR ──────────────────────────────────────────────── */
        .site-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            height: var(--nav-h);
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            box-shadow: 0 2px 12px rgba(0, 0, 0, .06);
        }

        .nav-inner {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 20px;
            height: var(--nav-h);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .nav-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--accent);
            letter-spacing: -.02em;
        }

        .nav-brand span {
            color: var(--text);
        }

        .nav-links {
            display: flex;
            gap: 4px;
            flex: 1;
            justify-content: center;
        }

        .nav-links a {
            font-size: .88rem;
            font-weight: 600;
            color: var(--muted);
            padding: 6px 12px;
            border-radius: 6px;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--accent);
            background: var(--accent-lt);
        }

        .nav-cta a {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: var(--cta);
            color: #fff;
            font-weight: 700;
            font-size: .85rem;
            padding: 9px 16px;
            border-radius: 50px;
        }

        .nav-cta a:hover {
            background: var(--cta-dk);
        }

        .nav-hamburger {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            width: 44px;
            height: 44px;
            background: none;
            border: 1.5px solid var(--border);
            border-radius: 8px;
        }

        .ham-bar {
            display: block;
            width: 20px;
            height: 2px;
            background: var(--text);
            border-radius: 2px;
            transition: .3s;
        }

        /* ── MOBILE MENU ─────────────────────────────────────────── */
        .mobile-menu {
            display: flex;
            flex-direction: column;
            position: fixed;
            top: var(--nav-h);
            left: 0;
            right: 0;
            z-index: 999;
            background: #fff;
            padding: 20px 24px 32px;
            gap: 4px;
            transform: translateY(-110%);
            opacity: 0;
            visibility: hidden;
            transition: .35s;
            border-top: 1px solid var(--border);
        }

        .mobile-menu.open {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .mobile-menu a {
            display: block;
            padding: 13px 16px;
            font-weight: 600;
            border-radius: 8px;
            transition: var(--transition);
        }

        .mobile-menu a:hover {
            color: var(--accent);
            background: var(--accent-lt);
        }

        .mobile-menu .m-cta {
            margin-top: 12px;
            background: var(--cta);
            color: #fff !important;
            text-align: center;
            border-radius: 50px;
            padding: 14px 20px;
        }

        /* ── THANK YOU HERO ──────────────────────────────────────── */
        .thank-you-hero {
            background: linear-gradient(135deg, #0B6E4F, #094D38);
            color: #fff;
            padding: 80px 0;
            text-align: center;
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .thank-you-hero i {
            font-size: 3rem;
            color: var(--accent-lt);
            margin-bottom: 20px;
        }

        .thank-you-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 5vw, 3rem);
            margin-bottom: 16px;
        }

        .thank-you-hero p {
            font-size: 1.1rem;
            opacity: .9;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--cta);
            color: #fff;
            padding: 15px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.05rem;
            transition: background .2s;
        }

        .hero-btn:hover {
            background: var(--cta-dk);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #fff;
            margin-left: 10px;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        /* ── DISCLAIMER / FOOTER ─────────────────────────────────── */
        .disclaimer {
            background: #F0F0F5;
            padding: 20px 0;
            font-size: .72rem;
            color: var(--muted);
            line-height: 1.7;
        }

        .disclaimer strong {
            color: var(--text);
        }

        footer {
            background: var(--text);
            color: rgba(255, 255, 255, .7);
            text-align: center;
            padding: 22px 0 80px;
            font-size: .76rem;
        }

        footer strong {
            color: #fff;
        }

        footer a {
            color: rgba(255, 255, 255, .9);
            text-decoration: underline;
        }

        /* Floating CTA bar */
        .cta-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 100;
            background: var(--cta);
            padding: 12px 20px;
            text-align: center;
            box-shadow: 0 -2px 16px rgba(0, 0, 0, .15);
        }

        .cta-bar a {
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .cta-bar a i {
            animation: ring 1.5s ease-in-out infinite;
        }

        @keyframes ring {

            0%,
            100% {
                transform: rotate(0);
            }

            20% {
                transform: rotate(15deg);
            }

            40% {
                transform: rotate(-10deg);
            }

            60% {
                transform: rotate(5deg);
            }
        }

        /* ── RESPONSIVE ──────────────────────────────────────────── */
        @media (max-width: 767px) {
            .nav-hamburger {
                display: flex;
            }

            .nav-links,
            .nav-cta {
                display: none !important;
            }

            .hero-btn,
            .btn-outline {
                width: 100%;
                justify-content: center;
                margin: 10px 0 0 0;
            }
        }


        /* Scoped variables within a unique class to prevent root pollution */
        .ta-conf-wrapper {
            --ta-primary: #0d6efd;
            --ta-surface: #ffffff;
            --ta-text-main: #1e293b;
            --ta-text-muted: #64748b;
            --ta-bg-gradient: radial-gradient(at 0% 0%, hsla(210, 100%, 96%, 1) 0, transparent 50%),
                radial-gradient(at 50% 0%, hsla(225, 100%, 98%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(210, 100%, 96%, 1) 0, transparent 50%);

            font-family: 'Inter', sans-serif;
            background-color: #fcfdfe;
            background-image: var(--ta-bg-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            color: var(--ta-text-main);
        }

        .ta-conf-container {
            max-width: 500px;
            width: 90%;
            perspective: 1000px;
        }

        .ta-conf-glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 32px;
            padding: 3rem 2rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.05);
            text-align: center;
            animation: taConfEntrance 0.8s ease-out;
        }

        .ta-conf-title {
            font-family: 'Sora', sans-serif;
            letter-spacing: -0.02em;
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.75rem;
        }

        .ta-conf-icon-box {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: #f0f7ff;
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .ta-conf-icon-box i {
            font-size: 2rem;
            color: var(--ta-primary);
            z-index: 2;
        }

        .ta-conf-icon-box::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid var(--ta-primary);
            border-radius: 24px;
            animation: ta-conf-pulse 2s infinite;
        }

        .ta-conf-badge {
            display: inline-flex;
            align-items: center;
            background: #eef2f7;
            padding: 6px 14px;
            border-radius: 100px;
            font-size: 0.7rem;
            font-weight: 700;
            color: var(--ta-primary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1.25rem;
        }

        .ta-conf-status-dot {
            height: 6px;
            width: 6px;
            background-color: #22c55e;
            border-radius: 50%;
            display: inline-block;
            margin-right: 6px;
        }

        .ta-conf-btn-action {
            background: var(--ta-text-main);
            color: white !important;
            border: none;
            padding: 14px 28px;
            border-radius: 14px;
            font-weight: 600;
            font-family: 'Sora', sans-serif;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            justify-content: center;
        }

        .ta-conf-btn-action:hover {
            background: #000;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .ta-conf-timer-text {
            margin-top: 1.5rem;
            font-size: 0.8rem;
            color: var(--ta-text-muted);
        }

        #ta-conf-countdown {
            color: var(--ta-text-main);
            font-weight: 700;
        }

        @keyframes ta-conf-pulse {
            0% {
                transform: scale(0.9);
                opacity: 0.5;
            }

            100% {
                transform: scale(1.3);
                opacity: 0;
            }
        }

        @keyframes taConfEntrance {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7LV3KDN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="site-nav" id="site-nav" role="navigation" aria-label="Main navigation">
        <div class="nav-inner">
            <a href="index.php" class="nav-brand" aria-label="<?= $brand ?> Home">
                Solvent<span>Tech</span>
            </a>
            <div class="nav-links" role="menubar">
                <a href="index.php#about" role="menuitem">About</a>
                <a href="index.php#products" role="menuitem">Products</a>
                <a href="index.php#how" role="menuitem">How It Works</a>
                <a href="index.php#faq" role="menuitem">FAQ</a>
                <a href="index.php#contact" role="menuitem">Contact</a>
            </div>
            <div class="nav-cta">
                <a href="<?= $phone_link ?>" aria-label="Call <?= $phone ?>">
                    <i class="fa-solid fa-phone" aria-hidden="true"></i> <?= $phone ?>
                </a>
            </div>
            <button class="nav-hamburger" id="hamburger-btn" aria-label="Toggle menu">
                <span class="ham-bar"></span><span class="ham-bar"></span><span class="ham-bar"></span>
            </button>
        </div>
    </nav>

    <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
        <a href="index.php#about">About</a>
        <a href="index.php#products">Products</a>
        <a href="index.php#how">How It Works</a>
        <a href="index.php#faq">FAQ</a>
        <a href="index.php#contact">Contact</a>
        <a href="<?= $phone_link ?>" class="m-cta">
            <i class="fa-solid fa-phone"></i> <?= $phone ?>
        </a>
    </div>
    <div class="ta-conf-wrapper">
        <div class="ta-conf-container">
            <div class="ta-conf-glass-card">
                <div class="ta-conf-badge">
                    <span class="ta-conf-status-dot"></span> Online Inquiry Confirmed
                </div>

                <div class="ta-conf-icon-box">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>

                <h1 class="ta-conf-title">We’re On It!</h1>

                <p class="mb-4 px-lg-4" style="line-height: 1.5; font-size: 0.95rem; color: #64748b;">
                    An expert specialist <strong>will call you shortly</strong> to provide immediate remote assistance for your antivirus selection. Please keep your phone nearby.
                </p>

                <a href="index.php" class="ta-conf-btn-action">
                    Back to Dashboard <i class="fa-solid fa-arrow-right-long"></i>
                </a>

                <div class="ta-conf-timer-text">
                    Auto-redirect in <span id="ta-conf-countdown">8</span>s
                </div>
            </div>
        </div>
    </div>

    <script>
        let timeLeft = 8;
        const countdownElement = document.getElementById('ta-conf-countdown');

        const timer = setInterval(() => {
            timeLeft--;
            if (countdownElement) countdownElement.textContent = timeLeft;
            if (timeLeft <= 0) {
                clearInterval(timer);
                window.location.href = 'index.php';
            }
        }, 1000);
    </script>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> <strong><?= $brand ?></strong> &mdash; A service of <?= $org_name ?></p>
            <p style="margin-top:4px;"><?= $org_address ?> &bull; <a href="<?= $phone_link ?>"><?= $phone ?></a></p>
            <p style="margin-top:8px;">
                <a href="privacy.php">Privacy Policy</a> &bull;
                <a href="terms.php">Terms of Service</a>
            </p>
            <p style="margin-top:6px;font-size:.7rem;opacity:.6;">Independent authorized reseller. Not affiliated with any software manufacturer.</p>
        </div>
    </footer>

    <div class="cta-bar">
        <a href="<?= $phone_link ?>">
            <i class="fa-solid fa-phone"></i> Call Now: <?= $phone ?>
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('hamburger-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (hamburger && mobileMenu) {
                hamburger.addEventListener('click', function() {
                    this.classList.toggle('open');
                    mobileMenu.classList.toggle('open');
                });
            }
        });
    </script>

</body>

</html>