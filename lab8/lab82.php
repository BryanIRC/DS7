<!DOCTYPE html>
<html>

<head>
    <title>Laboratorio 8.2</title>
    <meta charset="utf-8">
</head>

</html>
<?php
include('milib.php');
$obj_milib = new Milib();
$arreglo = array();
$mayor = 0;
for ($i = 0; $i < 20; $i++) {
    $num = $obj_milib->Generar_numero();
    array_push($arreglo, $num);
    $arreglo[$i] = $obj_milib->Validar_unico($arreglo, $i);
    $mayor = $obj_milib->Validar_mayor($arreglo[$i], $mayor);
    echo "Posicion: " . $i . "  Valor: " . $arreglo[$i] . "<br>";
}
echo "<p>El mayor valor almacenado es: " . $mayor . "</p>";
?>