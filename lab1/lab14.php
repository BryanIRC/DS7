<html>

<head>
    <title>laboratorio 1.4</title>
</head>

<body>
    <?php
    echo "<table border=1>";
    $n = 1;
    for ($n1 = 1; $n1 <= 10; $n1++) {
        echo "<tr>";
        for ($n2 = 1; $n2 <= 10; $n2++) {
            echo "<td><center>", $n, "</center></td>";
            $n++;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>