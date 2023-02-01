<?php

namespace properties\traitt;

trait sayGoodBye
{
   function goodBye(?string $name): void
   {
      if (is_null($name)) {
         echo "Good Bye" . PHP_EOL;
      } else {
         echo "Good Bye " . $name . PHP_EOL;
      }
   }
}
trait sayHello
{
   function Hello(?string $name): void
   {
      if (is_null($name)) {
         echo "Hello" . PHP_EOL;
      } else {
         echo "Hello " . $name . PHP_EOL;
      }
   }

   public function Namaa()
   {
      echo "sayHello" . PHP_EOL;
   }
}

trait hasName
{
   public string $name;
}

trait canRun
{
   public abstract function run(): void;
}

class ParentClass
{
   public function Namaa()
   {
      echo "Parent Class" . PHP_EOL;
   }
}


class Person extends ParentClass
{
   use sayGoodBye, hasName, sayHello, canRun {
      Hello as private;
   }

   public function run(): void
   {
      echo "Person {$this->name} is running" . PHP_EOL;
   }

   public function Namaa()
   {



      echo "Person Class" . PHP_EOL;
   }
}
