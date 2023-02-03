<?php

class Student
{
   public string $id;
   public string $name;
   public int $value;

   public function __toString()
   {
      return "Student id: $this->id, Name: $this->name, Nilai: $this->value";
   }

   public function __clone()
   {
      unset($this->name);
   }

   public function __invoke(...$arguments)
   {
      $join = join(",", $arguments);
      echo "Invoke Student With arguments" . $join . PHP_EOL;
   }


   public function __debugInfo()
   {
      return [
         "id" => $this->id,
         "name" => $this->name,
         "value" => $this->value,
         "author" => "NANDA",

      ];
   }
}
