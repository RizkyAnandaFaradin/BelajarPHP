 <?php 


//pengulangan
//for
//while
// do.. while
// foreach : pengulangan khusus array


// for ($i=0; $i < 5 ; $i++) {
//  echo "Hello Tasya <br>";
// }


// $i = 0;
// while ($i<5) {
//  echo "Halo Tasya kuuu <br>";
//  $i++;
// }


// $i= 0;
// do {

//  echo "Halo caa, apa kabar? <br>";
//  $i++;

//  } while ($i<5)
//      // code...
//      //jalankan dulu, lalu cek kondisinya



 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
 </head>
 <body>

<!--    <table border="1" cellpadding="10" cellspacing="0">         <?php 

            // for ($i=1; $i<=3 ; $i++) { 
            //  echo "<tr>";

            //  for ($j=1; $j <=5 ; $j++) {
            //  echo "<td>$i,$j</td>"; 
            //      // code...
            //  }

            //  echo "</tr>";
            // }



         ?> --> 


    <table border="1" cellpadding="10" cellspacing="0">
         <?php for ($i=1; $i<=5 ; $i++) : ?>

            <?php if ($i % 2 == 1) :?>
                <tr class="warna-baris">
            <?php else:?>
                    <tr>
            <?php endif; ?>



                <?php for ($j=1; $j<=5 ; $j++): ?>
                    <td><?php echo "$i,$j"; ?></td>
                <?php endfor; ?>    


            </tr>

         <?php endfor; ?>

    </table>






    </table>
 
 </body>
 </html>