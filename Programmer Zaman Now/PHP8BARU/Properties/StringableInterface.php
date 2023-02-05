<?php
function sayHello(Stringable $stringable): void
{
   echo "Hello {$stringable->__toString()}";
}

class Person
{
   public function __toString(): string
   {
      return "Person";
   }
}
sayHello(new Person());
