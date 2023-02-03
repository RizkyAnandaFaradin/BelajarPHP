<?php
//Defaultnya waktu saat ini
$date = new DateTime();
//Mengatur tanggalnya
$date->setDate(2023, 01, 01);
//Mengatur jamnya
$date->setTime(12, 12, 12);

//menambahkan 1 tahun
$date->add(new DateInterval("P1Y"));

// Start untuk mengurangi 1 bulan
$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1;
$date->add($dateInterval);
//End


$data = new DateTime();
$data->setTimeZone(new DateTimeZone("Europe/Berlin"));
$string = $date->format("Y-m-d H:i:s");
echo "Waktu Saat ini : " . $string;

$data = DateTime::createFromFormat("Y-m-d H:i:s", "ini input dari user, yaitu bisa 'ini input dari user, yaitu '2020-10-10 10-10-10", new DateTimeZone("Asia/Jakarta"));
