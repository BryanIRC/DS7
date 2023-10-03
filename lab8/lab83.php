<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 8.3</title>
</head>
<?php
include('milib.php');
$obj_milib = new Milib();
if (array_key_exists('generar', $_POST)) {
    $n = $_POST['num'];
    if ($n % 2 == 0) {
        $obj_milib->Generar_matriz($n);
    } else {
        echo "<p>La dimension de la matriz debe ser un numero par</p>";
        $obj_milib->Mostrar_formulario();
    }
} else
    $obj_milib->Mostrar_formulario();
?>

</html>