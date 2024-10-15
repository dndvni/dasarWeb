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
            echo "Huruf kecil ditemukan! <br>";
        } else {
            echo "Tidak ada huruf kecil! <br>";
        }

        // Soal No 5.2
        $pattern = '/[0-9]+/';
        $text = 'There are 123 apples.';
        if (preg_match($pattern, $text, $matchess)) {
            echo "Cocokan: <br>" . $matchess[0];
        } else {
            echo "Tidak ada yang cocok! <br>";
        }
        echo "<br><br>";

        // Soal No 5.3
        $pattern = '/apple/';
        $replacement = 'banana';
        $text = 'I like apple pie.';
        $new_text = preg_replace($pattern, $replacement, $text);
        echo $new_text; // Output: "I like banana pie"
        echo "<br><br>";

        // Soal No 5.4
        $pattern = '/go*d/'; // Cocokan "god", "good", "gooood", dll.
        $text = 'god is good.';
        if (preg_match($pattern, $text, $matchess)) {
            echo "Cocokan: " . $matchess[0];
        } else {
            echo "Tidak ada yang cocok! <br>";
        }
        echo "<br><br>";

        // Soal No 5.5
        $pattern = '/go?d/'; // Cocokan "god", "good", "gooood", dll.
        $text = 'god is good.';
        if (preg_match($pattern, $text, $matchess)) {
            echo "Cocokan: " . $matchess[0];
        } else {
            echo "Tidak ada yang cocok! <br>";
        }
        echo "<br><br>";

        // Soal No 5.6
        $pattern = '/go{n,m}d/'; 
        $text = 'god is good.';
        if (preg_match($pattern, $text, $matchess)) {
            echo "Cocokan: " . $matchess[0];
        } else {
            echo "Tidak ada yang cocok! <br>";
        }
        echo "<br><br>";
        ?>
    </body>
</html>