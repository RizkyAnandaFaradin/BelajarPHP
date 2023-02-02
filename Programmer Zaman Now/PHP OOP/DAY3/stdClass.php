<?php

class  Person
{
   var string $nama;
   var string $kelas;

   function __construct($nama, $kelas)
   {
      $this->nama = $nama;
      $this->kelas = $kelas;
   }
}
$Person = new Person('rizky', 1);
var_dump($array = (array) $Person);
