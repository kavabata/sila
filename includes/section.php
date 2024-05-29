<?php

function getTitleClass($title)
{
  $titleLenght = mb_strlen(strip_tags($title));
  $size = '';
  if ($titleLenght > 30) {
    $size = ' sectionTitle--xl';
  } else if ($titleLenght > 20) {
    $size = ' sectionTitle--lg';
  } else if ($titleLenght > 15) {
    $size = ' sectionTitle--md';
  }
  return 'sectionTitle' . $size;
}

function getSectionHeading($title, $tag = 'h2') {
  return '<'.$tag.' class="' . getTitleClass($title) . '">'.$title.'</'.$tag.'>';
}

function default_section($key, $section, $before = '', $after = '')
{
  echo '<section id="' . $key . 'Section" class="section">';
  echo getSectionHeading($section['title']);
  echo $before;
  if (isset($section['description'])) :
    if (is_array($section['description'])) :
      foreach ($section['description'] as $paragraph) :
        echo '<p>' . $paragraph . '</p>';
      endforeach;
    else :
      echo '<p>' . $section['description'] . '</p>';
    endif;
  endif;

  if (isset($section['cards'])) :
    echo '<div class="' . $key . 'Cards">';
    foreach ($section['cards'] as $card) :
      echo '<div class="card">';
      if (isset($card['img'])) echo '<div class="cardImageContainer"><img src="' . $card['img'] . '" class="cardImage" /></div>';

      echo '<div class="title">' . $card['title'] . '</div>';
      if (isset($card['description'])) echo '<p>' . $card['description'] . '</p>';

      echo '<a href="' . $card['link'] . '" class="button">' . $card['button'] . '</a>';
      echo '</div>';
    endforeach;
    echo '</div>';
  endif;


  echo $after;
  echo '</section>';
}