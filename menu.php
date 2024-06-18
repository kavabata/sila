<?php
include('includes/init.php');

$pageName = 'menu';
$page = $sections[$pageName];
$page['seo']['keywords'] = isset($page['seo']['keywords']) ? $page['seo']['keywords'] . ',' . $translations['seo']['generic_keywords'] : $translations['seo']['generic_keywords'];

include('templates/header.php');
?>
<div class="content">
  <section id="<?= $pageName; ?>Page" class="section">
    <?= getSectionHeading($page['title'], 'h1'); ?>

    <div class="pageContainer">
      <div class="pageLeft">
        <?php if (isset($page['description'])) : ?>
        <div class="intro">
          <?php foreach ($page['description'] as $p) : ?>
          <p><?= $p; ?></p>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="menu-cards">
          <?php foreach ($page['cards'] as $card) : ?>
          <div class="card">
            <?php if (isset($card['img'])) : ?>
            <div class="cardImageContainer"><img src="<?= $card['img']; ?>" class="cardImage" /></div>
            <?php endif; ?>
            <div class="title"><?= $card['title']; ?></div>
            <?php if (isset($card['description'])) : ?>
            <p><?= $card['description']; ?></p>
            <?php endif; ?>
            <?php if (isset($card['link'])) : ?>
            <a href="<?= $card['link']; ?>" class="button"><?= $card['button']; ?></a>
            <?php endif; ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include('templates/footer.php'); ?>