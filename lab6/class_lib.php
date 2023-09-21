<?php
class Cliente
{
    var $nombre;
    var $numero;
    var $peliculas_alquidas;

    function __construct($nombre, $numero)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->peliculas_alquidas = array();
    }
    function __destruct()
    {
        echo "<br>destruido: " . $this->nombre;
    }
    function dame_numero()
    {
        return $this->numero;
    }
}
