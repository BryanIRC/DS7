<?php
$dimension = readline("\nIndica la dimension del arreglo: ");
$arreglo = [$dimension];
for ($i = 0; $i < $dimension; $i++) {
    $impar = true;
    while ($impar) {
        $numero = readline("\nIntroduce un número: ");
        if ($numero % 2 == 0) {
            $arreglo[$i] = $numero;
            $impar = false;
        } else
            echo "El número no es par";
    }
}
echo "Los números son: " . implode(", ", $arreglo) . "\n\n";
