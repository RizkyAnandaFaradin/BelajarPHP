<?php 
session_start();

//jika tidak ada  $_SSION["LOGIN] atau artinya jika belum login
if (!isset($_SESSION["login"])) {

   //maka paksa ke halaman login. 
   header("location: login.php");
   exit;
}
require 'functions.php';
//mengambil id dari URL
$id = $_GET["id"];

if (hapus($id)==null) {
         echo "
      <script>
      alert('data berhasil dihapus');
      document.location.href = 'index.php';
      </script> " ;
   } else {
      echo "
      <script> 
      alert('data gagal dihapus');
      document.location.href = 'tambah.php';
      </script>
      ";
  
  }
?>