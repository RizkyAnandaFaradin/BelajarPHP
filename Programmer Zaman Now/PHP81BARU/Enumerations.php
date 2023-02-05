<?php
enum Gender: string
{
   case Male = " Mr";
   case Female = " Mrs";

   static function fromIndonesia(string $value): Gender
   {
      return match ($value) {
         "Tuan" => Gender::Male,
         "Nyonya" => Gender::Female,
         default => throw new Exception("Bukan Bahasa Indonesia"),
      };
   }

   function sayHello(): string
   {
      return "Halo" . $this->value;
   }

   function inIndonesia(): string
   {
      return match ($this) {
         Gender::Male => "Tuan",
         Gender::Female => "Nyonya"
      };
   }
}

class Customer
{
   //KETIKA KITA MEMASUKKAN ARGUMENT KE PARAMETER YANG KE3, HANYA BISA DUA YAITU MALE ATAU FEMALE
   public function __construct(public string $id, public string $name, public ?Gender $gender)
   {
   }
}

function sayHello(Customer $customer): string
{
   if ($customer->gender == Gender::Male) {
      return "Haloo Pak " . $customer->name . PHP_EOL;
   } else if ($customer->gender == Gender::Female) {
      return "Halo bu " . $customer->name . PHP_EOL;
   } else {
      return "Hello " . $customer->name;
   }
}


var_dump(Gender::Male->sayHello());
var_dump(Gender::Male->inIndonesia());
var_dump(Gender::fromIndonesia("Tuan"));
