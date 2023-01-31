<?php
class Category
{
   private string $name;
   private bool $expensive;

   function getName(): string
   {
      return $this->name;
   }

   function setName(string $name): void
   {
      if (trim($name) != "") {
         $this->name = $name;
      }
   }

   function isExpensive(): bool
   {
      return $this->expensive;
   }

   function setExpensive(bool $expensive): void
   {
      $this->expensive = $expensive;
   }
}
