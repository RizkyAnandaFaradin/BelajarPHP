<?php

class Student
{
   public string $id;
   public string $name;
   public int $value;

   public function __clone()
   {
      unset($this->name);
   }
}
