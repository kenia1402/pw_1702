<?php
require('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

echo $twig->render('boasvindas.html');

