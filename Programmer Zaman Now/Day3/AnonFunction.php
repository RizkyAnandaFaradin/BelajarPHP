<?php

// function Namaaa(string $name, $filter)
// {
//    $filtername = $filter($name);
//    echo "Hello $filtername";
// };
// $Filterr = function ($name) {
//    return strtoupper(($name));
// };
// Namaaa('Nanda', $Filterr);


//contoh penggunaan use di closure
// $first   = 'nanda';
// $last    = 'lost';
// $filter = function () use ($first, $last) {
//    echo "Halo $first $last";
// };
// $filter();

$first   = 'nanda';
$last    = 'lost';
$arrowFun = fn () => "Heloo $first $last";
echo $arrowFun();
