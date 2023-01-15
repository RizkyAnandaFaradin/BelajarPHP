<?php 

	// echo date("l,d-M-Y")//untuk menampilkan tanggal, dengan format tertentu

	//time
	//unix timestamp / epoch time
	//detik yang sudah berllau sejak 1 januari 1970
	//echo time();

	//echo date("d M Y", time()-60*60*24*7495);

	//mktime
	//membuat detik sendiri
	//mktime(0,0,0,0,0,0)
	//jam, menit, deti, bulan, tanggal, tahun
	//echo ("l", mktime(0,0,0,3,20,2001));

	
	//strotime
	echo date("l", strtotime("20 may 2001"));


 ?>