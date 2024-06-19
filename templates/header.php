<?php
$sections = $translations['sections'];

$menuItems = [];
foreach ($translations['sections'] as $sectionKey => $sectionDetails) {
  $menuItems[] = [
    'title' => $translations['menu'][$sectionKey] ?? $sectionDetails['title'],
    'url' => build_url('#' . $sectionKey . 'Section')
  ];
}
?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="/css/global.css" />
  <link rel="stylesheet" href="/css/sections.css" />
  <link rel="icon" type="image/png" href="img/logo.webp">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <meta name="keywords" content="<?= @htmlspecialchars($page['seo']['keywords']); ?>">
  <meta name="description" content="<?= @htmlspecialchars($page['seo']['description']); ?>">
  <?php if ($_ENV['ENV'] !== 'dev') : ?>
  <script src="https://www.google.com/recaptcha/enterprise.js?render=<?= $_ENV['RECAPTHA_PUBLIC']; ?>"></script>
  <?php endif; ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XHRV6VZNYN"></script>
  <script src="/js/functions.js"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'G-XHRV6VZNYN');
  </script>
</head>

<body>
  <header>
    <div class="headerContainer">
      <a href="<?= build_url(); ?>" title="<?= $site_name; ?>" class="headerLogo">
        <img src="/img/logo-black-trans.webp" alt="<?= $site_name; ?>">
      </a>
      <div class="headerLang">
        <a href="<?= !empty($pageName) ? "/pl/{$pageName}" : '/pl'; ?>" title="Polski">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 60 30">
            <rect width="60" height="15" fill="#fff" />
            <rect width="60" height="15" y="15" fill="#dc143c" />
          </svg>
        </a>
        <a href="/ua<?= !empty($pageName) ? "/{$pageName}" : ''; ?>" title="Українська">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 60 30">
            <rect width="60" height="15" fill="#0057b7" />
            <rect width="60" height="15" y="15" fill="#ffd700" />
          </svg>
        </a>
        <a href="/en<?= !empty($pageName) ? "/{$pageName}" : ''; ?>" title="English">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="30" height="20">
            <clipPath id="t">
              <path d="M30,15v15h15zv15H15zV15H0zV0h15zV0h15zV0H30z" />
            </clipPath>
            <path d="M0,0v30h60V0z" fill="#012169" />
            <path d="M0,0L60,30m0-30L0,30" stroke="#fff" stroke-width="6" />
            <path d="M0,0L60,30m0-30L0,30" stroke="#C8102E" stroke-width="4" />
            <path d="M30,0v30M0,15h60" stroke="#fff" stroke-width="10" />
            <path d="M30,0v30M0,15h60" stroke="#C8102E" stroke-width="6" />
            <path d="M0,0L60,30m0-30L0,30" stroke="#fff" stroke-width="6" clip-path="url(#t)" />
            <path d="M0,0L60,30m0-30L0,30" stroke="#C8102E" stroke-width="4" clip-path="url(#t)" />
          </svg>
        </a>
      </div>
      <nav>
        <ul>
          <?php foreach ($menuItems as $item) : ?>
          <li>
            <a href="<?= $item['url']; ?>">
              <?= !empty($item['icon']) ? '<i class="' . $item['icon'] . '"></i> ' : ''; ?>
              <?= $item['title']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </header>