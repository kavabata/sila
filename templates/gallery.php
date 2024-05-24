<section class="gallery" id="gallerySection">
  <div class="sectionTitle"><?=$section['title'];?></div>
  <div class="galleryContainer">
    <?php foreach($section['images'] as $key => $title): ?>
      <div class="item">
        <span class="title"><?=$title;?></span>
        <img src="img/gallery/<?=$key;?>.webp" alt="<?=$title;?>">
      </div>
    <?php endforeach;?>
    </div>
  </section>