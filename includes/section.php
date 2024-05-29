<?php

function getTitleClass($title)
{
  $titleLenght = strlen($title);
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

function drawGallery($name)
{
  global $image_gallery_path;
  $path = $image_gallery_path . $name . '/';
  $files = get_files($path, ['jpg', 'mp4']);
?>
  <script>
    var albumFiles = <?= json_encode($files); ?>;
  </script>

  <div id="albumModal" class="albumModal" onclick="closeModal()">
    <div class="albumModalContent">
      <div class="albumModalControl" onclick="previousFile(event)">
        <svg class="arrow left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
        </svg>
      </div>
      <img class="albumModalImage" id="albumModalImage" onclick="stopPropagation(event)">
      <video class="albumModalVideo" id="albumModalVideo" controls>
        <source src="." type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class=" albumModalControl" onclick="nextFile(event)">
        <svg class="arrow right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
        </svg>
      </div>
    </div>
  </div>

  <div class="albumContainer">
    <?php foreach ($files as $index => $file) : ?>
      <div class="albumItem">
        <span class="albumItemTitle"><?= date('d M Y', $file['date']); ?></span>
        <?php if ($file['ext'] === 'jpg') : ?>
          <img src="<?= $file['path']; ?>" alt="<?= date('Y-m-d H:i:s', $file['date']); ?>" data-index="<?= $index; ?>" data-type="image" onclick="openModal(this)">
        <?php else : ?>
          <video data-index="<?= $index; ?>" data-type="video" onclick="openModal(this)">
            <source src="<?= $file['path']; ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <script>
    function openModal(element) {
      var modal = document.getElementById("albumModal");
      modal.style.display = "flex";
      var modalImg = document.getElementById("albumModalImage");
      var modalVideo = document.getElementById("albumModalVideo");

      if (element.dataset.type == 'video') {
        modalImg.style.display = 'none';
        modalVideo.style.display = 'block';
        modalVideo.src = element.querySelector('source').src;
        modalVideo.dataset.index = element.dataset.index;
      } else {
        modalImg.style.display = 'block';
        modalVideo.style.display = 'none';
        modalImg.src = element.src;
        modalImg.dataset.index = element.dataset.index;
      }
    }

    function closeModal() {
      var modal = document.getElementById("albumModal");
      modal.style.display = "none";
    }

    function stopPropagation(event) {
      event.stopPropagation();
    }

    function nextFile(event) {
      event.stopPropagation();
      var modalImg = document.getElementById("albumModalImage");
      var modalVideo = document.getElementById("albumModalVideo");
      var currentIndex = parseInt(modalImg.style.display === 'none' ? modalVideo.dataset.index : modalImg.dataset.index);
      var nextIndex = (currentIndex + 1) % albumFiles.length;
      var nextFile = albumFiles[nextIndex];

      if (nextFile.ext === 'mp4') {
        modalImg.style.display = 'none';
        modalVideo.style.display = 'block';
        modalVideo.src = nextFile.path;
        modalVideo.dataset.index = nextIndex;
      } else {
        modalImg.style.display = 'block';
        modalVideo.style.display = 'none';
        modalImg.src = nextFile.path;
        modalImg.dataset.index = nextIndex;
      }
    }

    function previousFile(event) {
      event.stopPropagation();
      var modalImg = document.getElementById("albumModalImage");
      var modalVideo = document.getElementById("albumModalVideo");
      var currentIndex = parseInt(modalImg.style.display === 'none' ? modalVideo.dataset.index : modalImg.dataset.index);
      var previousIndex = (currentIndex - 1 + albumFiles.length) % albumFiles.length;
      var previousFile = albumFiles[previousIndex];

      if (previousFile.ext === 'mp4') {
        modalImg.style.display = 'none';
        modalVideo.style.display = 'block';
        modalVideo.src = previousFile.path;
        modalVideo.dataset.index = previousIndex;
      } else {
        modalImg.style.display = 'block';
        modalVideo.style.display = 'none';
        modalImg.src = previousFile.path;
        modalImg.dataset.index = previousIndex;
      }
    }

    document.addEventListener('keydown', function(event) {
      var modal = document.getElementById("albumModal");
      if (modal.style.display === "flex") {
        if (event.key === "Escape") {
          closeModal();
        } else if (event.key === "ArrowRight") {
          nextFile(event);
        } else if (event.key === "ArrowLeft") {
          previousFile(event);
        }
      }
    });
  </script>
<?php } ?>