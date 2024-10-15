<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = isset($_POST['buah']);

    if (isset($_POST['warna'])) {
        $selectedwarna = $_POST['warna'];
    } else {
        $selectedwarna = [];
    }


    $selectedJenisKelamin = isset($_POST['jenis_kelamin']) ;

    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    if (!empty($selectedwarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedwarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}