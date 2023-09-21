<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 6.3</title>
</head>

<body>
    <?php
    include("class_lib.php");
    $soporte1 = new soporte("The Soccer Game", 22, 3);
    echo "<b>" . $soporte1->titulo . "</b>";
    echo "<br>Precio: " . $soporte1->dame_precio_sin_itbm() . " dolares";
    echo "<br>ITBMS: " . $soporte1->itbm() . " dolares";
    echo "<br>Precio ITBMS incluido: " . $soporte1->dame_precio_con_itbm() . " dolares";

    $mivideo = new video("Los Otros", 22, 4.5, "115 minutos");
    echo "<br><br>";
    echo "<b>" . $mivideo->titulo . "</b>";
    echo "<br>Precio: " . $mivideo->dame_precio_sin_itbm() . " dolares";
    echo "<br>ITBMS: " . $mivideo->itbm() . " dolares";
    echo "<br>Precio ITBMS incluido: " . $mivideo->dame_precio_con_itbm() . " dolares ";
    echo "<br>" . $mivideo->imprime_caracteristicas();

    $mijuego = new juego("Pes 18", 21, 2.5, "Xbox 360", 1, 2);
    $mijuego->imprime_caracteristicas();
    $mijuego->imprime_jugadores_posibles();
    echo "<p>";
    $mijuego2 = new juego("Fifa 18", 27, 3, "PS 4", 1, 2);
    echo "<b>" . $mijuego2->titulo . "</b>";
    $mijuego2->imprime_jugadores_posibles();
    ?>
</body>

</html>