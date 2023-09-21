<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 6.5</title>
</head>

<body>
    <?php
    class ClaseBase
    {
        public function test()
        {
            echo "ClaseBase::test() llamada\n";
        }
        final public function masTests()
        {
            echo "ClaseBase::masTests() llamada\n";
        }
    }
    class ClaseHijo extends ClaseBase
    {
        public function masTests()
        {
            echo "ClaseHijo::masTests() llamada\n";
            //La funcion masTests, al ser declarada final, no puede ser sobreescrita.
        }
    }
    ?>
</body>

</html>