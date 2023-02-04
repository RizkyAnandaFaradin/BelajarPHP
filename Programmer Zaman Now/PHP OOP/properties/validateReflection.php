<?php

class ValidateUtill
{
   function validateLoginRequest(LoginRequest $loginRequest)
   {
      if (!isset($loginRequest->username)) {
         throw new ValidtationException("Username is null");
      } else if (!isset($loginRequest->password)) {
         throw new ValidtationException("password is null");
      } else if ($loginRequest->username == "") {
         throw new Exception("Username is blank");
      } else if ($loginRequest->password == "") {
         throw new Exception("Password is blank");
      }
   }


   //INI MENGGUNAKAN REFLECTION
   static function validateReflection($request)
   {
      $reflection = new ReflectionClass($request);
      $properties = $reflection->getProperties((ReflectionProperty::IS_PUBLIC));
      foreach ($properties as $property) {
         if (!$property->isInitialized(($request))) {
            throw new ValidtationException("$property->name is not set");
         } else if (is_null($property->getValue($request))) {
            throw new ValidtationException("$property->name is not set");
         }
      }
   }
}
