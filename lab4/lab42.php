<?php
$num = $_POST['numero'];
$fact = 1;
for ($i = 2; $i <= $num; $i++)
    $fact = $fact * $i;
echo "<p>El factorial de " . $num . " es: " . $fact . "</p>";
