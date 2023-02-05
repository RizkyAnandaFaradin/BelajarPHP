<?php
class Address
{
   public ?string $country;
}
class User
{
   public ?Address $address;
}
function getCountry(?User $user): ?string
{
   if ($user != null) {
      if ($user->address != null) {
         return $user->address->country;
      }
   }
   return null;
}

//MENGGUNAKAN NULLSAFEOPEARTOR, SEHINGGA TIDAK PERLU MELAKUKAN PENGECEKAN NULL LAGI
function getCountery1(?User $user): ?string
{
   //artinya, kalo user bisa null maka ?, kalo address bisa null maka tanda tanya
   return $user?->address?->country;
}
