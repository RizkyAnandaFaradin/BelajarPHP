<?php
class Example
{
   public string|int|bool|array $types;

   function example(string|array $types): string|array
   {
      if (is_string($types)) {
         return "ini adalah tipe data string";
      } else if (is_array($types)) {
         return ["ini adalah tipe data array"];
      }
   }
}
$example = new Example();
var_dump($example->example([1, 2]));
