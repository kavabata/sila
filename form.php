<?php

include('includes/config.php');
include('includes/section.php');

$page = $translations['pages'][$pageName];

include('includes/header.php');

$errors = [];
$name = '';
$email = '';
$message = '';
$sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));
  $captcha = htmlspecialchars(trim($_POST["g-recaptcha-response"]));

  // Verify CAPTCHA
  $secret = '6Lc3kuspAAAAABi3VSW0PgORtTM0SZu80laGsFqE';
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
    echo "Invalid email format.";
    $errors[] = $page['messages']['email'];
  }

  // Prepare email
  $to = "contact@silakobiety.pl";
  $subject = "New Contact Form Submission";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $email_body = "Name: $name\n";
  $email_body .= "Email: $email\n\n";
  $email_body .= "Message:\n$message\n";

  // Send email
  if (mail($to, $subject, $email_body, $headers)) {
    $sent = true;
  } else {
    $errors[] = $page['messages']['fail'];
  }
}
?>
<div class="content">
  <section class="form" id="formSection">
    <div class="sectionTitle"><?= $page['title']; ?></div>

    <?php if ($sent) : ?>
      <div class="formSuccess">
        <?= $page['messages']['success']; ?>
        <a href="<?= build_url(); ?>" class="button">
          <?= $page['messages']['home']; ?>
        </a>
      </div>
    <?php else : ?>

      <form action="<?= build_url('form'); ?>" method="POST">
        <?php if (!empty($errors)) :
          foreach ($errors as $error) : ?>
            <div class="formError"><?= $error; ?></div>
        <?php endforeach;
        endif; ?>

        <label for="name"><?= $page['fields']['name']; ?>:</label>
        <input type="text" id="name" name="name" required value="<?= $name; ?>"><br><br>

        <label for="email"><?= $page['fields']['email']; ?>:</label>
        <input type="email" id="email" name="email" required value="<?= $email; ?>"><br><br>

        <label for="message"><?= $page['fields']['message']; ?>:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required><?= $message; ?></textarea><br><br>


        <div class="g-recaptcha" data-sitekey="6Lc3kuspAAAAAJ8_7QWZ6q-K1p7bteM2nril3XD8"></div><br><br>

        <input type="submit" value="Submit" class="button">
      </form>
    <?php endif; ?>
  </section>
</div>
<?php include('includes/footer.php'); ?>