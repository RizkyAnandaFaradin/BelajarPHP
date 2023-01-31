<?php

class Shape
{
   function getCorner()
   {
      return 0;
   }
}

class Rectangle extends Shape
{
   function getCorner()
   {
      return 4;
   }

   function getParentCorner()
   {
      return parent::getCorner();
   }
}
