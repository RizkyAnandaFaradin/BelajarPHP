<?php
require_once('ReadOnly.php');

class Product
{
   public function __construct(
      public string $name,
      public Category $category = new Category("0", "Unknown")
   ) {
   }

   function Category(Category $category = new Category("0", "Unknown"))
   {
      echo "Halo $category->name kamu idnya : $category->id";
   }
}
$product = new Product("Rizky");
var_dump($product);
$product->Category();
