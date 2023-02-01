<?php
trait A
{
   function doA(): void
   {
      echo "A" . PHP_EOL;
   }
   function doB(): void
   {
      echo "B" . PHP_EOL;
   }
}
trait B
{
   function doA(): void
   {
      echo "a" . PHP_EOL;
   }
   function doB(): void
   {
      echo "b" . PHP_EOL;
   }
}
class Sample
{
   use A, B {
      //ini memproritaskan A dari pada B dengan function doA
      A::doA insteadof B;
      B::doB insteadof A;
   }
}
$sample = new Sample();
$sample->doA();
$sample->doB();
