<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah = $hasil." . "<br>";
$benar = true;
$salah = false;
echo "Varianel benar: $benar, Variabel salah: $salah" . "<br>";

//Mendefinisikan konstanta untuk nilai tetap 
define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>