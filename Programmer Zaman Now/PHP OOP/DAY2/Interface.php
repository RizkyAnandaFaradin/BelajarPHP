<?php

namespace Data;

interface HasBrand
{
   function getBrand(): string;
}

interface IsMaintenance
{
   function IsMaintenance(): bool;
}
interface Car extends HasBrand
{
   function Speed(): void;
   function getTire(): int;
}

class Avanza  implements Car
{
   public function getBrand(): string
   {
      return "Avanza";
   }
   public function Speed(): void
   {
      echo "Tambah kecepatan Avanza";
   }

   public function getTire(): int
   {
      return 4;
   }
}
