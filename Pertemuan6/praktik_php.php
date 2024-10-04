<?php

// function perkenalan() {
    // echo "Assalamualaikum, ";
    // echo "Perkenalan , nama saya Devani</br>";
    // echo "Senang berkenalan dengan Anda</br>";
// }

// memanggil fungsi yang sudah dibuat
// perkenalan();

// membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Devani";
$ucapanSalam = "Selamat pagi";

// memanggil lagi
perkenalan($saya);
?>