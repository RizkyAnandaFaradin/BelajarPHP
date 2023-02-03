<?php
require('../properties/Exception.php');
require('../properties/LoginRequest.php');
require('../properties/validateLoginRequest.php');



$loginRequest = new LoginRequest();
$loginRequest->username = "nanda";
$loginRequest->password = "nanda";
try {
   validateLoginRequest($loginRequest);
} catch (ValidtationException | Exception $exception) {
   echo "Error : {$exception->getMessage()}";
}
