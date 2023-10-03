<?php
class Milib
{
    public function Generar_factorial($num)
    {
        $fact = 1;
        for ($i = 2; $i <= $num; $i++)
            $fact = $fact * $i;
        echo "<p>El factorial de " . $num . " es: " . $fact . "</p>";
    }
    public function Generar_numero()
    {
        $num = rand(0, 99);
        return $num;
    }
    public function Validar_unico($arreglo, $i)
    {
        $num = $arreglo[$i];
        $j = 0;
        while ($j < $i) {
            if ($num == $arreglo[$j]) {
                $num = $this->Generar_numero();
                $j = 0;
            } else $j++;
        }
        return $num;
    }
    public function Validar_mayor($num, $mayor)
    {
        if ($num > $mayor)
            return $num;
        else
            return $mayor;
    }
    public function Mostrar_formulario()
    {
?>

        <body>
            <form action="" method="post">
                <p>Defina la dimesion de la Matriz</p>
                <p><input type="number" name="num" min="1" required>
                    <input type="submit" value="Generar" name="generar">
                </p>
            </form>
        </body>
<?php
    }
    public function Generar_matriz($n)
    {
        echo "Dimension de la mattriz: " . $n;
        echo "<table border=1>";

        for ($x = 0; $x < $n; $x++) {
            echo "<tr>";
            for ($y = 0; $y < $n; $y++) {
                echo "<td><center>";
                if ($x == $y)
                    echo "1";
                else
                    echo "0";
                echo "</td></center>";
            }
            echo "</tr>";
        }
        echo "</table><br>";
    }
}
?>