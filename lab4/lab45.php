    <?php
    $n = $_POST['num'];
    if ($n % 2 == 0) {
        echo "Dimension de la mattriz: " . $n;
        echo "<table border=1>";

        for ($x = 0; $x < $n; $x++) {
            echo "<tr>";
            for ($y = 0; $y < $n; $y++) {
                echo "<td><center>";
                if ($x == $y)
                    echo "1";
                else
                    echo "0";
                echo "</td></center>";
            }
            echo "</tr>";
        }
        echo "</table><br>";
    } else {
        echo "<p>La dimension de la matriz debe ser un numero par</p>";
    }
    echo "<p><a href=lab45.html>INICIO</a></p>";
    ?>