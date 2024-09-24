<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maggiore,Minore,Uguale</title>
</head>
<body>
    <?php
        $x = rand(-10, 50);
        $y = rand(-10,50);

          // Controllo se x è maggiore, minore o uguale a y
          if($x > $y) {
            echo "<h1>$x è maggiore di $y</h1>";
            $max = $x;
        } elseif($x < $y) {
            echo "<h1>$x è minore di $y</h1>";
            $max = $y;
        } else {
            echo "<h1>$x è uguale a $y</h1>";
            $max = $x;  // O $y, dato che sono uguali
        }

        // Serie di if-else per valutare il massimo
        if ($max < 10) {
            echo "<p>$max è minore di 10</p>";
        } elseif ($max >= 10 && $max <= 20) {
            echo "<p>$max è compreso tra 10 e 20</p>";
        } elseif ($max >= 21 && $max <= 30) {
            echo "<p>$max è compreso tra 21 e 30</p>";
        } else {
            echo "<p>$max è maggiore di 30</p>";
        }  

    ?>
    
</body>
</html>