<?php 
require 'hal2.php';
if (isset($_POST["submit"])) {
   coba($_POST["input"]);
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
<form action="" method="POST">
   <ul>
      <li>
         <input type="text" name="input">
      </li>
      <li>
         <button type="submit" name="submit">Submit!</button>
      </li>
   </ul>
</form>
</body>
</html>