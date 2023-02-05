<?php
class Category
{
   public readonly string $id;
   public readonly string $name;
   function __construct(string $id, string $name)
   {
      $this->id = $id;
      $this->name = $name;
   }

   function sayHello(): void
   {
      echo "Halo bang " . $this->name . $this->id;
   }
}
