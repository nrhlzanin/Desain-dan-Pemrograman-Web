<?php
/* Soal no 4
    function perkenalan(){
        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Nindy<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan();
    perkenalan();
*/

/* Soal 5
// membuat fungsi 
    function perkenalan($nama, $salam) {
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    //memanggil fungsi yang sudah dibuat
    perkenalan("Nindy", "Hallo");

    echo"<hr>";

    $saya = "Nindy";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    perkenalan($saya,$ucapanSalam);
*/

/*Soal 6
//membuat fungsi
    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    //memanggil fungsi yang sudah dibuat
    perkenalan("Nindy", "Hallo");
    
    echo"<hr>";

    $saya = "Nindy";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);
*/

/* Soal 7
//membuat fungsi
    function hitungUmur($thn_lahir , $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah ". hitungUmur(2003, 2023). " tahun";
*/
    
/* Soal 8*/
//membuat fungsi
    function hitungUmur($thn_lahir , $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";

        //memanggil fungsi lain
        echo "Saya berusia ". hitungUmur(2003, 2023). " tahun<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    //memanggil dungsi perekenalan
    perkenalan("Nindy");
?>