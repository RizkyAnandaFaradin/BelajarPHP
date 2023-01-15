 <?php 
require 'functions.php';
//AMBIL DATA DI URL
$id = $_GET["id"];

$conn = mysqli_connect("localhost", "root", "", "phpsepatu"); 
$sepatu = query("SELECT * FROM sepatu WHERE id = $id");



if (isset($_POST['submit'])) {
   if (ubah($_POST)>0) {
      echo "
      <script>
      alert('data berhasil diubah');
      document.location.href = 'index.php';
      </script> " ;
   } else {
      echo "
      <script> 
      alert('data gagal diubah');
      document.location.href = 'tambah.php';
      </script>
      ";
     }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ubah Data Sepatu</title>
</head>
<body>
   <h1>Ubah Data Sepatu</h1>
   <form action=""  method='POST' >
    
         
   <ul>  
      <?php 
      foreach ($sepatu as $sep) { ?>
      <li hidden="hidden">
         <!-- require untuk mengindikasikan bahwa kolom tersebut harus diiisi -->
         <input type="text" name="id"  required value="<?=($sep["id"]) ?> ">
      </li>
 
 
      <li >
         <label for="merek">Merek : </label>
         <br>
         <!-- require untuk mengindikasikan bahwa kolom tersebut harus diiisi -->
         <input type="text" name="merek" id="merek" required value="<?=($sep["merek"]) ?> ">
      </li>
      
      <li>
         <label for="warna">Warna : </label>
         <br>
         <input type="text" name="warna" id="warna" value="<?=($sep["warna"]) ?> ">
      </li>
      
      <li>
         <label for="ukuran">Ukuran : </label>
         <br>
         <input type="text" name="ukuran" id="ukuran" value="<?=($sep["ukuran"]) ?>">
      </li>

      
      <li>
         <label for="gambar">Gambar : </label>
         <br>
         <input type="file" name="gambar" id="gambar"  ?>" >
      </li>
      
      <li>
         <button type="submit" name="submit" >Ubah Data</button>
      </li>
       <?php }
      ?>
   </ul>
   
    
   </form>
   
</body>
</html>
</body>
</html>