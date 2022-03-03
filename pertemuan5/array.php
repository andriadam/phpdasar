<?php
// array variabel yang dapat memiliki banyak nilai
// bisa menyimpan tipde data yang berbeda [php]



$hari = ["senin", "selasa", "rabu"];
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "oke", true];


// var_dump($hari);
// echo "<br>";
// print_r($bulan);

echo "<br>";
echo $arr1[2];

var_dump($hari);
echo "<br>";
$hari[] = "kamis";
var_dump($hari);
