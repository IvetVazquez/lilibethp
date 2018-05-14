<?php
  include('./MailChimp.php');
  use \DrewM\MailChimp\MailChimp;

  $name = $_POST["name"];
  $email = $_POST["email"];
  $whatsapp = $_POST["whatsapp"];
  $findme = $_POST["findme"];
  $message = $_POST["message"];
  $list_id = "93dcf15041";  // spanish version

  $MailChimp = new MailChimp('8054672f7391700d9f842e8ae8338979-us15');
  $result = $MailChimp->post("lists/$list_id/members", [
        'email_address' => $email,
        'status'        => 'subscribed',
        'merge_fields'  => ['NAME' => $name, 'FINDME' => $findme, 'MESSAGE' => $message, 'PHOME' => $whatsapp],
      ]);

  print_r($result);

  if ($MailChimp->success()) {
    echo "welcome to the list $name with email address $email";
  } else {
    http_response_code(400);
    echo $MailChimp->getLastError();
    /*if (strpos($MailChimp->getLastError(), "is already a list member")) {
      echo "$email is already a list member";
    } else if (strpos($MailChimp->getLastError(), "provide a valid email address")) {
      echo "$email is not a valid email address";
    } else if (strpos($MailChimp->getLastError(), "merge fields were invalid")) {
      echo "$name is not a valid name value";
    } else if (strpos($MailChimp->getLastError(), "Blank email address")) {
      echo "email address is blank";
    } else {
      echo "UNKNOWN ERROR";
    }*/
  }
