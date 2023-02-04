<?php

//MEMOTONG TESK DENGAN SPASI, KOMA, DAN -
$result = preg_split("/[\s,-]/", "Rizky Ananda-F,4");
var_dump($result);
