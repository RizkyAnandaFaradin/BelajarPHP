<?php

class konstrak
{
   var string $name;
   var string $address;

   function __construct(string $name, string $address)
   {
      $this->name = $name;
      $this->address = $address;
   }

   function __destruct()
   {
      echo 'PROGRAM TELAH SELESAI';
   }

   function info()
   {
      echo "Halo nama saya $this->name, dan saya tinggal di $this->address" . PHP_EOL;
   }
}

$konst = new konstrak('nanda', 'citayam');
$konst->info();
