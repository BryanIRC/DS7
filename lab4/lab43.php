<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.3</title>
</head>

<body>
    <?php
    $arreglo = array();
    for ($i = 0; $i < 20; $i++) {
        $num = rand(0, 19);
        array_push($arreglo, $num);
        $j = 0;
        while ($j < $i) {
            if ($arreglo[$i] == $arreglo[$j]) {
                $num = rand(0, 19);
                $arreglo[$i] = $num;
                $j = 0;
            } else $j++;
        }
        echo "Posicion: " . $i . "  Valor: " . $arreglo[$i] . "<br>";
    }
    ?>
</body>

</html>