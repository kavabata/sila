<section id="<?=$key;?>" class="section">
  <h2 class="sectionTitle"><?=$section['title'];?></h2>
  <?php if(isset($section['description'])):
    if (is_array($section['description'])):
      foreach($section['description'] as $paragraph):
        echo '<p>' . $paragraph . '</p>';
      endforeach;
    else:
      echo '<p>' . $section['description'] . '</p>';
    endif;
  endif;?>
</section>