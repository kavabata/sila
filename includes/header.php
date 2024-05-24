<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="css/global.css" />
</head>
<body>
  <header>
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
  </header>