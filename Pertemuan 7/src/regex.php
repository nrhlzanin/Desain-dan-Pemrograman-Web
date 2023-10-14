<?php
    echo "SOAL 5.1<br>";
    $pattern = '/[a-z]/'; //cocokkan huruf kecil
    $text = "This is Sample Text.";
    if(preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil ditemukan!";
    }

    echo "<br><br>SOAL 5.2<br>";
    $pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit
    $text = 'There are 123 apples.';
    if(preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><br>SOAL 5.3<br>";
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie';
    $new_text = preg_replace($pattern, $replacement, $text);

    echo $new_text; //output: "I like banana pie"

    echo "<br><br>SOAL 5.4<br>";
    $pattern = '/go*d/'; //cocokkan "god", "good", "gooood", dll
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><br>SOAL 5.5<br>";
    $pattern = '/go?d/'; //cocokkan "god", "good", "gooood", dll
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><br>SOAL 5.6<br>";
    $pattern = '/go{2,4}d/'; //cocokkan "god", "good", "gooood", dll
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
?>