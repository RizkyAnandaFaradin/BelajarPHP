<?php

$gender = 'WANITA';
$hai = null;
if ($gender == 'PRIA') {
   $hai = 'Hai Bro!';
   echo $hai;
} else {
   $hai = 'Hai Nona!';
   echo $hai;
}

//bisa disingkat menjadi
$hai = $gender == 'PRIA' ? 'Hai Bro!' : 'Hai Nona!';
echo $hai;
