<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.3</title>
</head>

<body>
    <?php
    $arreglo = array();
    $mayor = 0;
    for ($i = 0; $i < 20; $i++) {
        $num = rand(0, 99);
        array_push($arreglo, $num);
        $j = 0;
        while ($j < $i) {
            if ($arreglo[$i] == $arreglo[$j]) {
                $num = rand(0, 99);
                $arreglo[$i] = $num;
                $j = 0;
            } else $j++;
        }
        if ($arreglo[$i] > $mayor)
            $mayor = $arreglo[$i];
        echo "Posicion: " . $i . "  Valor: " . $arreglo[$i] . "<br>";
    }
    echo "<p>El mayo valor almacenado es: " . $mayor . "</p>";
    ?>
</body>

</html>