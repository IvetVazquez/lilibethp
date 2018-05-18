<?php
  require '../vendor/autoload.php';

  $dotenv = new Dotenv\Dotenv(__DIR__, '.env.example');
  $dotenv->load();

  print_r("que show?");
  print_r(getenv('HOLA'));
  print_r(getenv('CHIDO'));
