<?php

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
        'url' => '#' . $sectionKey
    ];
}

include('includes/header.php');
?>
<div class="content">
  <?php foreach($sections as $key => $section):
    if (!isset($section['template'])) :
      include('includes/default_section.php');
    endif;
  endforeach;?>
</div>

<?php include('includes/footer.php'); ?>