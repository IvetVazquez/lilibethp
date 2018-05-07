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

  print_r($result);
