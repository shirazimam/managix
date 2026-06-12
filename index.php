<?php
$pageTitle = 'Managix Global | Real Estate, Technology, Digital Marketing and Education';
$pageDescription = 'Choose Managix Real Estate, Managix Technology, Managix Digital Marketing or Managix Education.';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
<?php include __DIR__ . '/partials/seo.php'; ?>
    <link rel="icon" type="image/png" href="technology/assets/brand/fav.png?v=20260602" />
    <link rel="apple-touch-icon" href="technology/assets/brand/fav.png?v=20260602" />
    <style>
      :root {
        --ink: #f7fbff;
        --muted: #a8b4c5;
        --line: rgba(255, 255, 255, 0.14);
        --paper: rgba(255, 255, 255, 0.08);
        --white: #ffffff;
        --blue: #2248ff;
        --cyan: #19d3ff;
        --orange: #ff6b45;
        --gold: #d8b46a;
        --green: #46d39a;
        --deep: #050912;
        --radius: 10px;
        --shadow: 0 28px 80px rgba(0, 0, 0, 0.42);
      }

      * {
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        margin: 0;
        background:
          linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px),
          linear-gradient(180deg, rgba(255, 255, 255, 0.026) 1px, transparent 1px),
          radial-gradient(ellipse at 18% 8%, rgba(34, 72, 255, 0.34), transparent 38%),
          radial-gradient(ellipse at 82% 18%, rgba(216, 180, 106, 0.16), transparent 34%),
          radial-gradient(ellipse at 52% 95%, rgba(25, 211, 255, 0.16), transparent 46%),
          linear-gradient(135deg, #02040a 0%, #080d18 42%, #03050b 100%);
        background-size: 64px 64px, 64px 64px, auto, auto, auto, auto;
        color: var(--ink);
        font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
        line-height: 1.6;
        overflow-x: hidden;
      }

      body::before,
      body::after {
        position: fixed;
        inset: auto;
        z-index: -1;
        width: 46vw;
        height: 46vw;
        content: "";
        opacity: 0.5;
        pointer-events: none;
        transform: rotate(20deg);
        animation: ambientDrift 18s ease-in-out infinite;
      }

      body::before {
        top: -20vw;
        right: -22vw;
        border: 1px solid rgba(216, 180, 106, 0.18);
        background:
          linear-gradient(135deg, transparent 48%, rgba(216, 180, 106, 0.1) 49%, transparent 51%),
          linear-gradient(45deg, transparent 48%, rgba(25, 211, 255, 0.1) 49%, transparent 51%);
        background-size: 48px 48px;
      }

      body::after {
        bottom: -28vw;
        left: -24vw;
        border: 1px solid rgba(34, 72, 255, 0.24);
        background:
          repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.055) 0 1px, transparent 1px 22px),
          repeating-linear-gradient(0deg, rgba(255, 255, 255, 0.055) 0 1px, transparent 1px 22px);
        animation-delay: -7s;
      }

      .landing {
        position: relative;
        width: min(1180px, calc(100% - 40px));
        min-height: 100vh;
        margin: 0 auto;
        padding: 34px 0 52px;
      }

      .brand {
        display: inline-flex;
        align-items: center;
      }

      .brand img {
        width: clamp(150px, 16vw, 220px);
        display: block;
        filter: drop-shadow(0 16px 32px rgba(34, 72, 255, 0.22));
      }

      .hero {
        display: grid;
        gap: 22px;
        padding: clamp(70px, 11vw, 118px) 0 40px;
      }

      .eyebrow {
        margin: 0;
        color: var(--gold);
        font-size: 0.76rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
      }

      h1 {
        max-width: 840px;
        margin: 0;
        font-size: clamp(2.35rem, 5vw, 4.85rem);
        line-height: 1.08;
        letter-spacing: 0;
        text-shadow: 0 24px 80px rgba(34, 72, 255, 0.22);
      }

      h1 em {
        color: var(--gold);
        font-style: normal;
      }

      .hero p:not(.eyebrow) {
        max-width: 720px;
        margin: 0;
        color: var(--muted);
        font-size: clamp(1rem, 1.5vw, 1.18rem);
      }

      .choice-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-top: 28px;
        perspective: 1200px;
      }

      .choice-card {
        --accent: var(--blue);
        --accent-soft: rgba(34, 72, 255, 0.18);
        position: relative;
        display: flex;
        flex-direction: column;
        min-height: 300px;
        padding: 30px;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background:
          linear-gradient(145deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.035)),
          radial-gradient(circle at 80% 8%, var(--accent-soft), transparent 34%),
          rgba(6, 12, 24, 0.66);
        box-shadow: var(--shadow);
        color: inherit;
        overflow: hidden;
        isolation: isolate;
        transform: translateY(0) rotateX(0) rotateY(0);
        animation: cardZen 9s ease-in-out infinite;
        backdrop-filter: blur(18px) saturate(132%);
        transition:
          transform 620ms cubic-bezier(0.2, 0.8, 0.2, 1),
          box-shadow 620ms ease,
          border-color 620ms ease,
          background 620ms ease;
      }

      .choice-card::before,
      .choice-card::after {
        position: absolute;
        content: "";
        pointer-events: none;
      }

      .choice-card::before {
        inset: 0;
        z-index: -2;
        background:
          radial-gradient(circle at 28% 22%, color-mix(in srgb, var(--accent), transparent 78%), transparent 24%),
          linear-gradient(120deg, transparent 0 32%, color-mix(in srgb, var(--accent), transparent 80%) 32% 33%, transparent 33% 100%),
          linear-gradient(35deg, transparent 0 48%, rgba(255, 255, 255, 0.07) 48% 49%, transparent 49% 100%);
        background-size: auto, 130px 130px, 92px 92px;
        opacity: 0.85;
        animation: patternDrift 18s linear infinite;
      }

      .choice-card::after {
        right: -82px;
        top: -84px;
        z-index: -1;
        width: 220px;
        height: 220px;
        border: 1px solid color-mix(in srgb, var(--accent), transparent 52%);
        border-radius: 40px;
        background:
          linear-gradient(90deg, color-mix(in srgb, var(--accent), transparent 80%) 1px, transparent 1px),
          linear-gradient(0deg, color-mix(in srgb, var(--accent), transparent 80%) 1px, transparent 1px);
        background-size: 20px 20px;
        transform: rotate(18deg);
        animation: techPlate 14s ease-in-out infinite;
      }

      .choice-card:hover,
      .choice-card:focus-visible {
        transform: translateY(-16px) rotateX(3deg) rotateY(-2deg) scale(1.015);
        border-color: color-mix(in srgb, var(--accent), transparent 38%);
        box-shadow:
          0 36px 90px rgba(0, 0, 0, 0.5),
          0 0 70px color-mix(in srgb, var(--accent), transparent 78%);
        animation-play-state: paused;
        outline: none;
      }

      .choice-card span {
        display: inline-flex;
        width: 46px;
        height: 46px;
        align-items: center;
        justify-content: center;
        margin-bottom: 76px;
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.08);
        color: color-mix(in srgb, var(--accent) 74%, white);
        font-weight: 800;
        box-shadow:
          inset 0 0 0 1px color-mix(in srgb, var(--accent), transparent 64%),
          0 0 34px color-mix(in srgb, var(--accent), transparent 82%);
        backdrop-filter: blur(10px);
      }

      .choice-card h2 {
        margin: 0 0 12px;
        font-size: clamp(1.5rem, 2.5vw, 2.2rem);
        line-height: 1.1;
        color: var(--white);
      }

      .choice-card p {
        margin: 0 0 16px;
        color: var(--muted);
        position: relative;
        z-index: 2;
      }

      .choice-card strong {
        position: relative;
        z-index: 2;
        align-self: flex-end;
        margin-top: auto;
        color: color-mix(in srgb, var(--accent) 76%, white);
        font-size: 0.88rem;
        text-shadow: 0 0 24px color-mix(in srgb, var(--accent), transparent 48%);
        transition: transform 220ms ease;
      }

      .choice-card:hover strong,
      .choice-card:focus-visible strong {
        transform: translateX(5px);
      }

      .choice-card.realestate span {
        color: var(--accent);
      }

      .choice-card.realestate {
        --accent: var(--orange);
        --accent-soft: rgba(255, 107, 69, 0.18);
        animation-delay: -0.8s;
      }

      .choice-card.technology {
        --accent: var(--blue);
        --accent-soft: rgba(34, 72, 255, 0.2);
        animation-delay: -3.4s;
      }

      .choice-card.education {
        --accent: var(--green);
        --accent-soft: rgba(70, 211, 154, 0.18);
        animation-delay: -6.1s;
      }

      .choice-card.marketing {
        --accent: var(--cyan);
        --accent-soft: rgba(25, 211, 255, 0.18);
        animation-delay: -5.2s;
      }

      footer {
        margin-top: 44px;
        color: var(--muted);
        font-size: 0.9rem;
      }

      a {
        text-decoration: none;
      }

      @keyframes cardZen {
        0%,
        100% {
          transform: translate3d(0, 0, 0) rotateX(0deg) rotateY(0deg) scale(1);
          box-shadow:
            0 24px 72px rgba(0, 0, 0, 0.42),
            0 0 42px color-mix(in srgb, var(--accent), transparent 88%);
        }

        33% {
          transform: translate3d(0, -12px, 0) rotateX(1.4deg) rotateY(-1deg) scale(1.012);
          box-shadow:
            0 34px 92px rgba(0, 0, 0, 0.48),
            0 0 68px color-mix(in srgb, var(--accent), transparent 80%);
        }

        66% {
          transform: translate3d(0, 7px, 0) rotateX(-1deg) rotateY(1.2deg) scale(0.996);
          box-shadow:
            0 22px 66px rgba(0, 0, 0, 0.38),
            0 0 36px color-mix(in srgb, var(--accent), transparent 90%);
        }
      }

      @keyframes patternDrift {
        0% {
          background-position: center, 0 0, 0 0;
        }

        100% {
          background-position: center, 130px 130px, -92px 92px;
        }
      }

      @keyframes techPlate {
        0%,
        100% {
          transform: rotate(18deg) scale(1);
          opacity: 0.8;
        }

        50% {
          transform: rotate(24deg) scale(1.08);
          opacity: 1;
        }
      }

      @keyframes ambientDrift {
        0%,
        100% {
          transform: translate3d(0, 0, 0) rotate(20deg);
        }

        50% {
          transform: translate3d(20px, -14px, 0) rotate(24deg);
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

      @media (max-width: 1100px) {
        .hero {
          padding: 46px 0 26px;
        }

        .choice-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .choice-card {
          min-height: 250px;
        }

        .choice-card span {
          margin-bottom: 48px;
        }
      }

      @media (max-width: 920px) {
        .landing {
          width: min(100% - 32px, 1180px);
        }

        .choice-grid {
          gap: 14px;
        }

        .choice-card {
          padding: 22px;
        }
      }

      @media (max-width: 720px) {
        .choice-grid {
          grid-template-columns: 1fr;
        }

        .choice-card {
          min-height: 220px;
        }
      }
    </style>
  </head>
  <body>
    <main class="landing">
        <a class="brand" href="./" aria-label="Managix Global home">
        <img src="technology/assets/brand/managix-logo-dark-base-colored.png" alt="Managix Technology" />
      </a>

      <section class="hero">
        <p class="eyebrow">Managix Global</p>
        <h1>Choose the Managix vertical built for your next <em>serious move.</em></h1>
        <p>Managix Global brings together focused businesses in real estate, enterprise technology, digital marketing and education. Select a division to enter the right experience.</p>
      </section>

      <section class="choice-grid" aria-label="Managix divisions">
        <a class="choice-card realestate" href="realestate">
          <span>01</span>
          <h2>Real Estate</h2>
          <p>Property, advisory and real estate solutions from Managix.</p>
          <strong>Visit Real Estate</strong>
        </a>

        <a class="choice-card technology" href="technology">
          <span>02</span>
          <h2>Technology</h2>
          <p>Enterprise software, GIS, cloud, dashboards, mobile and digital transformation.</p>
          <strong>Visit Technology</strong>
        </a>

        <a class="choice-card marketing" href="digitalmarketing">
          <span>03</span>
          <h2>Digital Marketing</h2>
          <p>Performance campaigns, SEO, content, social media and growth-focused digital visibility.</p>
          <strong>Visit Digital Marketing</strong>
        </a>

        <a class="choice-card education" href="education">
          <span>04</span>
          <h2>Education</h2>
          <p>Learning, skilling and education initiatives from Managix.</p>
          <strong>Visit Education</strong>
        </a>
      </section>

      <footer>
        Managix Technology and Management Services LLP | info@managixglobal.com
      </footer>
    </main>
  </body>
</html>
