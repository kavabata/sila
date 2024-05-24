<?php 
$sections = $translations['sections'];

$menuItems = [];
foreach ($translations['sections'] as $sectionKey => $sectionDetails) {
    $menuItems[] = [
        'title' => $translations['menu'][$sectionKey] ?? $sectionDetails['title'],
        'url' => '/#' . $sectionKey . 'Section'
    ];
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/sections.css" />
</head>
<body>
  <header>
    <div class="headerContainer">
    <a href="/" title="<?=$site_name;?>" class="headerLogo">
      <img src="img/logo-black-trans.webp" alt="<?=$site_name;?>">
    </a>
    <nav>
      <ul>
        <?php foreach ($menuItems as $item): ?>
          <li>
            <a href="<?=$item['url'];?>">
              <?=!empty($item['icon']) ? '<i class="' . $item['icon'] . '"></i> ': '';?>
              <?=$item['title'];?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    </div>
  </header>