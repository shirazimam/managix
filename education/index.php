<?php
$pageTitle = 'Managix Education | Coming Soon';
$pageDescription = 'Managix Education is preparing learning, training and institution-focused solutions from Managix Global.';
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
    <style>
      * { box-sizing: border-box; }
      body {
        min-height: 100vh;
        margin: 0;
        display: grid;
        place-items: center;
        padding: 28px;
        background: linear-gradient(135deg, #f8fafc, #eef4fb);
        color: #0b1728;
        font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
        line-height: 1.6;
      }
      main {
        width: min(760px, 100%);
        padding: clamp(28px, 6vw, 58px);
        border: 1px solid #d8e0ea;
        border-radius: 8px;
        background: #ffffff;
        box-shadow: 0 18px 46px rgba(11, 23, 40, 0.1);
      }
      img { width: 180px; margin-bottom: 48px; }
      p:first-of-type {
        margin: 0 0 12px;
        color: #1787c8;
        font-size: 0.76rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
      }
      h1 { margin: 0; font-size: clamp(2rem, 5vw, 3.8rem); line-height: 1.08; }
      p { color: #5f6d7f; }
      a {
        display: inline-flex;
        margin-top: 18px;
        padding: 11px 16px;
        border-radius: 8px;
        background: #0b45d9;
        color: #ffffff;
        font-weight: 700;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <main>
      <img src="../technology/assets/brand/managix-logo-light-base-colored.png" alt="Managix Technology" />
      <p>Managix Education</p>
      <h1>Coming soon.</h1>
      <p>We are preparing the Managix Education experience. Please check back shortly.</p>
      <a href="../">Back to Managix Global</a>
    </main>
  </body>
</html>
