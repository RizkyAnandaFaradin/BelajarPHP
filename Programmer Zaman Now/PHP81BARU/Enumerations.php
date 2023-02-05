<?php
enum Gender
{
   case Male;
   case Female;
}

class Customer
{
   public string $id;
   public string $name;
   public Gender $gender;

   //KETIKA KITA MEMASUKKAN ARGUMENT KE PARAMETER YANG KE3, HANYA BISA DUA YAITU MALE ATAU FEMALE
   public function __construct(public string $id, public string $name, public Gender $gender)
   {
   }
}
