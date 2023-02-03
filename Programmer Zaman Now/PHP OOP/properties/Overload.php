<?php
class Zero
{
   private array $properties = [];
   public function __get($name)
   {
      return $this->properties[$name];
   }
   public function ___set($name, $value)
   {
      return $this->properties[$name] = $value;
   }
   public function __isset($name)
   {
      return isset($this->properties[$name]);
   }
   public function __unset($name)
   {
      unset($this->properties[$name]);
   }

   public function __call($name, $arguments)
   {
      $join = join(",", $arguments);
      echo "Call function $name with arguments with $join" . PHP_EOL;
   }

   public static function __callStatic($name, $arguments)
   {
      $join = join(",", $arguments);
      echo "Call Static function $name with arguments with $join" . PHP_EOL;
   }
}
$zero = new Zero();
$zero->FirstName = "Rizky";
$zero->MiddleName = "Ananda";
$zero->LastName  = "Faradin";
