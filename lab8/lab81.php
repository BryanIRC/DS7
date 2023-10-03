<!DOCTYPE html>
<html>

<head>
    <title>Laboratorio 8.1</title>
    <meta charset="utf-8">
</head>
<?php
include('milib.php');
if (array_key_exists('calcular', $_POST)) {
    $obj_milib = new Milib();
    $obj_milib->Generar_factorial($_POST['numero']);
} else {
?>

    <body>
        <form action="" method="post" name="factorial">
            <p>Ingrese un numero para calcular su factorial : </p>
            <input type="number" min="1" name="numero" required step="1">
            <p><input type="submit" value="calcular" name="calcular"></p>
        </form>
    </body>

</html>
<?php
}
?>