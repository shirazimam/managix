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
          linear-gradient(120deg, rgba(11, 69, 217, 0.1), transparent 42%),
          linear-gradient(180deg, #f8fafc 0%, #eef4fb 100%);
        color: var(--ink);
        font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
        line-height: 1.6;
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

      .hero p:not(.eyebrow) {
        max-width: 720px;
        margin: 0;
        color: var(--muted);
        font-size: clamp(1rem, 1.5vw, 1.18rem);
      }

      .choice-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-top: 28px;
      }

      .choice-card {
        position: relative;
        min-height: 280px;
        padding: 28px;
        border: 1px solid var(--line);
        border-radius: var(--radius);
        background: var(--white);
        box-shadow: var(--shadow);
        color: inherit;
        overflow: hidden;
        transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease;
      }

      .choice-card:hover {
        transform: translateY(-4px);
        border-color: rgba(11, 69, 217, 0.28);
        box-shadow: 0 24px 60px rgba(11, 23, 40, 0.14);
      }

      .choice-card span {
        display: inline-flex;
        width: 46px;
        height: 46px;
        align-items: center;
        justify-content: center;
        margin-bottom: 70px;
        border-radius: var(--radius);
        background: var(--paper);
        color: var(--blue);
        font-weight: 800;
      }

      .choice-card h2 {
        margin: 0 0 12px;
        font-size: clamp(1.5rem, 2.5vw, 2.2rem);
        line-height: 1.1;
      }

      .choice-card p {
        margin: 0;
        color: var(--muted);
      }

      .choice-card strong {
        position: absolute;
        right: 24px;
        bottom: 22px;
        color: var(--blue);
        font-size: 0.88rem;
      }

      .choice-card.realestate span {
        color: var(--orange);
      }

      .choice-card.education span {
        color: var(--cyan);
      }

      footer {
        margin-top: 44px;
        color: var(--muted);
        font-size: 0.9rem;
      }

      a {
        text-decoration: none;
      }

      @media (max-width: 860px) {
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
        <h1>Choose the Managix vertical you want to explore.</h1>
        <p>Managix Global brings together focused businesses in real estate, enterprise technology and education. Select a division to continue.</p>
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
