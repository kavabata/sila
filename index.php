<?php

include('includes/section.php');

$title = "Sila Kobiety";
$site_name = "Sila Kobiety";
$site_account = "22 1020 5242 0000 2002 0560 3370";

$lang = isset($_GET['lang']) && $_GET['lang'] == 'en' ? 'en' : 'pl';
$translations = include "lang/{$lang}.php";

$sections = $translations['sections'];

$menuItems = [];
foreach ($translations['sections'] as $sectionKey => $sectionDetails) {
    $menuItems[] = [
        'title' => $translations['menu'][$sectionKey] ?? $sectionDetails['title'],
        'url' => '#' . $sectionKey . 'Section'
    ];
}
include('includes/header.php');
?>
<div class="content">

  <div class="homeHead">
    <div class="homeHeadContainer">
      <div class="homeHeadBlock">
        <h1>
          <?=$translations['header']['title'];?>
          <span>"<?=$site_name;?>"</span>
        </h1>
        <p><?=$translations['header']['description'];?></p>
        <p>
          <a href="support.html" class="button">
            <?=$translations['header']['donate'];?>
          </a>
        </p>
      </div>
    </div>
  </div>
  <!-- homeSection end hear -->



  <?php foreach($sections as $key => $section):
    if (!isset($section['template'])):
      default_section($key, $section);
    else:

    endif;
  endforeach;?>
</div>

<?php include('includes/footer.php'); ?>