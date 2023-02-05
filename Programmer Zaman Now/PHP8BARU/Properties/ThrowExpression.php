<?php

//SEBELUM ADA THROW EXPRESSION
function sayHello(?string $name)
{
   if ($name == null) {
      throw new Exception("Tidak boleh null");
   }
   echo "Heloo $name" . PHP_EOL;
}

//SESUDAH ADA THROW EXPRESSION
function sayHelloExpression(?string $name)
{
   $result = $name != null ? "Heloo $name" : throw new Exception("tidak boleh null");
   echo $result;
}
sayHelloExpression("nanda");
