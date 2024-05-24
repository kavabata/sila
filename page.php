<?php

include('includes/section.php');
include('includes/config.php');

$lang = isset($_GET['lang']) && $_GET['lang'] == 'en' ? 'en' : 'pl';
$translations = include "lang/{$lang}.php";

include('includes/header.php');

$page = $_GET['page'];
?>
<div class="content">
  <section id="<?=$page;?>Page" class="section">
    <h2 class="sectionTitle"><?=$translations['pages'][$page]['title'];?></h2>
    

    <?php if (isset($translations['pages'][$page]['intro'])): ?>
    <div class="intro">
      <?php foreach($translations['pages'][$page]['intro'] as $p):
        echo '<p>'.$p.'</p>';
      endforeach; ?>
    </div>
    <?php endif;

    if (isset($translations['pages'][$page]['advice'])):?>
    <div class="advice">
      <?php foreach($translations['pages'][$page]['advice'] as $p):
          echo '<p>'.$p.'</p>';
        endforeach;?>
    </div>
    <?php endif;
    
    if (isset($translations['pages'][$page]['gallery'])): ?>
    <div class="gallery">
      Gallery goes here
    </div>
    <?php 
    endif;

    if (isset($translations['pages'][$page]['outro'])):
      foreach($translations['pages'][$page]['outro'] as $p):
        echo '<p>'.$p.'</p>';
      endforeach;
    endif;
    ?>
  </section>
</div>

<?php include('includes/footer.php'); ?>