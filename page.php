<?php
include('includes/init.php');

$page = $translations['pages'][$pageName];
$page['seo']['keywords'] = $page['seo']['keywords'] . ',' . $translations['seo']['generic_keywords'];

include('templates/header.php');
?>
<div class="content">
  <section id="<?= $pageName; ?>Page" class="section">
    <?=getSectionHeading($page['title'], 'h1');?>

    <div class="pageContainer">
      <div class="pageLeft">
        <?php if (isset($page['intro'])) : ?>
        <div class="intro">
          <?php foreach ($page['intro'] as $p) :
              echo '<p>' . $p . '</p>';
            endforeach; ?>
        </div>
        <?php endif;

        if (isset($page['links'])) : ?>
        <div class="links">
          <?php foreach ($page['links'] as $link) :
              echo '<a href="' . $link['url'] . '" title="' . $link['text'] . '" class="pageLink" target="_blank">
              ' . $link['text'] . '</a>';
            endforeach; ?>
        </div>
        <?php endif;

        if (isset($page['bank_details'])) : ?>
        <div class="bankDetails">
          <div>
            <strong>Bank:</strong> <span id="bank_name"> <?= $page['bank_details']['bank_name']; ?> </span>
            <button class="button-copy-bank-name" onclick="copyToClipboard('bank_name')" title="copy">
              <i class="fas fa-copy"></i>
            </button>
          </div>
          <div>
            <strong>Numer konta:</strong> <span
              id="account_number"><?= $page['bank_details']['account_number']; ?></span>
            <button class="button-copy-account-number" onclick="copyToClipboard('account_number')" title="copy">
              <i class="fas fa-copy"></i>
            </button>
          </div>
          <div>
            <strong>Nazwa fundacji:</strong> <span id="foundation_name">
              <?= $page['bank_details']['foundation_name']; ?> </span>
            <button class="button-copy-foundation-name" onclick="copyToClipboard('foundation_name')" title="copy">
              <i class="fas fa-copy"></i>
            </button>
          </div>
          <div>
            <strong>Tytuł wpłaty:</strong> <span id="payment_title"> <?= $page['bank_details']['payment_title']; ?>
            </span>
            <button class="button-copy-payment-title" onclick="copyToClipboard('payment_title')" title="copy">
              <i class="fas fa-copy"></i>
            </button>
          </div>
        </div>
        <?php endif;

        if (isset($page['advice'])) : ?>
        <div class="advice">
          <?php foreach ($page['advice'] as $p) :
              echo '<p>' . $p . '</p>';
            endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (isset($page['outro'])) : ?>
        <div class="intro">
          <?php foreach ($page['outro'] as $p) :
              echo '<p>' . $p . '</p>';
            endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php if (isset($page['gallery'])) : ?>
      <?= drawGallery($page['gallery']); ?>
      <?php endif;?>
    </div>

  </section>
</div>

<?php include('templates/footer.php'); ?>