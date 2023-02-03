<?php
abstract class Animal
{
   public string $name;
   abstract public function run(): void;
}

class Cat extends Animal
{
   public function run(): void
   {
      echo "Cat $this->$name is running" . PHP_EOL;
   }
}

class Dog extends Animal
{
   public function run(): void
   {
      echo "Dog $this-<$name is running" . PHP_EOL;
   }
}

interface AnimalShelter
{
   public function adopt(string $name): Animal;
}

class DogShelter implements AnimalShelter
{
   function adopt(string $name): Dog
   {
      $dog = new Dog();
      $dog->name = $name;
      return $dog;
   }
}


class CatShelter implements AnimalShelter
{
   function adopt(string $name): Cat
   {
      $cat = new Cat();
      $cat->name = $name;
      return $cat;
   }
}

$dog = new DogShelter();
$dog->adopt('Nanda');
$cat = new CatShelter();
$cat->adopt('Rizky');
