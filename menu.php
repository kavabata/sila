<?php
include('includes/init.php');

$page = $translations['pages'][$pageName];
$page['seo']['keywords'] = isset($page['seo']['keywords']) ? $page['seo']['keywords'] . ',' . $translations['seo']['generic_keywords'] : $translations['seo']['generic_keywords'];

// echo '<pre>';
// var_dump($translations);
// var_dump($site_config);

include('templates/header.php');
?>

<div class="menuContainer">
  <section>
    <?= getSectionHeading($page['title'], 'h1'); ?>
    <p class="menuTitle"><?php echo $page['slogan']; ?></p>
    <div class="menuPhone">
      <a href="tel:<?= $translations['footer']['cafe_phone']; ?>"><?= $translations['footer']['cafe_phone']; ?></a>
    </div>
    <div class="menuCards">
      <?php foreach ($page['cards'] as $food) : ?>
        <div class="menuItem">
          <img src="<?php echo $food['img']; ?>" alt="<?php echo $food['title'] ?>" />
          <h2><?php echo $food['title']; ?></h2>
          <p><?php echo $food['description']; ?></p>
          <span class="menuItemPrice"><?php echo $food['price']; ?></span>
          <?php if (isset($food['wolt'])) : ?>
            <a href="<?= $food['wolt']; ?>" target="_blank" class="button menuItemButton"><?php echo $page['order_button'] ?></a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>


<?php include('templates/footer.php'); ?>