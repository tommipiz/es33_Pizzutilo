<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome Colorato</title>
</head>
<body>
    <?php
        $nome = "Tommaso Pizzutilo";

        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);

        $colore = "rgb($r, $g, $b)";

        echo "<h1 style='color: $colore'>$nome</h1>";

    ?>
    
</body>
</html>