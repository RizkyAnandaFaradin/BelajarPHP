<?php
trait IndonesiaGender
{
   function indonesiaGender()
   {
      return match ($this) {
         Gender::Male => "Tuan",
         Gender::Female => "Nyonya",
      };
   }
}
interface SayHello
{
   function sayHello(): string;
}
enum Gender: string implements SayHello
{
   use IndonesiaGender;
   const UNKNOWN = "UNKNOWN";
   case Male = " Mr";
   case Female = " Mrs";
   function sayHello(): string
   {
      return "Hello" . $this->value;
   }
}

var_dump(Gender::UNKNOWN);
