<?php
require_once 'properties.php';
$person = new Person();

//menambahkan data properties
$person->name = 'Nanda';
$person->address = 'Subang';

//menampilkan data properties
echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;

echo Person::NAMA;
