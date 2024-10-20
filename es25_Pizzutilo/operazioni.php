<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultati delle Operazioni</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        .errore {
            color: red;
        }
    </style>
</head>
<body>

<?php
    // Ricevi i dati dal form GET
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    // Controlla se uno dei numeri è una stringa vuota
    if ($n1 === '' || $n2 === '') {
        echo '<p class="errore">Errore: almeno uno dei due numeri è vuoto.</p>';
        echo '<a href="numeri.html">Torna indietro</a>';
    } else {
        // Converti le stringhe in numeri interi
        $numero1 = intval($n1);
        $numero2 = intval($n2);

        // Mostra i numeri in una lista non ordinata
        echo '<h3>Numeri Inseriti:</h3>';
        echo '<ul>';
        echo '<li>Primo numero: ' . $numero1 . '</li>';
        echo '<li>Secondo numero: ' . $numero2 . '</li>';
        echo '</ul>';

        // Effettua le operazioni
        $addizione = $numero1 + $numero2;
        $sottrazione = $numero1 - $numero2;
        $moltiplicazione = $numero1 * $numero2;

        // Gestisce la divisione per 0
        if ($numero2 == 0) {
            $divisione = '<span class="errore">Impossibile</span>';
        } else {
            $divisione = $numero1 / $numero2;
        }

        // Mostra i risultati in una tabella
        echo '<h3>Risultati delle Operazioni:</h3>';
        echo '<table>';
        echo '<tr><th>Operazione</th><th>Risultato</th></tr>';
        echo '<tr><td>Addizione</td><td>' . $addizione . '</td></tr>';
        echo '<tr><td>Sottrazione</td><td>' . $sottrazione . '</td></tr>';
        echo '<tr><td>Moltiplicazione</td><td>' . $moltiplicazione . '</td></tr>';
        echo '<tr><td>Divisione</td><td>' . $divisione . '</td></tr>';
        echo '</table>';
    }
?>

</body>
</html>
