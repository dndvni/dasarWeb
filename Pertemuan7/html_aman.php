<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "Nama: " . $input ."<br>";
}

// soal no 4.2 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</br>";
    } else {
        echo "Email tidak valid. <br>";
    }
}

?>