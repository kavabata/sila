<?php
include('includes/config.php');
include('includes/section.php');

$page = $translations['pages'][$pageName];

include('includes/header.php');
?>
<div class="content">
  FORM <?= $page['title']; ?>

  <?= $page['field']['name']; ?>
</div>
<?php include('includes/footer.php'); ?>