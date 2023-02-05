<?php
class Login
{
}

$login = new Login();
//INI DULU
var_dump(Login::class);
var_dump(get_class($login));

//SEKARANG BISA
var_dump($login::class);
