<html>

<head>
    <meta charset="UTF-8">
    <title>laboratorio 2.5</title>
</head>

<body>
    <?php
    $figuras = array('cuadrado', 'triangulo', 'circulo');
    $figuras[1] = 'rectangulo';
    Mostrar_figuras($figuras, "Asignacion de rectangulo");
    array_push($figuras, 'pentagono');
    Mostrar_figuras($figuras, "Adicion de pentagono al final");
    array_unshift($figuras, 'hexagono');
    Mostrar_figuras($figuras, "Adicion de hexagono al inicio");
    array_pop($figuras);
    Mostrar_figuras($figuras, "Eliminacion del primero");
    array_shift($figuras);
    Mostrar_figuras($figuras, "Eliminacion del ultimo");
    function Mostrar_figuras($figuras, $mensaje)
    {
        echo "<br>Arreglo despues de $mensaje <br>";
        foreach ($figuras as $figura) {
            echo "$figura <br>";
        }
    }
    ?>
</body>

</html>