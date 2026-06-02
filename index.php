<?php
$pageTitle = 'Managix Global | Real Estate, Technology and Education';
$pageDescription = 'Choose Managix Real Estate, Managix Technology or Managix Education.';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
    <link rel="icon" type="image/png" href="technology/assets/brand/fav.png?v=20260602" />
    <link rel="apple-touch-icon" href="technology/assets/brand/fav.png?v=20260602" />
    <style>
      :root {
        --ink: #0b1728;
        --muted: #5f6d7f;
        --line: #d8e0ea;
        --paper: #f6f8fb;
        --white: #ffffff;
        --blue: #0b45d9;
        --cyan: #1787c8;
        --orange: #c8442f;
        --gold: #9d6b1c;
        --green: #187552;
        --radius: 8px;
        --shadow: 0 18px 46px rgba(11, 23, 40, 0.1);
      }

      * {
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        margin: 0;
        background:
          linear-gradient(90deg, rgba(11, 23, 40, 0.05) 1px, transparent 1px),
          linear-gradient(180deg, rgba(11, 23, 40, 0.04) 1px, transparent 1px),
          radial-gradient(ellipse at 20% 14%, rgba(11, 69, 217, 0.16), transparent 42%),
          radial-gradient(ellipse at 86% 18%, rgba(23, 135, 200, 0.14), transparent 36%),
          linear-gradient(180deg, #fbfdff 0%, #eef4fb 100%);
        background-size: 58px 58px, 58px 58px, auto, auto, auto;
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
        opacity: 0.42;
        pointer-events: none;
        transform: rotate(20deg);
      }

      body::before {
        top: -20vw;
        right: -22vw;
        border: 1px solid rgba(11, 69, 217, 0.28);
        background:
          linear-gradient(135deg, transparent 48%, rgba(11, 69, 217, 0.13) 49%, transparent 51%),
          linear-gradient(45deg, transparent 48%, rgba(23, 135, 200, 0.13) 49%, transparent 51%);
        background-size: 44px 44px;
      }

      body::after {
        bottom: -28vw;
        left: -24vw;
        border: 1px solid rgba(200, 68, 47, 0.22);
        background:
          repeating-linear-gradient(90deg, rgba(11, 23, 40, 0.08) 0 1px, transparent 1px 22px),
          repeating-linear-gradient(0deg, rgba(11, 23, 40, 0.08) 0 1px, transparent 1px 22px);
      }

      .landing {
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
        filter: drop-shadow(0 12px 24px rgba(11, 69, 217, 0.1));
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
      }

      h1 em {
        color: var(--blue);
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
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
        margin-top: 28px;
        perspective: 1200px;
      }

      .choice-card {
        --accent: var(--blue);
        --accent-soft: rgba(11, 69, 217, 0.13);
        position: relative;
        display: flex;
        flex-direction: column;
        min-height: 280px;
        padding: 28px;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background:
          linear-gradient(145deg, rgba(255, 255, 255, 0.96), rgba(248, 251, 255, 0.9)),
          var(--white);
        box-shadow: var(--shadow);
        color: inherit;
        overflow: hidden;
        isolation: isolate;
        transform: translateY(0) rotateX(0) rotateY(0);
        animation: cardFloat 6s ease-in-out infinite;
        transition:
          transform 420ms cubic-bezier(0.2, 0.8, 0.2, 1),
          box-shadow 420ms ease,
          border-color 420ms ease,
          background 420ms ease;
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
          linear-gradient(120deg, transparent 0 32%, var(--accent-soft) 32% 33%, transparent 33% 100%),
          linear-gradient(35deg, transparent 0 48%, rgba(11, 23, 40, 0.06) 48% 49%, transparent 49% 100%),
          radial-gradient(circle at 78% 18%, var(--accent-soft), transparent 26%);
        background-size: 120px 120px, 84px 84px, auto;
        opacity: 0.9;
        animation: patternDrift 12s linear infinite;
      }

      .choice-card::after {
        right: -72px;
        top: -72px;
        z-index: -1;
        width: 190px;
        height: 190px;
        border: 1px solid color-mix(in srgb, var(--accent), transparent 62%);
        border-radius: 34px;
        background:
          linear-gradient(90deg, color-mix(in srgb, var(--accent), transparent 82%) 1px, transparent 1px),
          linear-gradient(0deg, color-mix(in srgb, var(--accent), transparent 82%) 1px, transparent 1px);
        background-size: 18px 18px;
        transform: rotate(18deg);
        animation: techPlate 10s ease-in-out infinite;
      }

      .choice-card:hover,
      .choice-card:focus-visible {
        transform: translateY(-12px) rotateX(2deg) rotateY(-2deg);
        border-color: color-mix(in srgb, var(--accent), transparent 58%);
        box-shadow: 0 30px 80px color-mix(in srgb, var(--accent), transparent 82%);
        animation-play-state: paused;
        outline: none;
      }

      .choice-card span {
        display: inline-flex;
        width: 46px;
        height: 46px;
        align-items: center;
        justify-content: center;
        margin-bottom: 70px;
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.72);
        color: var(--accent);
        font-weight: 800;
        box-shadow: inset 0 0 0 1px color-mix(in srgb, var(--accent), transparent 78%);
        backdrop-filter: blur(10px);
      }

      .choice-card h2 {
        margin: 0 0 12px;
        font-size: clamp(1.5rem, 2.5vw, 2.2rem);
        line-height: 1.1;
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
        color: var(--accent);
        font-size: 0.88rem;
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
        --accent-soft: rgba(200, 68, 47, 0.13);
        animation-delay: -0.8s;
      }

      .choice-card.technology {
        --accent: var(--blue);
        --accent-soft: rgba(11, 69, 217, 0.15);
        animation-delay: -2.1s;
      }

      .choice-card.education {
        --accent: var(--green);
        --accent-soft: rgba(24, 117, 82, 0.13);
        animation-delay: -1.4s;
      }

      footer {
        margin-top: 44px;
        color: var(--muted);
        font-size: 0.9rem;
      }

      a {
        text-decoration: none;
      }

      @keyframes cardFloat {
        0%,
        100% {
          transform: translateY(0);
        }

        50% {
          transform: translateY(-10px);
        }
      }

      @keyframes patternDrift {
        0% {
          background-position: 0 0, 0 0, center;
        }

        100% {
          background-position: 120px 120px, -84px 84px, center;
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
        <img src="technology/assets/brand/managix-logo-light-base-colored.png" alt="Managix Technology" />
      </a>

      <section class="hero">
        <p class="eyebrow">Managix Global</p>
        <h1>Choose the Managix vertical built for your next <em>serious move.</em></h1>
        <p>Managix Global brings together focused businesses in real estate, enterprise technology and education. Select a division to enter the right experience.</p>
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

        <a class="choice-card education" href="education">
          <span>03</span>
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
