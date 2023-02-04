<?php
require('../properties/Exception.php');
require('../properties/LoginRequest.php');
require('../properties/validateReflection.php');

$request = new LoginRequest();
$request->password = "nanda";
$request->username = "nanda";


ValidateUtill::validateReflection($request);
