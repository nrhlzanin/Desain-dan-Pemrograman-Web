<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

//Soal 3.1
echo "Hail penambahan $a dan $b     : ($hasilTambah) <br>";
echo "Hail pengurangan $a dan $b    : ($hasilKurang) <br>";
echo "Hail perkalian $a dan $b      : ($hasilKali) <br>";
echo "Hail pembagian $a dan $b      : ($hasilBagi) <br>";
echo "Sisa bagi $a dan $b           : ($sisaBagi) <br>";
echo "Pangkat $a dan $b             : ($pangkat) <br>";

echo "<br>";
//langkah 5
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama= $a <= $b;
$hasilLebihBesarSama = $a >= $b;

//soal 3.2
echo "Hail sama $a dan $b               : ($hasilSama) <br>";
echo "Hail tidak sama $a dan $b         : ($hasilTidakSama) <br>";
echo "Hail lebih kecil $a dan $b        : ($hasilLebihKecil) <br>";
echo "Hail lebih besar $a dan $b        : ($hasilLebihBesar) <br>";
echo "Hasil lebih kecil sama $a dan $b  : ($hasilLebihKecilSama) <br>";
echo "Hasil lebih besar sama $a dan $b  : ($hasilLebihBesarSama) <br>";

echo "<br>";
//langkah 8
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

//soal 3.3
echo "Hail And $a dan $b   : ($hasilAnd) <br>";
echo "Hail Or $a dan $b    : ($hasilOr) <br>";
echo "Hail Not A $a        : ($hasilNotA) <br>";
echo "Hail Not B $b        : ($hasilNotB) <br>";

echo "<br>";
//langkah 11 dan soal 3.4
$a += $b;
echo "Hasil A setelah operasi penambahan: $a <br>";
$a -= $b;
echo "Hasil A setelah operasi pengurangan: $a <br>";
$a *= $b;
echo "Hasil A setelah operasi pembagian: $a <br>";
$a /= $b;
echo "Sisa hasil A setelah operasi pembagian: $a <br>";
$a %= $b;
echo "Hasil A setelah operasi pemangkatan: $a <br>";

echo "<br>";
//langkah 14
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

//soal 3.5
echo "Hasil identik A dan B ($hasilIdentik) <br>";
echo "Hasil tidak identik A dan B ($hasilTidakIdentik) <br>";

echo "<br>";
//soal 3.6
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$presentasiKursiKosong = ($kursiDitempati / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong: ($kursiKosong) <br>";
echo "Presentasi kursi yang masih kosong: ($presentasiKursiKosong) <br>";
?>