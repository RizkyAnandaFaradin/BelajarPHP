<?php

class Orang
{
   const NAMA = "NANDA";
   function info()
   {
      echo "Nama saya adalah " . self::NAMA;
   }
}
$name = new Orang();
$name->info();
