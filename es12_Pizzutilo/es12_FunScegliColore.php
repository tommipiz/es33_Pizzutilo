<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scegli colore</title>
</head>
<body>
    <?php

    function scegliColore($iniziale) {
        // Switch per selezionare il colore
        switch ($iniziale) {
            case 'r':
                return 'red';
            case 'g':
                return 'green';
            case 'b':
                return 'blue';
            default:
                return 'black'; 
        }
    }

    $colore = scegliColore('b'); 

    echo "<p style='color: $colore;'>Questo paragrafo ha la proprietà color con valore $colore.</p>";

    ?>

    
</body>
</html>