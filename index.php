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

  <?php foreach ($sections as $key => $section) :
    if (!isset($section['template'])) :
      default_section($key, $section);
    else :
      include("templates/{$section['template']}.php");
    endif;
  endforeach; ?>
</div>

<?php include('templates/footer.php'); ?>