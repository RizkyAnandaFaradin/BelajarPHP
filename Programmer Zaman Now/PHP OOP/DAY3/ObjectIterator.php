<?php

class Data implements IteratorAggregate
{
   var string $first = "first";
   public string $second = "second";
   private string $third = "third";
   protected string $forth = "forth";

   public function getIterator()
   {
      $array = [
         "First" => $this->first,
         "second" => $this->second,

         "third" => $this->third,

         "forth" => $this->forth,
      ];

      $iterator = new ArrayIterator($array);
      return $iterator;
   }
}

$data = new Data();

foreach ($variable as $key => $value) {
   # code...
}
