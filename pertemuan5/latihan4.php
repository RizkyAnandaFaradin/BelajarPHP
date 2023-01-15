<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>POST</title>
</head>
<body>
<?php 

//Ketika tombol sumbit blm pernah ditekan, maka jangan munculkan h1, dan sebaliknya, ketika sudah  ditekan munculkan nama dari input
if (isset($_POST['submit'])) : ?> 
   <h1>Selamat Datang, <?= $_POST['nama'] ?></h1>

<?php endif;  ?>
   <!-- pada form, harus terdapat atribut action (dimasukkan mana data tersebut )dan method -->
<form  method='post'>
   Masukkan Nama:
   <input type="text" name='nama'>
   <button type='submit' name='submit'>Kirim!</button>

</form>

   
</body>
</html>