<?php
include('includes/init.php');

$page = $translations['pages'][$pageName];
$page['seo']['keywords'] = $page['seo']['keywords'] . ',' . $translations['seo']['generic_keywords'];

include('templates/header.php');
?>
<div class="content">
  <section id="<?= $pageName; ?>Page" class="section">
    <?=getSectionHeading($page['title'], 'h1');?>

    <div class="pageContainer">
      <div class="pageLeft">
        <?php if (isset($page['intro'])) : ?>
          <div class="intro">
            <?php foreach ($page['intro'] as $p) :
              echo '<p>' . $p . '</p>';
            endforeach; ?>
          </div>
        <?php endif;

        if (isset($page['links'])) : ?>
          <div class="links">
            <?php foreach ($page['links'] as $link) :
              echo '<a href="' . $link['url'] . '" title="' . $link['text'] . '" class="pageLink" target="_blank">
              ' . $link['text'] . '</a>';
            endforeach; ?>
          </div>
        <?php endif;

        if (isset($page['advice'])) : ?>
          <div class="advice">
            <?php foreach ($page['advice'] as $p) :
              echo '<p>' . $p . '</p>';
            endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (isset($page['outro'])) : ?>
          <div class="intro">
            <?php foreach ($page['outro'] as $p) :
              echo '<p>' . $p . '</p>';
            endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if (isset($page['gallery'])) : ?>
        <?= drawGallery($page['gallery']); ?>
      <?php endif;?>
    </div>

  </section>
</div>

<?php include('templates/footer.php'); ?>