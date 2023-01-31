<?php
class Programmer
{
   public string $name;

   public function __construct(string $name)
   {

      $this->name = $name;
   }
}
class BackendProgrammer extends Programmer
{
}
class FrontendProgrammer extends Programmer
{
}
class Company
{
   public Programmer $programmer;
}
function sayHelloProgrammer(Programmer $programmer)
{
   if ($programmer instanceof BackendProgrammer) {
      echo "Heloo BackendProgrammer $programmer->name" . PHP_EOL;
   } else if ($programmer instanceof FrontendProgrammer) {
      echo "Heloo FrontendProgrammer $programmer->name" . PHP_EOL;
   } else if ($programmer instanceof $programmer) {
      echo "Heloo Programmer $programmer->name" . PHP_EOL;
   }
}
sayHelloProgrammer(new BackendProgrammer("Eko"));
sayHelloProgrammer(new FrontendProgrammer("Eko"));
