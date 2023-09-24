<?php
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
$media = round(($precio1 + $precio2 + $precio3) / 3, 2);
echo "<br>DATOS RECIBIDOS: <br>";
echo "<br>Precio producto establecimiento 1: " . $precio1 . " dolares";
echo "<br>Precio producto establecimiento 2: " . $precio2 . " dolares";
echo "<br>Precio producto establecimiento 3: " . $precio3 . " dolares";
echo "<br><br>El precio medio del producto es: " . $media . " dolares";
