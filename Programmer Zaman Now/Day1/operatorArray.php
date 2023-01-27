<?php
$a = [
   'nama' => 'Rizky',
   'umur' => '22',
   'pekerjaan' => 'Nganggur',

];
$b = [
   'nama2' => 'Bagus',
   'umur2' => '23',
   'pekerjaan2' => 'Nganggur2',

];
$c = $b + $a;
var_dump($c);
