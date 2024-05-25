<section class="military" id="militarySection">
  <video autoplay muted loop class="videoPlayer">
    <source src="video/video1.mp4" type="video/mp4" />
    your browser does not support HTML5 video
  </video>

  <div class="sectionTitle"><?= $section['title']; ?></div>

  <div class="militaryContainer">
    <h3>
      <?= $section['headline']; ?>
    </h3>
    <p>
      <?= $section['description']['paragraph']; ?>
    </p>
    <a href="/zsu" class="button"><?= $section['button']; ?></a>
  </div>
</section>