<?php
include('includes/init.php');

$page = $translations['pages'][$pageName];
$page['seo']['keywords'] = isset($page['seo']['keywords']) ? $page['seo']['keywords'] . ',' . $translations['seo']['generic_keywords'] : $translations['seo']['generic_keywords'];

include('templates/header.php');
?>

<div class="content">
  <section class="menus-area" style="background-image: url('img/foods/barszcze.jpg')">
    <?= getSectionHeading($page['title'], 'h1'); ?>

    <h6><?php echo $page['slogan']; ?></h6>

    <div class="menus">
      <?php foreach ($page['menu_cards'] as $food) : ?>
        <div class="menu-items">
          <i class="single-menu">
            <span><?php echo $food['price']; ?></span>
            <img src="<?php echo $food['img']; ?>" alt="<?php echo $food['title'] ?>" />
            <h4><?php echo $food['title']; ?></h4>
            <p><?php echo $food['description']; ?></p>
            <a href="#"><?php echo $food['order_text'] ?></a>
        </div>
    </div>

  <?php endforeach; ?>
</div>

</section>
</div>

<?php include('templates/footer.php'); ?>