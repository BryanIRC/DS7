<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 6.6</title>
</head>

<body>
    <?php
    final class ClaseBase
    {
        public function test()
        {
            echo "ClaseBase::test() llamada\n";
        }
        final public function moreTesting()
        {
            echo "ClaseBase::moreTesting() llamada\n";
        }
    }
    class ClaseHijo extends ClaseBase
    {
        //No se puede crear una clase heredada, de una clase declarada como final.
    }
    ?>
</body>

</html>