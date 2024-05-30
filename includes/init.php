<?php

include('functions.php');
load_env('.env');
session_start();

if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if (in_array($lang, ['en', 'pl', 'ua'])) {
    $_SESSION['lang'] = $lang;
  }
}
$lang = $_SESSION['lang'] ?? 'pl';
$pageName = isset($_GET['page']) ? $_GET['page'] : '';

include('config.php');

$translations = include "lang/{$lang}.php";
$translations = array_replace_recursive($translations, $site_config);

include('includes/section.php');