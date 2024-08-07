<?php

include('includes/init.php');

$page = $translations['pages'][$pageName];
$errors = [];
$name = '';
$email = '';
$phone = '';
$message = '';
$sent = false;
$subject = "New Contact Form Submission";

if (isset($_GET['subscribe']) && $_GET['subscribe'] == 'polish') {
  $subject = 'Subscription to polish classes';
  $message = $page['messages']['subscribe_polish'];
  $page['title'] = $page['subscribe_title'];
  $pageName = 'subscribe';
}

include('templates/header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $phone = htmlspecialchars(trim($_POST["phone"]));
  $message = htmlspecialchars(trim($_POST["message"]));
  $email_subject = htmlspecialchars(trim($_POST["subject"]));
  $captcha = $_POST['recaptchaToken'];

  // Verify CAPTCHA
  $secret = $_ENV['RECAPTHA_PRIVATE'];
  $response = $captcha;
  $remoteip = $_SERVER['REMOTE_ADDR'];

  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
  $response = file_get_contents($url);
  $responseKeys = json_decode($response, true);

  if (intval($responseKeys["success"]) !== 1) {
    $errors[] = $page['messages']['captcha'];
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = $page['messages']['email'];
  }

  // Prepare email
  $to = "contact@silakobiety.pl";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $email_body = "Name: $name\n";
  $email_body .= "Email: $email\n\n";
  $email_body .= "Phone: $phone\n\n";
  $email_body .= "Message:\n$message\n";

  // Send email
  if (empty($errors) && mail($to, $email_subject, $email_body, $headers)) {
    $sent = true;
  } else {
    $errors[] = $page['messages']['fail'];
  }
}
?>
<script>
  function onSubmit(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('<?= $_ENV['RECAPTHA_PUBLIC']; ?>', {
        action: 'SUBMIT'
      });
      console.log({
        token
      }, document.getElementById('recaptchaToken'));
      document.getElementById('recaptchaToken').value = token;
      document.forms[0].submit();
    });
  }
</script>
<div class="content">
  <section class="form" id="formSection">
    <?= getSectionHeading($page['title'], 'h1'); ?>
    <?php if ($sent) : ?>
      <div class="formSuccess">
        <?= $page['messages']['success']; ?>
        <br />
        <br />
        <a href="<?= build_url(); ?>" class="button">
          <?= $page['messages']['home']; ?>
        </a>
      </div>
    <?php else : ?>

      <form action="<?= build_url('form'); ?>" method="POST" onsubmit="onSubmit(event)">
        <?php if (!empty($errors)) :
          foreach ($errors as $error) : ?>
            <div class="formError"><?= $error; ?></div>
        <?php endforeach;
        endif; ?>

        <input type="hidden" name="recaptchaToken" id="recaptchaToken" value="" />
        <input type="hidden" name="subject" id="subject" value="<?=$subject;?>" />

        <label for="name"><?= $page['fields']['name']; ?>:</label>
        <input type="text" id="name" name="name" required value="<?= $name; ?>"><br><br>

        <label for="email"><?= $page['fields']['email']; ?>:</label>
        <input type="email" id="email" name="email" value="<?= $email; ?>"><br><br>

        <label for="phone"><?= $page['fields']['phone']; ?>:</label>
        <input type="phone" id="phone" name="phone" value="<?= $phone; ?>"><br><br>

        <label for="message"><?= $page['fields']['message']; ?>:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required><?= $message; ?></textarea><br><br>

        <input type="submit" value="Submit" class="button-contact-form">
      </form>
    <?php endif; ?>
  </section>
</div>
<?php include('templates/footer.php'); ?>