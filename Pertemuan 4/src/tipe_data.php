<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);
echo "<br>";

echo "<br>";
//langkah 5
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: ($nilaiMatematika) <br>";
echo "Matematika: ($nilaiIPA) <br>";
echo "Matematika: ($nilaiBahasaIndonesia) <br>";
echo "Matematika: ($rataRata) <br>";

var_dump($rataRata);
echo "<br>";

echo "<br>";
//langkah 8
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<br>";
//langkah 11
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . " " . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo'Nama Belakang: ' . $namaBelakang . '<br>';

echo "<br>";
//langkah 14
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>