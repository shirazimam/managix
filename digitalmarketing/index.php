<?php
$pageTitle = 'Managix Digital Marketing | Coming Soon';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
    <link rel="icon" type="image/png" href="../technology/assets/brand/fav.png?v=20260602" />
    <style>
      * { box-sizing: border-box; }
      body {
        min-height: 100vh;
        margin: 0;
        display: grid;
        place-items: center;
        padding: 28px;
        background:
          linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px),
          linear-gradient(180deg, rgba(255, 255, 255, 0.026) 1px, transparent 1px),
          radial-gradient(ellipse at 20% 10%, rgba(25, 211, 255, 0.28), transparent 42%),
          radial-gradient(ellipse at 80% 84%, rgba(34, 72, 255, 0.24), transparent 42%),
          linear-gradient(135deg, #02040a 0%, #080d18 42%, #03050b 100%);
        background-size: 64px 64px, 64px 64px, auto, auto, auto;
        color: #f7fbff;
        font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
        line-height: 1.6;
      }
      main {
        width: min(760px, 100%);
        padding: clamp(30px, 6vw, 62px);
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 10px;
        background:
          linear-gradient(145deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.035)),
          rgba(6, 12, 24, 0.66);
        box-shadow: 0 28px 80px rgba(0, 0, 0, 0.42);
        backdrop-filter: blur(18px) saturate(132%);
      }
      img {
        width: 190px;
        margin-bottom: 48px;
        filter: drop-shadow(0 16px 32px rgba(34, 72, 255, 0.22));
      }
      p:first-of-type {
        margin: 0 0 12px;
        color: #19d3ff;
        font-size: 0.76rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
      }
      h1 {
        margin: 0;
        font-size: clamp(2rem, 5vw, 3.8rem);
        line-height: 1.08;
      }
      p { color: #a8b4c5; }
      a {
        display: inline-flex;
        margin-top: 18px;
        padding: 11px 16px;
        border-radius: 8px;
        background: linear-gradient(135deg, #2248ff, #19d3ff);
        color: #ffffff;
        font-weight: 800;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <main>
      <img src="../technology/assets/brand/managix-logo-dark-base-colored.png" alt="Managix Technology" />
      <p>Managix Digital Marketing</p>
      <h1>Coming soon.</h1>
      <p>We are preparing the Managix Digital Marketing experience for growth, visibility, campaigns and performance-led acquisition.</p>
      <a href="../">Back to Managix Global</a>
    </main>
  </body>
</html>
