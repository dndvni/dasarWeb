<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <form method="post" action="proses_form.php">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>

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
    </body>
</html>
