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
  <title><?= $brand ?> — Antivirus Software Sales &amp; Remote Installation</title>
  <meta name="description" content="Buy antivirus software for your PC or computer — McAfee or Malwarebytes. Authorized reseller with remote installation included. Call <?= $phone ?>.">
  <meta name="robots" content="noindex, nofollow">
  <link rel="icon" type="image/png" href="https://solventtech.com/favicon.png">
  
   
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7LV3KDN');</script>
<!-- End Google Tag Manager -->
 


  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>
    /* ── TOKENS ──────────────────────────────────────────────── */
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

    /* ── RESET ───────────────────────────────────────────────── */
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
      /* offset for fixed navbar */
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
      transition: box-shadow .3s;
    }

    .site-nav.scrolled {
      box-shadow: 0 4px 24px rgba(0, 0, 0, .12);
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

    /* Brand */
    .nav-brand {
      font-family: 'Playfair Display', serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--accent);
      letter-spacing: -.02em;
      white-space: nowrap;
      text-decoration: none;
    }

    .nav-brand span {
      color: var(--text);
    }

    /* Desktop links */
    .nav-links {
      display: flex;
      align-items: center;
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
      white-space: nowrap;
    }

    .nav-links a:hover {
      color: var(--accent);
      background: var(--accent-lt);
    }

    /* CTA phone */
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
      white-space: nowrap;
      transition: background .2s;
    }

    .nav-cta a:hover {
      background: var(--cta-dk);
    }

    /* Hamburger */
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
      cursor: pointer;
      flex-shrink: 0;
      transition: border-color .2s;
    }

    .nav-hamburger:hover {
      border-color: var(--accent);
    }

    .ham-bar {
      display: block;
      width: 20px;
      height: 2px;
      background: var(--text);
      border-radius: 2px;
      transition: transform .3s ease, opacity .3s ease;
      transform-origin: center;
    }

    .nav-hamburger.open .ham-bar:nth-child(1) {
      transform: translateY(7px) rotate(45deg);
    }

    .nav-hamburger.open .ham-bar:nth-child(2) {
      opacity: 0;
      transform: scaleX(0);
    }

    .nav-hamburger.open .ham-bar:nth-child(3) {
      transform: translateY(-7px) rotate(-45deg);
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
      border-top: 1px solid var(--border);
      box-shadow: 0 12px 32px rgba(0, 0, 0, .12);
      gap: 4px;
      transform: translateY(-110%);
      opacity: 0;
      visibility: hidden;
      transition: transform .35s cubic-bezier(.4, 0, .2, 1),
        opacity .35s cubic-bezier(.4, 0, .2, 1),
        visibility 0s linear .35s;
      pointer-events: none;
    }

    .mobile-menu.open {
      transform: translateY(0);
      opacity: 1;
      visibility: visible;
      transition: transform .35s cubic-bezier(.4, 0, .2, 1),
        opacity .35s cubic-bezier(.4, 0, .2, 1),
        visibility 0s linear 0s;
      pointer-events: auto;
    }

    .mobile-menu a {
      display: block;
      padding: 13px 16px;
      font-size: .95rem;
      font-weight: 600;
      color: var(--text);
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

    .mobile-menu .m-cta:hover {
      background: var(--cta-dk) !important;
    }

    /* Responsive show/hide */
    @media (max-width: 767px) {
      .nav-hamburger {
        display: flex;
      }

      .nav-links {
        display: none !important;
      }

      .nav-cta {
        display: none !important;
      }
    }

    /* ── HERO (replaces old <header>) ────────────────────────── */
    .hero {
      background: linear-gradient(135deg, #0B6E4F, #094D38);
      color: #fff;
      padding: 56px 0 48px;
      text-align: center;
 
    }

    .hero .badge {
      display: inline-block;
      font-size: .7rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      background: rgba(255, 255, 255, .15);
      padding: 4px 14px;
      border-radius: 20px;
      margin-bottom: 14px;
    }

    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.5rem, 4vw, 2.2rem);
      line-height: 1.25;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: .95rem;
      opacity: .9;
      max-width: 520px;
      margin: 0 auto 24px;
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

    /* ── TRUST STRIP ─────────────────────────────────────────── */
    .trust-strip {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      padding: 14px 0;
      background: var(--accent-lt);
    }

    .trust-strip span {
      font-size: .78rem;
      font-weight: 600;
      color: var(--accent);
      display: flex;
      align-items: center;
      gap: 5px;
    }

    section {
      padding: 36px 0;
    }

    .stitle {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      text-align: center;
      margin-bottom: 22px;
    }

    /* Image placeholder */
    .img-ph {
      width: 100%;
      aspect-ratio: 16/9;
      background: var(--accent-lt);
      border-radius: var(--r);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--accent);
      font-size: .85rem;
      border: 2px dashed var(--border);
      margin-bottom: 24px;
    }

    .img-ph i {
      font-size: 2rem;
      margin-right: 8px;
    }

    /* Cards grid */
    .grid {
      display: grid;
      gap: 14px;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--r);
      padding: 18px;
      display: flex;
      gap: 14px;
      align-items: flex-start;
      box-shadow: var(--sh);
      transition: transform .2s, box-shadow .2s;
    }

    .card:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, .1);
    }

    .card .ic {
      width: 44px;
      height: 44px;
      min-width: 44px;
      border-radius: 8px;
      background: var(--accent-lt);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--accent);
      font-size: 1.1rem;
    }

    .card .ic img {
      width: 32px;
      height: 32px;
      object-fit: contain;
      border-radius: 4px;
    }

    .card h3 {
      font-size: .95rem;
      margin-bottom: 4px;
    }

    .card p {
      font-size: .82rem;
      color: var(--muted);
    }

    /* Steps */
    .steps {
      display: grid;
      gap: 14px;
      counter-reset: step;
    }

    .step {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--r);
      padding: 16px 16px 16px 54px;
      position: relative;
      box-shadow: var(--sh);
    }

    .step::before {
      counter-increment: step;
      content: counter(step);
      position: absolute;
      left: 14px;
      top: 16px;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: var(--accent);
      color: #fff;
      font-weight: 700;
      font-size: .85rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .step h3 {
      font-size: .92rem;
      margin-bottom: 2px;
    }

    .step p {
      font-size: .82rem;
      color: var(--muted);
    }

    /* About box */
    .about-box {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--r);
      padding: 22px;
      box-shadow: var(--sh);
    }

    .about-box p {
      font-size: .88rem;
      color: var(--muted);
      margin-bottom: 10px;
    }

    .about-box p:last-child {
      margin-bottom: 0;
    }

    /* FAQ */
    .faq-item {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--r);
      margin-bottom: 10px;
      overflow: hidden;
      box-shadow: var(--sh);
    }

    .faq-q {
      width: 100%;
      text-align: left;
      background: none;
      border: none;
      padding: 14px 44px 14px 16px;
      font-size: .9rem;
      font-weight: 600;
      cursor: pointer;
      position: relative;
      font-family: inherit;
      color: var(--text);
    }

    .faq-q::after {
      content: '+';
      position: absolute;
      right: 16px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 1.2rem;
      color: var(--accent);
      transition: transform .25s;
    }

    .faq-q.open::after {
      content: '\2212';
    }

    .faq-a {
      padding: 0 16px 14px;
      font-size: .84rem;
      color: var(--muted);
      display: none;
    }

    .faq-a.show {
      display: block;
    }

    /* ── LEAD FORM ───────────────────────────────────────────── */
    .form-section {
      background: var(--accent-lt);
      padding: 36px 0;
    }

    .lead-form {
      background: var(--card);
      border-radius: var(--r);
      padding: 24px 22px;
      box-shadow: var(--sh);
    }

    .lead-form .field {
      margin-bottom: 4px;
    }

    .lead-form label {
      display: block;
      font-size: .8rem;
      font-weight: 700;
      margin-bottom: 4px;
      color: var(--text);
    }

    .lead-form input,
    .lead-form select {
      width: 100%;
      padding: 10px 12px;
      border: 1.5px solid var(--border);
      border-radius: 6px;
      font-size: .9rem;
      font-family: inherit;
      color: var(--text);
      background: #fff;
      transition: border-color .2s;
    }

    .lead-form input:focus,
    .lead-form select:focus {
      outline: none;
      border-color: var(--accent);
    }

    .lead-form input.invalid,
    .lead-form select.invalid {
      border-color: #ef4444;
    }

    /* Error span */
    .field-error {
      display: none;
      font-size: .73rem;
      color: #ef4444;
      font-weight: 600;
      margin: 4px 0 8px;
    }

    .row-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    .lead-form button[type="submit"] {
      width: 100%;
      padding: 14px;
      background: var(--accent);
      color: #fff;
      border: none;
      border-radius: 6px;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      font-family: inherit;
      transition: background .2s, opacity .2s;
      margin-top: 10px;
    }

    .lead-form button[type="submit"]:hover:not(:disabled) {
      background: var(--accent-dk);
    }

    .lead-form button[type="submit"]:disabled {
      opacity: .6;
      cursor: not-allowed;
    }

    .form-note {
      font-size: .72rem;
      color: var(--muted);
      text-align: center;
      margin-top: 10px;
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
      font-size: 1.2rem;
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
    @media (min-width: 640px) {
      .hero h1 {
        font-size: 2rem;
      }

      .grid {
        grid-template-columns: 1fr 1fr;
      }

      .trust-strip {
        gap: 32px;
      }
    }

    @media (max-width: 480px) {
      .row-2 {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
    
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7LV3KDN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- ── NAVBAR ─────────────────────────────────────────────── -->
  <nav class="site-nav" id="site-nav" role="navigation" aria-label="Main navigation">
    <div class="nav-inner">

      <!-- Brand -->
      <a href="#" class="nav-brand" aria-label="<?= $brand ?> Home">
        Solvent<span>Tech</span>
      </a>

      <!-- Desktop nav links -->
      <div class="nav-links" role="menubar">
        <a href="#about" role="menuitem">About</a>
        <a href="#products" role="menuitem">Products</a>
        <a href="#how" role="menuitem">How Purchase Works</a>
        <a href="#faq" role="menuitem">FAQ</a>
        <a href="#contact" role="menuitem">Contact</a>
      </div>

      <!-- Desktop phone CTA -->
      <div class="nav-cta">
        <a href="<?= $phone_link ?>" aria-label="Call <?= $phone ?>">
          <i class="fa-solid fa-phone" aria-hidden="true"></i> <?= $phone ?>
        </a>
      </div>

      <!-- Hamburger -->
      <button class="nav-hamburger" id="hamburger-btn"
        aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
        <span class="ham-bar"></span>
        <span class="ham-bar"></span>
        <span class="ham-bar"></span>
      </button>

    </div>
  </nav>

  <!-- ── MOBILE MENU ────────────────────────────────────────── -->
  <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <a href="#about">About</a>
    <a href="#products">Products</a>
    <a href="#how">How Purchase Works</a>
    <a href="#faq">FAQ</a>
    <a href="#contact">Contact</a>
    <a href="<?= $phone_link ?>" class="m-cta">
      <i class="fa-solid fa-phone"></i> <?= $phone ?>
    </a>
  </div>

  <!-- ── HERO ───────────────────────────────────────────────── -->
  <section class="hero">
    <div class="container">
      <div class="badge">Authorized Reseller &bull; <?= $org_name ?></div>
      <h1>Buy Antivirus Software &amp; Computer Security Protection</h1>
      <p>Purchase Kaspersky, Bitdefender, McAfee, Malwarebytes, AVG, or Avast antivirus software for your PC or Mac — with professional remote installation included.</p>
      <a href="<?= $phone_link ?>" class="hero-btn">
        <i class="fa-solid fa-phone" aria-hidden="true"></i> <?= $phone ?>
      </a>
    </div>
  </section>

  <!-- ── TRUST STRIP ────────────────────────────────────────── -->
  <div class="trust-strip">
    <span><i class="fas fa-shield-alt" aria-hidden="true"></i> U.S. Based</span>
    <span><i class="fas fa-store" aria-hidden="true"></i> Authorized Reseller</span>
    <span><i class="fas fa-lock" aria-hidden="true"></i> Encrypted Sessions</span>
    <span><i class="fas fa-certificate" aria-hidden="true"></i> Verified Business</span>
  </div>

  <!-- ── IMAGE PLACEHOLDER ──────────────────────────────────── -->
  <section>
    <div class="container">
      <img
        src="https://solventtech.com/buy-antivirus-software.jpg"
        alt="SolventTech Antivirus Software Subscription & Installation"
        style="width:100%;border-radius:var(--r);box-shadow:var(--sh);display:block;aspect-ratio:16/9;object-fit:cover;"
        loading="lazy">
    </div>
  </section>

  <!-- ── PRODUCTS ───────────────────────────────────────────── -->
  <section id="products">
    <div class="container">
      <h2 class="stitle">What We Sell</h2>
      <div class="grid">
        <div class="card">
          <div class="ic"><img src="https://www.google.com/s2/favicons?domain=kaspersky.com&sz=64" alt="Kaspersky" loading="lazy"></div>
          <div>
            <h3>Internet Security Software</h3>
            <p>Complete internet security and cyber protection software — guards your browsing, identity, and online activity across all devices.</p>
          </div>
        </div>
        <div class="card">
          <div class="ic"><img src="https://www.google.com/s2/favicons?domain=bitdefender.com&sz=64" alt="Bitdefender" loading="lazy"></div>
          <div>
            <h3>Antivirus for Windows PC</h3>
            <p>Dedicated antivirus for Windows 10 and all Windows PCs and laptops — purchase includes remote installation and activation.</p>
          </div>
        </div>
        <div class="card">
          <div class="ic"><img src="https://www.google.com/s2/favicons?domain=malwarebytes.com&sz=64" alt="Malwarebytes" loading="lazy"></div>
          <div>
            <h3>Virus &amp; Malware Protection</h3>
            <p>Powerful virus and malware protection - blocks threats, spyware, and malicious software before they reach your device.</p>

            
          </div>
        </div>
        <div class="card">
          <div class="ic"><img src="https://www.google.com/s2/favicons?domain=avg.com&sz=64" alt="AVG" loading="lazy"></div>
          <div>
            <h3>AVG Antivirus</h3>
            <p>Buy an AVG Antivirus subscription with guided remote setup — we handle installation and activation so you're protected right away.</p>
          </div>
        </div>
        <div class="card">
          <div class="ic"><img src="https://www.google.com/s2/favicons?domain=avast.com&sz=64" alt="Avast" loading="lazy"></div>
          <div>
            <h3>Avast Antivirus</h3>
            <p>Buy Avast Antivirus with guided remote setup — includes installation, activation, and configuration on your Windows or Mac device.</p>
          </div>
        </div>
        <div class="card">
          <div class="ic"><img src="https://www.google.com/s2/favicons?domain=mcafee.com&sz=64" alt="McAfee" loading="lazy"></div>
          <div>
            <h3>Multi-Device &amp; Subscription Plans</h3>
            <p>Antivirus subscription plans and bundles covering multiple devices — including McAfee Total Security and multi-seat license options.</p>


          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── HOW IT WORKS ───────────────────────────────────────── -->
  <section id="how" style="background:var(--accent-lt)">
    <div class="container">
      <h2 class="stitle">How Purchasing Works</h2>
      <div class="steps">
        <div class="step">
          <h3>Choose Your Antivirus Software</h3>
          <p>Call us to pick the right antivirus software for your needs — Kaspersky, Bitdefender, McAfee, Malwarebytes, AVG, or Avast. We give transparent pricing upfront, no surprises.</p>
        </div>
        <div class="step">
          <h3>Complete Your Purchase</h3>
          <p>Pay securely over the phone. You receive a receipt and license confirmation immediately.</p>
        </div>
        <div class="step">
          <h3>Guided Remote Installation</h3>
          <p>With your permission, we connect via encrypted remote software to install and activate your new purchase. You watch everything on screen.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── ABOUT ──────────────────────────────────────────────── -->
  <section id="about">
    <div class="container">
      <h2 class="stitle">About Us</h2>
      <div class="about-box">
        <p><strong><?= $org_name ?></strong> is a U.S.-registered authorized reseller of leading antivirus and security software products, located in Rockville, Maryland.</p>
        <p>We are an <strong>independent reseller</strong> — not affiliated with, endorsed by, or representing any software manufacturer or OEM unless explicitly stated. Brand names and trademarks belong to their respective owners and are used solely for product identification.</p>
        <p>Every purchase includes guided remote installation so you can start using your software immediately. We believe in transparent pricing and honest service.</p>
      </div>
    </div>
  </section>

  <!-- ── FAQ ────────────────────────────────────────────────── -->
  <section id="faq" style="background:#F0F0F5">
    <div class="container">
      <h2 class="stitle">Frequently Asked Questions</h2>

      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">What antivirus software do you sell?</button>
        <div class="faq-a" role="region">We are an authorized reseller of Kaspersky, Bitdefender, McAfee, Malwarebytes, AVG, and Avast antivirus software for PC and Mac. We also offer internet security bundles and multi-device subscription plans. All prices are provided upfront before purchase.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">Which antivirus software is best for my computer?</button>
        <div class="faq-a" role="region">It depends on your needs and budget. Kaspersky and Bitdefender offer strong all-round internet security, McAfee is great for multi-device households, AVG and Avast are solid free-to-premium options, and Malwarebytes excels at dedicated malware removal. Call us and we'll recommend the best fit for your device and budget.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">How does remote installation work?</button>
        <div class="faq-a">After your purchase, we use encrypted remote-access software to install and activate your product on your computer. You grant permission before we connect, you can see everything on screen, and you can end the session at any time.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">Are you affiliated with any of these antivirus brands?</button>
        <div class="faq-a"><?= $org_name ?> is an independent authorized reseller. We are not owned by, affiliated with, or endorsed by any software manufacturer unless explicitly disclosed. Brand names are used solely to identify the products we sell.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">Is my data safe during remote installation?</button>
        <div class="faq-a">Yes. All remote sessions use 256-bit AES encryption. We only access your device with your explicit consent and solely to install the product you purchased. You maintain full control throughout.</div>
      </div>
    </div>
  </section>

  <!-- ── LEAD FORM ──────────────────────────────────────────── -->
  <section class="form-section" id="contact">
    <div class="container">
      <h2 class="stitle">Request a Callback</h2>

      <form class="lead-form" id="leadForm" method="POST" action="send_mail.php" novalidate>
        <input type="hidden" name="source_page" value="TechSuport Landing">
        <input type="hidden" name="page_url" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="form_time" value="<?php echo time(); ?>">
        <!-- Honeypot -->
        <input type="text" name="company_name" style="display:none;" tabindex="-1" autocomplete="off">

        <!-- Name -->
        <div class="field">
          <label for="f-name">Full Name *</label>
          <input type="text" id="f-name" name="customer_name"
            placeholder="Jane Doe" required
            autocomplete="name" inputmode="text">
          <span class="field-error" id="nameErr">Please enter a valid name (letters only, min. 3 characters)</span>
        </div>

        <!-- Phone -->
        <div class="field">
          <label for="f-phone">Phone Number * (10 digits)</label>
          <input type="tel" id="f-phone" name="customer_phone"
            placeholder="5551234567" required
            maxlength="10" inputmode="numeric" autocomplete="tel">
          <span class="field-error" id="phoneErr">Please enter a valid 10-digit US phone number</span>
        </div>

        <!-- Email -->
        <div class="field">
          <label for="f-email">Email Address *</label>
          <input type="email" id="f-email" name="customer_email"
            placeholder="you@email.com" required
            autocomplete="email">
          <span class="field-error" id="emailErr">Please enter a valid email address</span>
        </div>

        <!-- ZIP + State side-by-side -->
        <div class="row-2">
          <div class="field">
            <label for="f-zip">ZIP Code * (5 digits)</label>
            <input type="text" id="f-zip" name="customer_zip"
              placeholder="20851" required
              maxlength="5" inputmode="numeric" autocomplete="postal-code">
            <span class="field-error" id="zipErr">Please enter a valid 5-digit ZIP code</span>
          </div>
          <div class="field">
            <label for="f-state">State *</label>
            <select id="f-state" name="customer_state" required autocomplete="address-level1">
              <option value="" disabled selected>Select</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option>Arizona</option>
              <option>Arkansas</option>
              <option>California</option>
              <option>Colorado</option>
              <option>Connecticut</option>
              <option>Delaware</option>
              <option>Florida</option>
              <option>Georgia</option>
              <option>Hawaii</option>
              <option>Idaho</option>
              <option>Illinois</option>
              <option>Indiana</option>
              <option>Iowa</option>
              <option>Kansas</option>
              <option>Kentucky</option>
              <option>Louisiana</option>
              <option>Maine</option>
              <option>Maryland</option>
              <option>Massachusetts</option>
              <option>Michigan</option>
              <option>Minnesota</option>
              <option>Mississippi</option>
              <option>Missouri</option>
              <option>Montana</option>
              <option>Nebraska</option>
              <option>Nevada</option>
              <option>New Hampshire</option>
              <option>New Jersey</option>
              <option>New Mexico</option>
              <option>New York</option>
              <option>North Carolina</option>
              <option>North Dakota</option>
              <option>Ohio</option>
              <option>Oklahoma</option>
              <option>Oregon</option>
              <option>Pennsylvania</option>
              <option>Rhode Island</option>
              <option>South Carolina</option>
              <option>South Dakota</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Utah</option>
              <option>Vermont</option>
              <option>Virginia</option>
              <option>Washington</option>
              <option>West Virginia</option>
              <option>Wisconsin</option>
              <option>Wyoming</option>
              <option>District of Columbia</option>
            </select>
            <span class="field-error" id="stateErr">Please select your state</span>
          </div>
        </div>

        <button type="submit" id="submitBtn" disabled>
          <i class="fas fa-paper-plane" aria-hidden="true"></i> Request Callback
        </button>
        <p class="form-note">Your information is used solely to contact you about your inquiry. We do not sell or share your data.</p>
      </form>
    </div>
  </section>

  <!-- ── DISCLAIMER ─────────────────────────────────────────── -->
  <div class="disclaimer">
    <div class="container">
      <strong>Disclaimer &amp; Legal Transparency:</strong> <?= $org_name ?> (<?= $org_address ?>) is an independent authorized reseller of select antivirus software products. We are <strong>not</strong> affiliated with, endorsed by, or acting on behalf of any software manufacturer, technology brand, or OEM unless explicitly stated. Brand names, logos, and trademarks mentioned belong to their respective owners and are used solely for product identification. All software products are sold as-is per their respective manufacturer's terms. Remote installation is provided as part of the purchase to assist with product setup only. Prices and availability are subject to change. Software purchases are non-refundable once activated per manufacturer licensing terms.
      <br><br>
      <strong>Opt-Out:</strong> To stop receiving communications, call <?= $phone ?> or email <?= $org_name ?>.
      <br><br>
      <strong>Contact:</strong> <?= $org_name ?> &mdash; <?= $org_address ?> &mdash; <?= $phone ?>
    </div>
  </div>

  <!-- ── FOOTER ─────────────────────────────────────────────── -->
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

  <!-- ── FLOATING CTA ───────────────────────────────────────── -->
  <div class="cta-bar">
    <a href="<?= $phone_link ?>">
      <i class="fa-solid fa-phone" aria-hidden="true"></i> Buy Now &mdash; <?= $phone ?>
    </a>
  </div>

  <!-- ── SCRIPTS ────────────────────────────────────────────── -->
  <script>
    (function() {
      'use strict';

      /* ── NAVBAR: scroll shadow ──────────────────────────────── */
      var nav = document.getElementById('site-nav');
      window.addEventListener('scroll', function() {
        nav.classList.toggle('scrolled', window.scrollY > 10);
      }, {
        passive: true
      });

      /* ── HAMBURGER ──────────────────────────────────────────── */
      var hamBtn = document.getElementById('hamburger-btn');
      var mobileMenu = document.getElementById('mobile-menu');

      function openMenu() {
        hamBtn.classList.add('open');
        hamBtn.setAttribute('aria-expanded', 'true');
        mobileMenu.classList.add('open');
        mobileMenu.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
      }

      function closeMenu() {
        hamBtn.classList.remove('open');
        hamBtn.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.remove('open');
        mobileMenu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }

      hamBtn.addEventListener('click', function() {
        hamBtn.getAttribute('aria-expanded') === 'true' ? closeMenu() : openMenu();
      });

      /* Close when a menu link is clicked */
      mobileMenu.querySelectorAll('a').forEach(function(a) {
        a.addEventListener('click', closeMenu);
      });

      /* Close on outside click */
      document.addEventListener('click', function(e) {
        if (hamBtn.getAttribute('aria-expanded') === 'true' &&
          !mobileMenu.contains(e.target) && !hamBtn.contains(e.target)) {
          closeMenu();
        }
      });

      /* Escape key closes menu */
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && hamBtn.getAttribute('aria-expanded') === 'true') {
          closeMenu();
          hamBtn.focus();
        }
      });

      /* ── FORM VALIDATION ────────────────────────────────────── */
      var form = document.getElementById('leadForm');
      var submitBtn = document.getElementById('submitBtn');

      var nameInp = document.getElementById('f-name');
      var phoneInp = document.getElementById('f-phone');
      var emailInp = document.getElementById('f-email');
      var zipInp = document.getElementById('f-zip');
      var stateInp = document.getElementById('f-state');

      var nameErr = document.getElementById('nameErr');
      var phoneErr = document.getElementById('phoneErr');
      var emailErr = document.getElementById('emailErr');
      var zipErr = document.getElementById('zipErr');
      var stateErr = document.getElementById('stateErr');

      var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var NAME_RE = /^[a-zA-Z\s]{3,}$/;

      function setErr(inp, span, bad) {
        if (bad) {
          inp.classList.add('invalid');
          span.style.display = 'block';
        } else {
          inp.classList.remove('invalid');
          span.style.display = 'none';
        }
      }

      /* Real-time character blocking */
      nameInp.addEventListener('input', function() {
        this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
        if (NAME_RE.test(this.value.trim())) setErr(this, nameErr, false);
      });

      phoneInp.addEventListener('keypress', function(e) {
        if (!/[0-9]/.test(e.key)) e.preventDefault();
      });
      phoneInp.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
        if (this.value.length === 10) setErr(this, phoneErr, false);
      });

      zipInp.addEventListener('keypress', function(e) {
        if (!/[0-9]/.test(e.key)) e.preventDefault();
      });
      zipInp.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);
        if (this.value.length === 5) setErr(this, zipErr, false);
      });

      emailInp.addEventListener('input', function() {
        if (EMAIL_RE.test(this.value.trim())) setErr(this, emailErr, false);
      });

      stateInp.addEventListener('change', function() {
        if (this.value) setErr(this, stateErr, false);
      });

      /* Silent full validation — enables/disables submit button */
      function validateAll() {
        var v = NAME_RE.test(nameInp.value.trim()) &&
          phoneInp.value.replace(/\D/g, '').length === 10 &&
          EMAIL_RE.test(emailInp.value.trim()) &&
          zipInp.value.length === 5 &&
          stateInp.value !== '';
        submitBtn.disabled = !v;
        return v;
      }

      form.addEventListener('input', validateAll);
      form.addEventListener('change', validateAll);

      /* On submit — show all errors if invalid */
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        var ok = true;

        if (!NAME_RE.test(nameInp.value.trim())) {
          setErr(nameInp, nameErr, true);
          ok = false;
        } else {
          setErr(nameInp, nameErr, false);
        }
        if (phoneInp.value.replace(/\D/g, '').length !== 10) {
          setErr(phoneInp, phoneErr, true);
          ok = false;
        } else {
          setErr(phoneInp, phoneErr, false);
        }
        if (!EMAIL_RE.test(emailInp.value.trim())) {
          setErr(emailInp, emailErr, true);
          ok = false;
        } else {
          setErr(emailInp, emailErr, false);
        }
        if (zipInp.value.length !== 5) {
          setErr(zipInp, zipErr, true);
          ok = false;
        } else {
          setErr(zipInp, zipErr, false);
        }
        if (!stateInp.value) {
          setErr(stateInp, stateErr, true);
          ok = false;
        } else {
          setErr(stateInp, stateErr, false);
        }

        if (!ok) return;

        /* All valid — submit */
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;
        form.submit();
      });

      /* ── FAQ ────────────────────────────────────────────────── */
      window.toggleFaq = function(btn) {
        var answer = btn.nextElementSibling;
        var isOpen = answer.classList.contains('show');
        /* Close all */
        document.querySelectorAll('.faq-a').forEach(function(a) {
          a.classList.remove('show');
        });
        document.querySelectorAll('.faq-q').forEach(function(b) {
          b.classList.remove('open');
          b.setAttribute('aria-expanded', 'false');
        });
        /* Open clicked if it was closed */
        if (!isOpen) {
          answer.classList.add('show');
          btn.classList.add('open');
          btn.setAttribute('aria-expanded', 'true');
        }
      };

    }());
  </script>
</body>

</html>