<?php
class Product
{
   public string $id;
   public string $name;
   public string $price;
   public string $quantity;

   public function __construct(string $id, string $name, int $price, int $quantity)
   {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;
   }
}

//DENGAN MENGGUNAKAN CONSTRUCTOR PROPERTY PROMOTION
class Product1
{
   public function __construct(
      public string $id,
      public string $name,
      public int $price,
      public int $quantity
   ) {
   }
}
