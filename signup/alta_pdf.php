<?php
  require '../vendor/autoload.php';

  $dotenv = new Dotenv\Dotenv(__DIR__ . '/../outlook');
  $dotenv->load();

  include('./MailChimp.php');
  use \DrewM\MailChimp\MailChimp;

  $name = $_POST["name"];
  $email = $_POST["email"];
  $list_id = getenv('list_id_pdf_spanish');

  $MailChimp = new MailChimp(getenv('mailchimp_api_key'));
  $result = $MailChimp->post("lists/$list_id/members", [
        'email_address' => $email,
        'status'        => 'subscribed',
        'merge_fields'  => ['FNAME' => $name],
      ]);

  if ($MailChimp->success()) {
    echo "welcome to the list $name with email address $email";
  } else {
    http_response_code(400);
    if (strpos($MailChimp->getLastError(), "is already a list member")) {
      echo "$email is already a list member";
    } else if (strpos($MailChimp->getLastError(), "provide a valid email address")) {
      echo "$email is not a valid email address";
    } else if (strpos($MailChimp->getLastError(), "merge fields were invalid")) {
      echo "$name is not a valid name value";
    } else if (strpos($MailChimp->getLastError(), "Blank email address")) {
      echo "email address is blank";
    } else {
      echo "UNKNOWN ERROR";
    }
  }
