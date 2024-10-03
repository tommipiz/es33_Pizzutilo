<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funzione Url Img</title>
</head>
<body>
    <?php

        function generaUrlImmagine($larghezza, $altezza) {
            return "https://picsum.photos/" . $larghezza . "/" . $altezza;
        }

        $larghezza = 400; // Imposta la larghezza dell'immagine
        $altezza = 300;   // Imposta l'altezza dell'immagine

        $urlImmagine = generaUrlImmagine($larghezza, $altezza);

        echo "<img src='$urlImmagine' alt='Immagine casuale generata da Lorem Picsum'>";
    ?>
    
</body>
</html>