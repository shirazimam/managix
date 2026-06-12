<?php
$pageTitle = 'Managix Digital Marketing | SEO, Performance Marketing and Growth';
$pageDescription = 'Managix Digital Marketing helps businesses grow through full-funnel SEO, paid campaigns, social media, content, landing pages, CRM, automation, analytics and conversion-focused digital strategy.';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
<?php include __DIR__ . '/../partials/seo.php'; ?>
    <link rel="icon" type="image/png" href="../technology/assets/brand/fav.png?v=20260602" />
    <link rel="apple-touch-icon" href="../technology/assets/brand/fav.png?v=20260602" />
    <style>
      :root {
        --ink: #15122b;
        --muted: #655f78;
        --line: #eadff5;
        --paper: #fff7fb;
        --white: #ffffff;
        --blue: #3d5cff;
        --teal: #00c8c8;
        --green: #3fd47e;
        --coral: #ff4f7b;
        --gold: #ffb703;
        --violet: #8b5cf6;
        --deep: #140720;
        --deep-2: #271047;
        --radius: 8px;
        --shadow: 0 22px 48px rgba(82, 31, 118, 0.14);
      }

      * {
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        margin: 0;
        background: var(--paper);
        color: var(--ink);
        font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
        line-height: 1.65;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      img {
        display: block;
        max-width: 100%;
      }

      .site-header {
        position: sticky;
        top: 0;
        z-index: 20;
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: space-between;
        gap: 22px;
        padding: 18px clamp(20px, 5vw, 68px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        background:
          linear-gradient(90deg, rgba(255, 79, 123, 0.16), rgba(61, 92, 255, 0.14)),
          rgba(20, 7, 32, 0.94);
        backdrop-filter: blur(18px);
      }

      .brand img {
        width: 176px;
      }

      .site-nav {
        display: flex;
        align-items: center;
        gap: 20px;
        color: #d9e4f2;
        font-size: 0.94rem;
        font-weight: 800;
      }

      .site-nav a {
        transition: color 180ms ease;
      }

      .site-nav a:hover {
        color: #ff6348;
      }

      .nav-cta,
      .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 44px;
        padding: 11px 17px;
        border: 1px solid transparent;
        border-radius: var(--radius);
        font-weight: 900;
        line-height: 1.2;
        transition: transform 180ms ease, box-shadow 180ms ease, background 180ms ease, border-color 180ms ease;
      }

      .nav-cta,
      .button-primary {
        background: linear-gradient(135deg, var(--coral), var(--violet) 52%, var(--teal));
        color: var(--white);
        box-shadow: 0 16px 34px rgba(255, 79, 123, 0.28);
      }

      .button-ghost {
        border-color: var(--line);
        background: var(--white);
        color: var(--ink);
      }

      .button:hover,
      .nav-cta:hover {
        transform: translateY(-2px);
      }

      .nav-toggle,
      .nav-check {
        display: none;
      }

      .hero {
        position: relative;
        overflow: hidden;
        background:
          linear-gradient(120deg, rgba(255, 255, 255, 0.08) 1px, transparent 1px),
          linear-gradient(30deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px),
          linear-gradient(135deg, #201042 0%, #4b1f7a 36%, #ff4f7b 72%, #ffb703 100%);
        background-size: 42px 42px, 42px 42px, auto;
        color: var(--white);
      }

      .hero::before {
        position: absolute;
        inset: 10% -16% auto auto;
        width: 560px;
        height: 560px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        background:
          linear-gradient(90deg, rgba(255, 255, 255, 0.18) 10px, transparent 10px 28px),
          linear-gradient(0deg, rgba(255, 255, 255, 0.1) 10px, transparent 10px 28px);
        background-size: 38px 38px;
        content: "";
        transform: rotate(14deg);
        animation: gridFloat 12s ease-in-out infinite;
      }

      .hero::after {
        position: absolute;
        inset: auto 6% 10% auto;
        width: 210px;
        height: 210px;
        border: 18px solid rgba(255, 255, 255, 0.14);
        border-radius: 42px;
        content: "";
        transform: rotate(12deg);
        animation: stickerFloat 7s ease-in-out infinite;
      }

      .hero-inner,
      .section,
      .site-footer {
        width: min(1180px, calc(100% - 42px));
        margin: 0 auto;
      }

      .hero-inner {
        position: relative;
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(340px, 0.78fr);
        gap: clamp(34px, 6vw, 76px);
        align-items: center;
        min-height: 720px;
        padding: 96px 0 84px;
      }

      .eyebrow {
        margin: 0 0 12px;
        color: var(--gold);
        font-size: 0.76rem;
        font-weight: 900;
        letter-spacing: 0.1em;
        text-transform: uppercase;
      }

      h1,
      h2,
      h3,
      p {
        margin-top: 0;
      }

      h1 {
        max-width: 780px;
        margin-bottom: 22px;
        font-size: clamp(2.7rem, 5vw, 4.8rem);
        line-height: 1.06;
        letter-spacing: 0;
      }

      h2 {
        margin-bottom: 14px;
        font-size: clamp(1.85rem, 3vw, 3rem);
        line-height: 1.14;
        letter-spacing: 0;
      }

      h3 {
        margin-bottom: 10px;
        font-size: 1.18rem;
        line-height: 1.3;
      }

      .hero-copy p:not(.eyebrow) {
        max-width: 700px;
        color: rgba(255, 255, 255, 0.88);
        font-size: 1.12rem;
      }

      .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 30px;
      }

      .growth-board {
        position: relative;
        display: grid;
        gap: 16px;
        padding: 22px;
        border: 1px solid rgba(255, 255, 255, 0.24);
        border-radius: var(--radius);
        background:
          linear-gradient(145deg, rgba(255, 255, 255, 0.28), rgba(255, 255, 255, 0.09)),
          rgba(255, 255, 255, 0.12);
        box-shadow: 0 30px 90px rgba(69, 18, 92, 0.34);
        backdrop-filter: blur(16px);
        transform: rotate(-1.5deg);
        animation: cardFloat 6.5s ease-in-out infinite;
      }

      .growth-board::before {
        position: absolute;
        inset: -1px;
        z-index: -1;
        border-radius: inherit;
        background: linear-gradient(135deg, rgba(255, 183, 3, 0.72), rgba(255, 79, 123, 0.58), rgba(0, 200, 200, 0.5));
        content: "";
        filter: blur(22px);
        opacity: 0.34;
      }

      .metric-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
      }

      .metric-card,
      .channel-card {
        border: 1px solid rgba(255, 255, 255, 0.13);
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.14);
        padding: 20px;
      }

      .metric-card strong {
        display: block;
        color: var(--white);
        font-size: 1.7rem;
        line-height: 1;
      }

      .metric-card span,
      .channel-card span {
        color: rgba(255, 255, 255, 0.76);
        font-size: 0.86rem;
        font-weight: 800;
      }

      .growth-line {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        align-items: end;
        min-height: 160px;
        padding: 18px;
        border: 1px solid rgba(255, 255, 255, 0.13);
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.12);
      }

      .bar {
        min-height: 48px;
        border-radius: 6px 6px 0 0;
        background: linear-gradient(180deg, var(--gold), var(--coral));
        animation: barPulse 3s ease-in-out infinite;
      }

      .bar:nth-child(2) {
        min-height: 86px;
        animation-delay: -1s;
      }

      .bar:nth-child(3) {
        min-height: 124px;
        background: linear-gradient(180deg, var(--teal), var(--blue));
        animation-delay: -2s;
      }

      .bar:nth-child(4) {
        min-height: 152px;
        animation-delay: -3s;
      }

      .section {
        padding: 92px 0;
      }

      .section-heading {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(280px, 0.55fr);
        gap: 34px;
        align-items: end;
        margin-bottom: 34px;
      }

      .section-heading p:not(.eyebrow),
      .section-copy,
      .card p,
      .proof-copy p,
      .contact-card p {
        color: var(--muted);
      }

      .grid-3,
      .grid-4,
      .split,
      .client-grid {
        display: grid;
        gap: 18px;
      }

      .grid-3 {
        grid-template-columns: repeat(3, 1fr);
      }

      .grid-4 {
        grid-template-columns: repeat(4, 1fr);
      }

      .split {
        grid-template-columns: minmax(0, 0.9fr) minmax(320px, 0.65fr);
        align-items: start;
      }

        .card,
        .proof-panel,
        .contact-card,
        .client-logo {
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: var(--white);
        box-shadow: var(--shadow);
        transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease;
      }

      .card:hover,
      .client-logo:hover {
        transform: translateY(-6px) rotate(-0.5deg);
        border-color: rgba(255, 79, 123, 0.36);
        box-shadow: 0 28px 58px rgba(139, 92, 246, 0.18);
      }

      .card {
        padding: 26px;
      }

      .card .number {
        display: inline-flex;
        width: 42px;
        height: 42px;
        align-items: center;
        justify-content: center;
        margin-bottom: 34px;
        border-radius: var(--radius);
        background: linear-gradient(135deg, #fff0b8, #ffd6e2);
        color: #bd1e59;
        font-weight: 900;
      }

      .dark-band {
        background:
          linear-gradient(120deg, rgba(255, 255, 255, 0.07) 1px, transparent 1px),
          linear-gradient(30deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
          linear-gradient(135deg, #160820, #2f124f 48%, #0c5664);
        background-size: 36px 36px, 36px 36px, auto;
        color: var(--white);
      }

      .dark-band .section {
        padding-inline: clamp(22px, 4vw, 42px);
      }

      .dark-band .section-heading p:not(.eyebrow),
      .dark-band .section-copy,
      .dark-band .card p {
        color: #bfcbdb;
      }

      .dark-band .card {
        border-color: rgba(255, 255, 255, 0.12);
        background: rgba(255, 255, 255, 0.07);
        box-shadow: none;
      }

      .channel-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 12px;
      }

      .channel-card {
        min-height: 150px;
      }

      .channel-card strong {
        display: block;
        margin-bottom: 8px;
        color: var(--white);
      }

      .proof-panel {
        display: grid;
        grid-template-columns: minmax(0, 0.76fr) minmax(320px, 1fr);
        overflow: hidden;
      }

      .proof-copy {
        padding: 34px;
      }

      .proof-visual {
        min-height: 360px;
        padding: 28px;
        background:
          linear-gradient(90deg, rgba(18, 61, 255, 0.08) 1px, transparent 1px),
          linear-gradient(180deg, rgba(18, 61, 255, 0.08) 1px, transparent 1px),
          linear-gradient(135deg, #ecf5ff, #f9fcff);
        background-size: 34px 34px, 34px 34px, auto;
      }

      .funnel {
        display: grid;
        gap: 14px;
        height: 100%;
        align-content: center;
      }

      .funnel-step {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        padding: 18px;
        border: 1px solid #d8e5f4;
        border-radius: var(--radius);
        background: var(--white);
        color: var(--ink);
        font-weight: 900;
        box-shadow: 0 14px 34px rgba(8, 20, 38, 0.08);
      }

      .funnel-step span {
        color: var(--blue);
      }

      .campus-program-panel {
        display: grid;
        grid-template-columns: minmax(0, 0.95fr) minmax(320px, 0.72fr);
        gap: 28px;
        overflow: hidden;
        margin-bottom: 26px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: var(--radius);
        background:
          linear-gradient(120deg, rgba(255, 255, 255, 0.08) 1px, transparent 1px),
          linear-gradient(30deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px),
          linear-gradient(135deg, #281052, #ff4f7b 68%, #ffb703);
        background-size: 34px 34px, 34px 34px, auto;
        color: var(--white);
        box-shadow: 0 26px 70px rgba(8, 20, 38, 0.22);
      }

      .campus-program-copy {
        padding: clamp(28px, 5vw, 48px);
      }

      .campus-program-copy p:not(.eyebrow) {
        color: rgba(255, 255, 255, 0.88);
      }

      .campus-outcomes {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin: 26px 0 0;
      }

      .campus-outcomes span,
      .campus-audience span {
        display: inline-flex;
        align-items: center;
        min-height: 44px;
        padding: 10px 12px;
        border: 1px solid rgba(255, 255, 255, 0.13);
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.08);
        color: #edf6ff;
        font-weight: 900;
      }

      .campus-program-visual {
        display: grid;
        gap: 16px;
        align-content: center;
        padding: clamp(22px, 4vw, 38px);
        background:
          linear-gradient(90deg, rgba(255, 255, 255, 0.055) 1px, transparent 1px),
          linear-gradient(180deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px),
          rgba(255, 255, 255, 0.04);
        background-size: 28px 28px, 28px 28px, auto;
      }

      .campus-audience {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
      }

      .campus-funnel {
        display: grid;
        gap: 12px;
      }

      .campus-funnel div {
        display: flex;
        justify-content: space-between;
        gap: 14px;
        padding: 15px 16px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.08);
        color: #edf6ff;
        font-weight: 900;
      }

      .campus-funnel strong {
        color: var(--teal);
      }

      .client-grid {
        grid-template-columns: repeat(5, 1fr);
      }

      .client-logo {
        display: grid;
        min-height: 142px;
        place-items: center;
        padding: 20px;
        text-align: center;
      }

      .client-logo img {
        max-width: 160px;
        max-height: 64px;
        object-fit: contain;
        margin: 0 auto 14px;
      }

      .client-logo span {
        color: var(--muted);
        font-size: 0.86rem;
        font-weight: 900;
      }

      .contact-section {
        padding-bottom: 104px;
      }

      .contact-card {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        gap: 28px;
        align-items: center;
        padding: clamp(28px, 5vw, 48px);
      }

      .contact-details {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 20px;
      }

      .contact-details span,
      .contact-details a {
        display: inline-flex;
        padding: 9px 12px;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: #f8fbff;
        color: #33445b;
        font-weight: 800;
      }

      .site-footer {
        display: flex;
        justify-content: space-between;
        gap: 24px;
        padding: 32px 0 42px;
        color: var(--muted);
        font-size: 0.92rem;
      }

      .site-footer nav {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        font-weight: 800;
      }

      .reveal {
        opacity: 0;
        transform: translateY(22px);
        transition: opacity 700ms ease, transform 700ms ease;
      }

      .reveal.is-visible {
        opacity: 1;
        transform: translateY(0);
      }

      @keyframes gridFloat {
        0%,
        100% {
          transform: translate3d(0, 0, 0) rotate(18deg);
        }

        50% {
          transform: translate3d(-18px, 16px, 0) rotate(23deg);
        }
      }

      @keyframes barPulse {
        0%,
        100% {
          transform: scaleY(0.9);
        }

        50% {
          transform: scaleY(1);
        }
      }

      @keyframes cardFloat {
        0%,
        100% {
          transform: translate3d(0, 0, 0) rotate(-1.5deg);
        }

        50% {
          transform: translate3d(0, -14px, 0) rotate(1deg);
        }
      }

      @keyframes stickerFloat {
        0%,
        100% {
          transform: translate3d(0, 0, 0) rotate(12deg);
        }

        50% {
          transform: translate3d(-12px, -16px, 0) rotate(18deg);
        }
      }

      @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
          scroll-behavior: auto !important;
          animation-duration: 0.01ms !important;
          animation-iteration-count: 1 !important;
          transition-duration: 0.01ms !important;
        }
      }

      @media (max-width: 1080px) {
        .site-nav {
          gap: 12px;
          font-size: 0.88rem;
        }

        .nav-cta {
          padding-inline: 13px;
        }

        .brand img {
          width: 152px;
        }

        .hero-inner,
        .section-heading,
        .split,
        .proof-panel,
        .campus-program-panel,
        .contact-card {
          grid-template-columns: 1fr;
        }

        .grid-4,
        .client-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .grid-3,
        .channel-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .growth-board {
          max-width: 680px;
          transform: none;
        }
      }

      @media (max-width: 760px) {
        .site-header {
          padding: 16px 20px;
        }

        .brand img {
          width: 150px;
        }

        .nav-toggle {
          display: grid;
          width: 48px;
          height: 48px;
          place-items: center;
          border: 1px solid rgba(255, 255, 255, 0.2);
          border-radius: var(--radius);
          cursor: pointer;
        }

        .nav-toggle span {
          display: block;
          width: 24px;
          height: 2px;
          margin: 3px 0;
          background: var(--white);
        }

        .site-nav {
          position: absolute;
          top: 80px;
          left: 20px;
          right: 20px;
          display: none;
          align-items: stretch;
          flex-direction: column;
          gap: 0;
          overflow: hidden;
          border: 1px solid rgba(255, 255, 255, 0.12);
          border-radius: var(--radius);
          background: #06101e;
          box-shadow: var(--shadow);
        }

        .site-nav a {
          padding: 16px 20px;
          border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .site-nav .nav-cta {
          margin: 14px;
        }

        .nav-check:checked ~ .site-nav {
          display: flex;
        }

        h1 {
          font-size: 2.45rem;
        }

        .hero-inner {
          min-height: auto;
          padding: 70px 0 58px;
        }

        .section {
          padding: 68px 0;
        }

        .grid-3,
        .grid-4,
        .channel-grid,
        .client-grid,
        .metric-grid,
        .campus-outcomes {
          grid-template-columns: 1fr;
        }

        .contact-card {
          display: block;
        }

        .site-footer {
          display: block;
        }
      }
    </style>
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="./" aria-label="Managix Digital Marketing home">
        <img src="../technology/assets/brand/managix-logo-dark-base-colored.png" alt="Managix Technology" />
      </a>
      <input class="nav-check" type="checkbox" id="nav-check" aria-label="Toggle navigation" />
      <label class="nav-toggle" for="nav-check" aria-controls="site-nav"><span></span><span></span><span></span></label>
      <nav class="site-nav" id="site-nav">
        <a href="services">Services</a>
        <a href="campus-growth">Campus Growth</a>
        <a href="work">Work</a>
        <a href="../technology">Technology</a>
        <a href="contact">Contact</a>
        <a class="nav-cta" href="contact">Start Growth Plan</a>
      </nav>
    </header>

    <main>
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy reveal">
            <p class="eyebrow">Managix Digital Marketing</p>
            <h1>Reels, SEO and paid ads that make people stop, search and enquire.</h1>
            <p>We create scroll-stopping social content, search visibility, lead campaigns, landing pages and reporting systems for brands that want attention and actual enquiries.</p>
            <div class="hero-actions">
              <a class="button button-primary" href="contact">Request Strategy Call</a>
              <a class="button button-ghost" href="services">Explore Services</a>
            </div>
          </div>
          <aside class="growth-board reveal" aria-label="Digital growth dashboard illustration">
            <div class="metric-grid">
              <div class="metric-card"><strong>Reels</strong><span>Short-form content</span></div>
              <div class="metric-card"><strong>SEO</strong><span>Search demand</span></div>
              <div class="metric-card"><strong>Ads</strong><span>Lead campaigns</span></div>
              <div class="metric-card"><strong>CRM</strong><span>Follow-up flows</span></div>
            </div>
            <div class="growth-line" aria-hidden="true">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </div>
          </aside>
        </div>
      </section>

      <section class="section" id="services">
        <div class="section-heading reveal">
          <div>
            <p class="eyebrow">What we do</p>
            <h2>Digital marketing services built for views, clicks, leads and brand recall.</h2>
          </div>
          <p>Managix combines creative content with SEO, paid media, landing pages and analytics. The result is marketing that looks alive, moves fast and still stays measurable.</p>
        </div>
        <div class="grid-3">
          <article class="card reveal"><span class="number">01</span><h3>Reels and Social Content</h3><p>Short videos, carousels, captions, hooks, thumbnails and posting calendars that make your brand feel active, fresh and easy to follow.</p></article>
          <article class="card reveal"><span class="number">02</span><h3>SEO That Gets Found</h3><p>Keyword planning, local SEO, content pages, Google Business Profile improvement and search-friendly site structure for long-term discovery.</p></article>
          <article class="card reveal"><span class="number">03</span><h3>Paid Ads for Leads</h3><p>Meta Ads, Google Ads, YouTube Ads, retargeting, lead forms and campaign testing focused on enquiries, walk-ins and qualified prospects.</p></article>
          <article class="card reveal"><span class="number">04</span><h3>Campaign Copy and Creatives</h3><p>Offer copy, social creatives, ad messaging, landing-page content and brand lines that help people understand why they should choose you.</p></article>
          <article class="card reveal"><span class="number">05</span><h3>Landing Pages That Convert</h3><p>Mobile-first pages, clear CTAs, enquiry forms, offer sections and tracking that turn campaign traffic into real action.</p></article>
          <article class="card reveal"><span class="number">06</span><h3>Analytics and Reporting</h3><p>Simple dashboards, source tracking, lead quality checks and monthly reports that show what is working and where to push harder.</p></article>
          <article class="card reveal"><span class="number">07</span><h3>Marketplace and Profile Ads</h3><p>Promotion for product-led and local businesses across digital shelves, listings, profiles and platform-specific discovery points.</p></article>
          <article class="card reveal"><span class="number">08</span><h3>Follow-Up Automation</h3><p>Lead routing, reminder flows, email campaigns, WhatsApp-ready handoffs and remarketing audiences so enquiries do not go cold.</p></article>
          <article class="card reveal"><span class="number">09</span><h3>Growth Strategy</h3><p>Channel mix, audience targeting, monthly content themes and funnel planning so the brand has a clear rhythm, not random posting.</p></article>
        </div>
      </section>

      <section class="dark-band" id="approach">
        <div class="section">
          <div class="section-heading reveal">
            <div>
              <p class="eyebrow">Campaign rhythm</p>
              <h2>Plan the hook, launch the content, chase the lead, repeat smarter.</h2>
            </div>
            <p>Every month should have a pulse: content drops, SEO moves, paid campaigns, lead follow-up and clear reporting.</p>
          </div>
          <div class="channel-grid">
            <article class="channel-card reveal"><strong>Spot</strong><span>Find what people search, scroll past, ask, compare and click.</span></article>
            <article class="channel-card reveal"><strong>Script</strong><span>Write hooks, offers, reels, captions and landing page messages.</span></article>
            <article class="channel-card reveal"><strong>Shoot</strong><span>Build videos, creatives, explainers, campus stories and brand moments.</span></article>
            <article class="channel-card reveal"><strong>Launch</strong><span>Publish social content, SEO pages, ads, lead forms and retargeting.</span></article>
            <article class="channel-card reveal"><strong>Follow</strong><span>Route enquiries, nudge prospects and keep hot leads moving.</span></article>
            <article class="channel-card reveal"><strong>Scale</strong><span>Double down on content, keywords and ads that bring better enquiries.</span></article>
          </div>
        </div>
      </section>

      <section class="section" id="industries">
        <div class="split">
          <div class="reveal">
            <p class="eyebrow">Who we help</p>
            <h2>Marketing for brands that need attention, trust and action.</h2>
          </div>
          <div class="section-copy reveal">
            <p>We help education, healthcare, real estate, technology and local brands show up better online through content, search, ads and landing pages that people actually understand.</p>
          </div>
        </div>
        <div class="grid-4">
          <article class="card reveal"><h3>Real Estate</h3><p>Project visibility, lead funnels, location-focused search, landing pages and enquiry campaigns.</p></article>
          <article class="card reveal"><h3>Healthcare and Pharmacy</h3><p>Professional positioning, local discovery, product education and compliant communication support.</p></article>
          <article class="card reveal"><h3>Education and Skilling</h3><p>Admissions campaigns, program pages, lead nurturing, content strategy and social visibility.</p></article>
          <article class="card reveal"><h3>Technology and SaaS</h3><p>B2B messaging, product pages, SEO, case-study content and demand-generation campaigns.</p></article>
        </div>
      </section>

      <section class="section" id="campus-growth">
        <div class="section-heading reveal">
          <div>
            <p class="eyebrow">Digital Campus Growth Program</p>
            <h2>Campus reels, admission ads and online presence for schools and colleges.</h2>
          </div>
          <p>Parents and students check Instagram, Google and YouTube before they visit. We help institutions look active, trustworthy and admission-ready online.</p>
        </div>

        <div class="campus-program-panel reveal">
          <div class="campus-program-copy">
            <p class="eyebrow">Admission-focused digital branding</p>
            <h2>Turn campus life into reels, stories, ads and admission enquiries.</h2>
            <p>Results, infrastructure, faculty, student achievements, events and classroom moments can all become content. We turn campus activity into a lively digital presence that supports trust, enquiries and admissions.</p>
            <div class="campus-outcomes">
              <span>Increase Brand Visibility</span>
              <span>Strengthen Online Reputation</span>
              <span>Generate Admission Leads</span>
              <span>Position as Future-Ready</span>
            </div>
            <div class="hero-actions">
              <a class="button button-primary" href="campus-growth">View Campus Growth Program</a>
              <a class="button button-ghost" href="contact">Talk to Managix</a>
            </div>
          </div>
          <div class="campus-program-visual" aria-label="Digital Campus Growth Program flow">
            <div class="campus-audience">
              <span>CBSE / ICSE Schools</span>
              <span>Junior Colleges</span>
              <span>Degree Colleges</span>
              <span>Coaching Institutes</span>
              <span>Skill Institutes</span>
              <span>Universities</span>
            </div>
            <div class="campus-funnel">
              <div>Campus Storytelling <strong>01</strong></div>
              <div>Social Media Presence <strong>02</strong></div>
              <div>Admission Campaigns <strong>03</strong></div>
              <div>Lead Capture and Reporting <strong>04</strong></div>
            </div>
          </div>
        </div>

        <div class="grid-3">
          <article class="card reveal"><span class="number">01</span><h3>Professional Video Production</h3><p>Campus promotional videos, faculty introductions, classroom and lab showcases, infrastructure walkthroughs, student testimonials and admission campaign videos with professional cameras, lighting, sound and high-resolution output.</p></article>
          <article class="card reveal"><span class="number">02</span><h3>Editing and Content Creation</h3><p>Reels, YouTube videos, motion graphics, admission creatives and polished social content that turns campus moments into compelling digital stories.</p></article>
          <article class="card reveal"><span class="number">03</span><h3>Event Coverage and Documentary</h3><p>Annual day, sports day, cultural programs, seminars, workshops, convocations and institutional documentary films built as long-term brand assets.</p></article>
          <article class="card reveal"><span class="number">04</span><h3>Campus Media Team</h3><p>Monthly on-campus shoot days with professional photography, videography, lighting, audio setup, optional drone coverage and same-day highlight content.</p></article>
          <article class="card reveal"><span class="number">05</span><h3>Podcast Room and Educational Podcasts</h3><p>Podcast room setup, microphones, audio interface, branded background guidance, multi-camera recording, lighting and content production for teacher interviews, principal messages, alumni stories and career guidance.</p></article>
          <article class="card reveal"><span class="number">06</span><h3>Complete Social Media Handling</h3><p>Instagram, Facebook, YouTube, LinkedIn and Google Business Profile management with monthly calendars, creatives, captions, hashtags, community management, reputation monitoring and analytics.</p></article>
          <article class="card reveal"><span class="number">07</span><h3>Admission Lead Generation</h3><p>Meta Ads, Google Ads and YouTube Ads for admission enquiries, walk-ins, entrance exams, admission events and target-location brand reach.</p></article>
          <article class="card reveal"><span class="number">08</span><h3>Admission Funnel Setup</h3><p>Parent-focused targeting, student interest audiences, landing pages, lead forms, CRM-ready lead delivery and monthly performance reporting.</p></article>
          <article class="card reveal"><span class="number">09</span><h3>Institutional Reputation Building</h3><p>Consistent storytelling that highlights results, infrastructure, faculty, student achievements and the institution’s future-ready academic environment.</p></article>
        </div>
      </section>

      <section class="dark-band">
        <div class="section">
          <div class="section-heading reveal">
            <div>
              <p class="eyebrow">Campus Packages</p>
              <h2>Flexible growth plans for education institutions.</h2>
            </div>
            <p>Choose a focused package for admission season, ongoing social presence, podcast authority, event coverage or a custom institutional campaign.</p>
          </div>
          <div class="grid-3">
            <article class="card reveal"><h3>Monthly Digital Growth Plan</h3><p>Ongoing content, social media management, creative design, campus storytelling and performance reporting.</p></article>
            <article class="card reveal"><h3>Admission Season Booster</h3><p>Lead-generation campaigns, admission videos, location targeting, landing pages, lead forms and enquiry tracking.</p></article>
            <article class="card reveal"><h3>Podcast and Media Branding</h3><p>Podcast room setup support, educational podcast production, short clips, thumbnails, branding and YouTube publishing.</p></article>
            <article class="card reveal"><h3>Event-Based Campaign</h3><p>Coverage for annual day, sports day, seminars, workshops, convocations and highlight content for social media.</p></article>
            <article class="card reveal"><h3>Custom Institutional Package</h3><p>A tailored mix for CBSE, ICSE, State Board schools, junior colleges, degree colleges, coaching institutes, skill centres and universities.</p></article>
            <article class="card reveal"><h3>Premium Campus Brand System</h3><p>Institutional films, faculty recognition, student achievement stories, Google profile improvement and full social presence management.</p></article>
          </div>
        </div>
      </section>

      <section class="section" id="proof">
        <div class="proof-panel reveal">
          <div class="proof-copy">
            <p class="eyebrow">Why Managix</p>
            <h2>Creative marketing backed by websites, tracking and automation.</h2>
            <p>Reels and ads need a strong landing page, clean tracking, fast follow-up and honest reporting. Managix connects the creative side with the tech side so campaigns do more than look good.</p>
            <div class="hero-actions">
              <a class="button button-primary" href="work">See Campaign Work</a>
              <a class="button button-ghost" href="contact">Start a Growth Plan</a>
            </div>
          </div>
          <div class="proof-visual" aria-label="Digital marketing funnel illustration">
            <div class="funnel">
              <div class="funnel-step">Segmented Reach <span>01</span></div>
              <div class="funnel-step">Funnel Communication <span>02</span></div>
              <div class="funnel-step">Landing Page Conversion <span>03</span></div>
              <div class="funnel-step">CRM Follow-Up <span>04</span></div>
              <div class="funnel-step">CAC, LTV and KPI Optimization <span>05</span></div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="section-heading reveal">
          <div>
            <p class="eyebrow">Existing trust</p>
            <h2>Powered by Managix creative, tech and growth teams.</h2>
          </div>
          <p>The Digital Marketing vertical brings together content, design, ads, search, websites and tracking so campaigns feel fresh and still stay measurable.</p>
        </div>
        <div class="client-grid">
          <div class="client-logo reveal"><img src="../technology/assets/clients/tech-mahindra.png" alt="Tech Mahindra" /><span>Tech Mahindra</span></div>
          <div class="client-logo reveal"><img src="../technology/assets/clients/emedix.png" alt="EMEDIX Smart Pharmacy" /><span>EMEDIX Smart Pharmacy</span></div>
          <div class="client-logo reveal"><img src="../technology/assets/clients/adpc-logo.jpg" alt="ADPC" /><span>ADPC</span></div>
          <div class="client-logo reveal"><img src="../technology/assets/clients/disaster-management-bihar.jpeg" alt="Disaster Management Bihar" /><span>Disaster Management Bihar</span></div>
          <div class="client-logo reveal"><img src="../technology/assets/clients/twerlo-ai.png" alt="Twerlo AI" /><span>Twerlo AI</span></div>
        </div>
      </section>

      <section class="section contact-section" id="contact">
        <div class="contact-card reveal">
          <div>
            <p class="eyebrow">Start with clarity</p>
            <h2>Tell us your growth target. We will map the campaign path.</h2>
            <p>Share your website, target market and business goal. We will help you identify the right mix of SEO, paid campaigns, content, landing pages and tracking.</p>
            <div class="contact-details">
              <a href="mailto:info@managixglobal.com">info@managixglobal.com</a>
              <span>9th Floor, Sattva Magnus Commercial Block, Hyderabad - 500008</span>
              <span>602, Ashiana Chambers, Exhibition Road, Patna - 800001</span>
            </div>
          </div>
          <a class="button button-primary" href="contact">Start Growth Plan</a>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div>
        <strong>Managix Technology and Management Services LLP</strong><br />
        Managix Digital Marketing | info@managixglobal.com
      </div>
      <nav aria-label="Footer navigation">
        <a href="../">Managix Global</a>
        <a href="services">Services</a>
        <a href="campus-growth">Campus Growth</a>
        <a href="work">Work</a>
        <a href="contact">Contact</a>
        <a href="../technology">Technology</a>
        <a href="../realestate">Real Estate</a>
        <a href="../education">Education</a>
      </nav>
    </footer>

    <script>
      const revealItems = document.querySelectorAll(".reveal");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.16 });

      revealItems.forEach((item) => observer.observe(item));

      document.querySelectorAll(".site-nav a").forEach((link) => {
        link.addEventListener("click", () => {
          const navCheck = document.getElementById("nav-check");
          if (navCheck) {
            navCheck.checked = false;
          }
        });
      });
    </script>
  </body>
</html>
