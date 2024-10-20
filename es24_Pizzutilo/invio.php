<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Mail Creata</title>
</head>
<body>

<?php

    $mittente = $_POST['mittente'];
    $destinatario = $_POST['destinatario'];
    $oggetto = $_POST['oggetto'];
    $corpo = $_POST['corpo'];

    $lunghezzaCorpo = strlen($corpo);
    $numeroParole = str_word_count($corpo);
?>

    <h1>Mail creata</h1>
    
    <h3>Informazioni</h3>
    <div>
        <p>Mittente: <?php echo $mittente; ?></p>
        <p>Destinatario: <?php echo $destinatario; ?></p>
        <p>Oggetto: <?php echo $oggetto; ?></p>
    </div>

    <h3>Corpo della mail</h3>
    <div>
        <p><?php echo $corpo; ?></p>
    </div>

    <hr>

    <h3>Statistiche corpo mail</h3>
    <div>
        <p>Lunghezza del corpo: <?php echo $lunghezzaCorpo; ?> caratteri</p>
        <p>Numero di parole: <?php echo $numeroParole; ?></p>
    </div>

</body>
</html>
