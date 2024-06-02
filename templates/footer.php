<footer>
  <div class="footerContainer">
    <div class="footerMain">
      <div class="footerMainLogoContainer">
        <a class="footerMainLogo" href="index.php" title="<?= $site_name; ?>">
          <img src="/img/logo-white-trans.webp" alt="<?= $site_name; ?>" />
        </a>
        <p><?= $site_name; ?></p>
      </div>
      <p class="footerMainQuote">
        "<?= $translations['footer']['quote']; ?>"
      </p>
      <p>
        <?= $translations['footer']['account_number']; ?>
        <strong class="accountNumber" id="accountNumber">
          <?= $site_account; ?>
        </strong>
        <button onclick="copyAccountNumber()" class="copy-btn" title="copy">
          <i class="fas fa-copy"></i>
        </button>
      </p>
    </div>

    <div class="footerSide">
      <div class="footerSideBlock">
        <div class="footerSideTitle">
          <?= $translations['footer']['useful_links']; ?>
        </div>
        <ul>
          <?php foreach ($menuItems as $item) : ?>
          <li>
            <a href="<?= $item['url']; ?>">
              <?= !empty($item['icon']) ? '<i class="' . $item['icon'] . '"></i> ' : ''; ?>
              <?= $item['title']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footerSideBlock">
        <div class="footerSideTitle"><?= $translations['footer']['contact']; ?></div>
        <p>
          <a href="tel:+48510345436" title="zadzwoń">+48 510 345 436</a>
          <br />
          <a href="mailto:silakobietywro@gmail.com" title="napisz">silakobietywro@gmail.com</a>
          <br />
          <a href="https://g.co/kgs/gNwMGgi" target="_blank">ul. Łaciarska 32, 50-146 Wrocław</a>
        </p>

        <p>
          KRS 0000968925
          <br />
          NIP 8943186703
          <br />
          REGON 522005281
        </p>
      </div>
    </div>
  </div>
  <div class="footerCopyright">
    &copy; 2022-<?=date("Y");?> <?= $site_name; ?>
</footer>

<script>
function copyTest() {
  var account = document.getElementById('accountNumber');
  if (!account) {
    console.error('Nie działa');
  } else {
    console.log("ok")
  }
}

function copyAccountNumber() {
  const accountNumberElement = document.getElementById('accountNumber');
  if (!accountNumberElement) {
    console.error('The element with id "accountNumber" was not found.');
    return;
  }

  const accountNumber = accountNumberElement.textContent.trim();

  const tempInput = document.createElement('textarea');
  tempInput.value = accountNumber;
  document.body.appendChild(tempInput);

  tempInput.select();
  tempInput.setSelectionRange(0, 99999); // for mobile
  document.execCommand('copy');

  document.body.removeChild(tempInput);
}
</script>


</body>

</html>