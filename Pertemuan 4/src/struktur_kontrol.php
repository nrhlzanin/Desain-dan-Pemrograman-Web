<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf D";
}

echo "<br><br>";
//soal 4.2
$jarakSaatini = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatini < $jarakTarget ) {
    $jarakSaatini += $peningkatanHarian;
    $hari++;    
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";
//soal 4.3
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";
//soal 4.4
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";
//soal 4.5
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";
//soal 4.6
$nilaiSiswaa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswaa);
$jumlahSiswa = count($nilaiSiswaa);
$totalNilai = 0;

for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
    $totalNilai += $nilaiSiswaa[$i];
}

$rataRata = $totalNilai / ($jumlahSiswa - 4);

echo "Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Nilai rata-rata siswa: $rataRata";

echo "<br><br>";
//soal 4.7
$hargaProduk = 120000;
$diskonPersen = 20;

if ($hargaProduk > 100000) {
    $diskon = ($diskonPersen / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $diskon;
} else {
    $hargaSetelahDiskon = $hargaProduk;
}

echo "Harga produk sebelum diskon: Rp $hargaProduk <br>";
echo "Diskon sebesar $diskonPersen% diberikan <br>";
echo "Harga produk setelah diskon: Rp $hargaSetelahDiskon";

echo "<br><br>";
//soal 4.8
$poin = 600;
$totalSkor = $poin;
$hadiahTambahan = $poin > 500 ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ($hadiahTambahan)";
?>