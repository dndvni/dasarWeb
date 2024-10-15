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
        ?>
    </body>
</html>