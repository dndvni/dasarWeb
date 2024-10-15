<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Regex Document</title>
    </head>
    <body>
        <?php
        // Soal No 5.1
        $pattern = '/[a-z]/'; // cocokan huruf kecil.
        $text = 'This is a Sample Text.';
        if (preg_match($pattern, $text)) {
            echo "Huruf kecil ditemukan!";
        } else {
            echo "Tidak ada huruf kecil!";
        }

        // Soal No 5.2
        $pattern = '/[0-9]+/';
        $text = 'There are 123 apples.';
        if (preg_match($pattern, $text, $matchess)) {
            echo "Cocokan: " . $matchess[0];
        } else {
            echo "Tidak ada yang cocok! <br>";
        }
        ?>
    </body>
</html>