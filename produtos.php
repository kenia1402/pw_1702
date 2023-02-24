<?php
require('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

$template = $twig->load('text.html');
echo $template ->render([
  'titulo' =>'produtos',

]);