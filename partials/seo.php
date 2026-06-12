<?php
$siteName = 'Managix Global';
$siteUrl = 'https://www.managixglobal.com';
$verificationCode = 'yoqzvgXtpjuyvCu4t_Pvm1MeRexdi6yA-mOi_RwXZvQ';

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? ($_SERVER['SCRIPT_NAME'] ?? '/'), PHP_URL_PATH) ?: '/';
$requestPath = preg_replace('#/index\.php$#', '/', $requestPath);
$requestPath = preg_replace('#\.php$#', '', $requestPath);
$requestPath = '/' . ltrim($requestPath, '/');
$canonicalUrl = rtrim($siteUrl, '/') . $requestPath;

$pageTitleText = $pageTitle ?? $siteName;
$pageDescriptionText = $pageDescription ?? 'Managix Global delivers technology, digital marketing, real estate and education solutions for ambitious organizations.';
$pageImageUrl = $pageImage ?? ($siteUrl . '/technology/assets/brand/managix-logo-dark-base-colored.png');
$pageRobots = $pageRobots ?? 'index, follow';

$webPageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $pageTitleText,
    'description' => $pageDescriptionText,
    'url' => $canonicalUrl,
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Managix Technology and Management Services LLP',
        'url' => $siteUrl,
        'logo' => $siteUrl . '/technology/assets/brand/managix-logo-dark-base-colored.png',
        'email' => 'info@managixglobal.com',
    ],
];
?>
    <meta name="google-site-verification" content="<?= htmlspecialchars($verificationCode, ENT_QUOTES) ?>" />
    <meta name="robots" content="<?= htmlspecialchars($pageRobots, ENT_QUOTES) ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES) ?>" />
    <meta property="og:site_name" content="<?= htmlspecialchars($siteName, ENT_QUOTES) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= htmlspecialchars($pageTitleText, ENT_QUOTES) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($pageDescriptionText, ENT_QUOTES) ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($pageImageUrl, ENT_QUOTES) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitleText, ENT_QUOTES) ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescriptionText, ENT_QUOTES) ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($pageImageUrl, ENT_QUOTES) ?>" />
    <script type="application/ld+json"><?= json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
