<?php
$porcentaje = $_POST['porcentaje'];
echo "<center>";
if ($porcentaje >= 80)
    echo "<br><img src=media/semaforo-alto.jpg alt=Porcentaje de Ventas>";
else {
    if ($porcentaje < 50)
        echo "<br><img src=media/semaforo-bajo.jpg alt=Porcentaje de Ventas>";
    else
        echo "<br><img src=media/semaforo-med.jpg alt=Porcentaje de Ventas>";
}
echo "<p>Su porcentaje de ventas es del: " . $porcentaje . " %</p>";
echo "</center>";
