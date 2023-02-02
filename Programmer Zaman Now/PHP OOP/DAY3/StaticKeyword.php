<?php
class StaticKey
{
   static string $name = 'nanda' . PHP_EOL;

   static public function sum(...$numbers)
   {
      $total = 0;
      foreach ($numbers as $number) {
         $total += $number;
      }
      return $total;
   }
}
echo StaticKey::sum(1, 2, 34, 2);
