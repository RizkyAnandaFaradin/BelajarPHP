<?php

class Manager
{
   var $nama;
   var $tittle;
   function __construct($nama = "", $tittle = "")
   {
      $this->$nama = $nama;
      $this->$tittle = $tittle;
   }
}

class VicePresident extends Manager
{
   function __construct($name)
   {
   }
}
