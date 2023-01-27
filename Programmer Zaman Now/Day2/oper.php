<?php
$a = [
   'nama' => 'Rizky',
   'umur' => '22',
   'pekerjaan' => 'Nganggur',

];

$b = [
   'nama' => 'Bagus',
   'umur' => '23',
   'pekerjaan' => 'Nganggur2',

];


$c = $b + $a;

var_dump($c);
