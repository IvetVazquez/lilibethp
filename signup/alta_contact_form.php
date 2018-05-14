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
        'merge_fields'  => ['NAME' => $name, 'FINDME' => $findme, 'MESSAGE' => $message, 'PHONE' => $whatsapp],
      ]);

  if ($MailChimp->success()) {
    $url = 'http://lilibethpinto.com/outlook/send-with-outlook.php';
    $url .= "?name=$name&email=$email&whatsapp=$whatsapp&findme=$findme&message=$message"
    $respuesta = file_get_contents($url);
    echo "welcome to the list $name with email address $email. " . $respuesta;
  } else {
    http_response_code(400);
    if (strpos($MailChimp->getLastError(), "is already a list member")) {
      echo "$email is already a list member";
    } else if (strpos($MailChimp->getLastError(), "provide a valid email address")) {
      echo "$email is not a valid email address";
    } else if (strpos($MailChimp->getLastError(), "merge fields were invalid")) {
      switch ($result['errors'][0]['field']) {
        case 'NAME':
          echo "$name is not a valid name value";
          break;
        case 'PHONE':
          echo "$whatsapp is not a valid whatsapp value";
          break;
        case 'MESSAGE':
          echo "$message is not a valid message value";
          break;
       }
    } else if (strpos($MailChimp->getLastError(), "Blank email address")) {
      echo "email address is blank";
    } else {
      echo "UNKNOWN ERROR";
    }
  }
