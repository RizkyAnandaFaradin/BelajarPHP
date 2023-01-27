<?php
session_start();

//ini untuk logout, dengan  beberapa metode:
//1. mmenimpa dengan array kosong
$_SESSION = [];
//2. memastikan bahwa session sudah di clear
session_unset();
//3. menghpaus session
session_destroy();

//menghapus cookienya
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

//mengembalikan user, ke halaman login
header('location: login.php');
exit;
