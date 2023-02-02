<?php
interface helloWorld
{
   function sayHello(): void;
}

$helloWorld = new class("EKO") implements helloWorld
{
   public string $name;

   public function __construct(string $name)
   {
      $this->name = $name;
   }
   public function sayHello(): void
   {
      echo "Hello World" . PHP_EOL;
   }
};

$helloWorld->sayHello();
