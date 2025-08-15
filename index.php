<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        class produto{
            public $nome;
            public $marca;
        }

        $p1 = new produto();
        $p1 -> nome = "Bolacha";
        $p1 -> marca = "trakinas";
            var_dump($p1);

        $p2 = new produto();
        $p2 -> nome = "Refrigerante";
        $p2 -> marca = "Guarana-Jesus";
            var_dump($p2);
    ?>

</body>
</html>