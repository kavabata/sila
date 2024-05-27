<?php
include('includes/config.php');
include('includes/section.php');
include('includes/header.php');
?>
<div class="content">
  <section id="404Page" class="section">
    <h2 class="sectionTitle"><?= $translations['404']['title']; ?></h2>

    <div class="page404">
      <p><?= $translations['404']['description']; ?></p>
      <p>
        <a href="<?= build_url(); ?>" class="button">
          <?= $translations['404']['button']; ?> 😇
        </a>
      </p>
    </div>
  </section>
</div>

<?php include('includes/footer.php'); ?>