<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'kenia' && $pass == '1234') {
    header('location:boasvindas.php');
    die;
    }else {
        header('location:login.php?erro=1');
        die;
    }