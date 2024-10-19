<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
            echo "Favorite color is " . $_SESSION["favanimal"] . "<br>";
        ?>
    </body>
</html>