<?php
  include('./MailChimp.php');
  use \DrewM\MailChimp\MailChimp;

  $name = $_POST["name"];
  $email = $_POST["email"];
  $list_id = "68dd8a46c4";

  $MailChimp = new MailChimp('8054672f7391700d9f842e8ae8338979-us15');
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
    } else {
      echo $MailChimp->getLastError();
    }
  }
