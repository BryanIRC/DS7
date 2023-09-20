<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>laboratorio 2.10</title>
</head>

<body>
    <?php
    $persona = array(
        array("nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
        array("nombre" => "Ignacio", "estatura" => 175, "sexo" => "M"),
        array("nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
        array("nombre" => "Ruben", "estatura" => 182, "sexo" => "M")
    );
    echo "<b>DATOS SOBRE EL PERSONAL</b><br><hr>";
    $numpersonas = count($persona);
    for ($i = 0; $i < $numpersonas; $i++) {
        echo "Nomnre: <b>", $persona[$i]['nombre'], "</b><br>";
        echo "Estatura: <b>", $persona[$i]['estatura'], " cm</b><br>";
        echo "Sexo: <b>", $persona[$i]['sexo'], "</b><br><hr>";
    }
    ?>
</body>

</html>