<?php

// Pembuatan array di PHP ada 2 :
//1. menggunakan method array()
//2. menggunakan kurung siku []
//~~~~~~~Bisaji digabung keduanya-------------

$datas = array(
  "buah" => [
    1 => "mangga",
    2 => "pepaya",
    3 => "jambu air"
  ]);
  $datasatu = array ("warna" => [
    1 => "merah",
    2 => "hitam",
    3 => "ungu"
  ]);
  $datadua = array ("kota" => [
    1 => "bulukumba",
    2 => "makassar",
    3 => "pangkep"
  ]);
// Bisa juga seperti ini
$bio = [
  ['nama' => 'Evi Sasriani Marsun', 'kelas' => 'A', 'hobby' => 'bulutangkis'],
  ['nama' => 'Reskhy Haura Nashifa Marsun', 'kelas' => 'A', 'hobby' => 'ngoding']
];



// Mencetak ke layar

 echo json_encode($datas);
 echo "<br>";
 echo json_encode($datasatu);
 echo "<br>";
 echo json_encode($datadua);
 echo "<br>";
 echo json_encode($bio);
 echo "<br>";

