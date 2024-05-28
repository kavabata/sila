<?php
include('includes/init.php');

$page = $translations; // for seo
include('templates/header.php');

?>
<div class="content">
  <div class="homeHead">
    <div class="homeHeadContainer">
      <div class="homeHeadBlock">
        <h1>
          <?= $translations['header']['title']; ?>
          <span>"<?= $site_name; ?>"</span>
        </h1>
        <p><?= $translations['header']['description']; ?></p>
        <p>
          <a href="/donate" class="button">
            <?= $translations['header']['donate']; ?>
          </a>
        </p>
      </div>
    </div>
  </div>
  <!-- homeSection end hear -->

  <?php foreach ($sections as $key => $section) : ?>
  <section id="<?= $key; ?>Section" class="section">
    <h2 class="sectionTitle <?= getTitleClass($section['title']); ?>">
      <?= $section['title']; ?>
      <?php if (isset($section['subtitle'])) : ?>
      <span><?= $section['subtitle']; ?></span>
      <?php endif; ?>
    </h2>
    <?php if (isset($section['description'])) : ?>
    <p><?= $section['description']; ?></p>
    <?php endif; ?>
  </section>
  <?php endforeach; ?>
</div>

<?php include('templates/footer.php'); ?>