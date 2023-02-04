<?php
header('Content-type: text/plain');
require('../properties/Exception.php');
require('../properties/LoginRequest.php');
require('../properties/validateLoginRequest.php');



$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "nanda";
try {
   validateLoginRequest($loginRequest);
} catch (ValidtationException | Exception $exception) {
   echo "Error : {$exception->getMessage()}" . PHP_EOL;

   echo $exception->getTraceAsString() . PHP_EOL;
} finally {
   echo "ERROR ATAU TIDAK AKAN DIEKSEKUSI" . PHP_EOL;
}
