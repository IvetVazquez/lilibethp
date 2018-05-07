<?php
  include('./MailChimp.php');
  use \DrewM\MailChimp\MailChimp;

  $name = $_POST["name"];
  $email = $_POST["email"];

  $MailChimp = new MailChimp('8054672f7391700d9f842e8ae8338979-us15');
  $result = $MailChimp->get('lists');

  print_r($result);
  print_r($name);
  print_r($email);
