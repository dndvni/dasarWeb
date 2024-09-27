<?php

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Devani";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);

// fungsi mengembalikan nilai
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2004, 2024) ."tahun<br/>"

 ?> 