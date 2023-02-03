<?php
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
