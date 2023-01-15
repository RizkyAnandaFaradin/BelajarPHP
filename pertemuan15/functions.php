<?php 
//mengkoneksikan database
$conn = mysqli_connect("localhost", "root", "", "phpsepatu"); 

function query($query){
   //untuk mengacu pada $conn yang ada di atas
   global $conn;
   //$result akan mengambil data dari koneksi database ($connn), dan isi dari database tersebut ($query)
   $result = mysqli_query($conn, $query);   
   //$rows akan menampung nilai dari $result
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}



function tambah($data)
{
global $conn;
//htmlspecialchars untuk menghalangi input yang tidak sesuai atau memasukkan char yang aneh
$merek = htmlspecialchars($data['merek']);
$warna = htmlspecialchars($data['warna']); 
$ukuran = htmlspecialchars($data['ukuran']); 

$gambar = upload();
if (!$gambar) {
   return false;
}

$query = "INSERT INTO sepatu 
            VALUES
            ('', '$merek', '$warna', '$ukuran', '$gambar')

               ";
            mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function upload()
{
   //mengambil nilai di $_files di array gambar yang didalamnya ada name, dan disimpan ke var namafile
 $namaFile = $_FILES['gambar']['name'];
 $ukuranFile = $_FILES['gambar']['size'];   
 $error = $_FILES['gambar']['error'];   
 $tmpName = $_FILES['gambar']['tmp_name'];   

 //mengecek, jika gambar tidak ada yang diupload
 if ($error===4) {

   //ketika tidak ada, maka jalankan script alert
   echo "<script> 
   alert('Upload gambar terlebih dahulu!');
   </script>";
   //lalu berhentikan semua fungsi
   return false;
 }

 //membuat array extension gambar
 $validExtension = ['jpg', 'jpeg', 'png'];

 //ini akan memecah nama dari $namafile dan akan disimpan menjjadi array
 //untuk kasus ini, akan dipecah menjadi $extension = ['namafilenya' , 'extensinya apa']
 $extension = explode('.', $namaFile);

 //end ini akan mengambil nilai array yang terakhir dari $extension, dan disimpan kembali ke $extension
 //strtolower, ini akan memaksa semua nama dari validextension akan menjadi huruf kecil
 $extension = strtolower(end($extension));

 //mengecek extension, dimana apakah adah string yang nilainya sama seperti di validExtension, in_array menghasilkan nilai true dan false
 //tanda ! di artinya sama dengan if(in_array == false)
 //jadi, jika tida ada extensi file yang sama, maka 
 if (!in_array($extension, $validExtension)) {
      //ketika tidak ada, maka jalankan script alert
   echo "<script> 
   alert('Yang anda upload bukanlah gambar!!');
   </script>";
   //lalu berhentikan semua fungsi
   return false;
 }

//mengecek file gambar terlalu besar 
//jika $ukuran file lebih dari 1mb, maka
if ($ukuranFile > 1000000) {
   echo "<script> 
   alert('Ukuran gambar terlalu besar!!');
   </script>";
   //lalu berhentikan semua fungsi
   return false;
}


//lolos pengecekan file, gambar siap diupload

//generate nama gambar baru, uniqid akan mengenerate string baru random
 $namaFile = uniqid();

//  menambahkan . pada $namaFile
 $namaFile .= ".";

//  menambahkan extension pada $namaFile
 $namaFile .= $extension;

 //sehingga nama file menjadi randomstring."extension"

//INI UNTUK MEMINDAHKAN FILENYA
move_uploaded_file($tmpName, 'gambar/' . $namaFile);

//mengembalikan $namafile 
return $namaFile;



}



function hapus($id){
   global $conn;
   //untuk menghapus rows, dimana mengacu pada idnya
   
	mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");


}

function ubah($data)
{
global $conn;
//htmlspecialchars untuk menghalangi input yang tidak sesuai atau memasukkan char yang aneh
$id = $data['id'];
$merek = htmlspecialchars($data['merek']);
$warna = htmlspecialchars($data['warna']); 
$ukuran = htmlspecialchars($data['ukuran']);
$gambarLama = $data['gambarlama'];


//jika $_FILES['gambar']['error']===4 pada halaman ubah tidak upload, maka gunakan $gambar = gambarLama
if ($_FILES['gambar']['error']===4) {
   $gambar = $gambarLama;
} else {

   //ketika selain itu, maka gunakan gambar yang diupload
   $gambar = upload();
}


$query = "UPDATE sepatu SET 
             id='$id',
            merek='$merek',
            warna='$warna',
            ukuran='$ukuran',
            gambar='$gambar' WHERE id = $id";

            mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}



function cari($keyword)
{ 
   // nilai $keyword yang diambil dari cari($_POST["keyword"]) dimasukkan ke nama
   // lalu nilai tersebut dimasukkan ke $query
   //LIKE digunakan untuk pencariannya tidak terlalu spesifik, dimana %menenjukkan huruf depan, dan kalo %belakang mencari huruf belakang
$query = "SELECT * FROM sepatu WHERE 
merek LIKE '%$keyword%' OR
warna LIKE '%$keyword%' OR
ukuran LIKE '%$keyword%'
";

   // function query akan menampung nilai dari $query, yang akan dikembalikan 
return query($query);

}


function registrasi($data)
{
   global $conn;
   

   //strtolower untuk paksakan menjadi huruf kecil
   //stripslashes untuk membersihkan karakter tertentu contoh /
   $username = strtolower(stripslashes($data['username']));

   //mysqli_real_escape_string untuk menambahkan tanda kutip dan di masukkan ke database
   $password = mysqli_real_escape_string($conn,$data['password']);
   $password2 = mysqli_real_escape_string($conn,$data['password2']);


   //cek username udah ada apa belum
   $cariuser = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
   $cariuser2 = mysqli_fetch_assoc($cariuser);
   

   if ($cariuser2) {
   echo "<script>
         alert('Username sudah ada');
      </script>";

      //untuk memberhentikan proses yang ada dibawahnya
      return false;
   }

   //mengecek password
   //jika $password tidak sama dengan $password2, maka
   if ($password !== $password2) {
      echo "<script>
         alert('password tidak sesuai atau tidak sama');
      </script>";
      return false;
   } else {
      
      //enkripsi password\
      //PASSWORD_DEFAULT akan enkripsi menggunakna protokol saat ini
      $password = password_hash($password, PASSWORD_DEFAULT);
      
      //memasukkan data username dan password ke dalam tabel users
      mysqli_query($conn, "INSERT INTO
                                 users VALUES(
                                    '',
                                    '$username',
                                    '$password'
                                    )
      ");

      //mengembalikkan jumlah baris yang terpengaruh di queri sebelumnya, dengan nilai 1 atau 0
      return mysqli_affected_rows($conn);
   }


}




?>