<?php

function default_section($key, $section, $before = '', $after = '')
{
  echo '<section id="' . $key . 'Section" class="section">
    <h2 class="sectionTitle">' . $section['title'] . '</h2>';
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
