<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione prenotazioni</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $tavolo = $_POST['tavolo'];
        $orario = $_POST['orario'];
        $note = $_POST['note'];
        $piatti = $_POST['piatti'];
        $parcheggio = $_POST['parcheggio'];
        $dataPrenotazione = date("d-m-Y H:i");

        if (empty($_POST['piatti'])) {
            echo "<p>Errore: Selezionare almeno un piatto.</p>";
            echo "<p>Data e ora della prenotazione: $dataPrenotazione</p>";
            echo '<a href="prenotazione.html">Torna alla pagina di prenotazione</a>';
            exit;
        }

        $prezzi = [
            "antipasto" => 5,
            "primo" => 6,
            "secondo" => 7
        ];

        $prezzoTotale = 0;
        foreach ($piatti as $piatto) {
            $prezzoTotale += $prezzi[$piatto];
        }

        if (count($piatti) == 1 && in_array("antipasto", $piatti)) {
            echo "<p>Errore: Non è possibile ordinare solo l'antipasto.</p>";
            echo "<p>Data e ora della prenotazione: $dataPrenotazione</p>";
            echo '<a href="prenotazione.html">Torna alla pagina di prenotazione</a>';
            exit;
        } elseif (in_array("primo", $piatti) && in_array("secondo", $piatti) && in_array("antipasto", $piatti)) {
            $prezzoTotale *= 0.85;  
        } elseif (in_array("primo", $piatti) && in_array("secondo", $piatti)) {
            $prezzoTotale *= 0.90;  
        }

        if ($parcheggio == "custodito") {
            $prezzoTotale += 5;
        } elseif ($parcheggio == "non_custodito") {
            $prezzoTotale += 3;
        }

        $camerieri = ["Luca", "Marta", "Giulia", "Marco", "Anna"];
        $cameriereAssegnato = $camerieri[array_rand($camerieri)];

        echo "<h2>Resoconto Prenotazione</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Campo</th><th>Dettaglio</th></tr>";
        echo "<tr><td>Nome</td><td>$nome</td></tr>";
        echo "<tr><td>Cognome</td><td>$cognome</td></tr>";
        echo "<tr><td>Tavolo</td><td>$tavolo</td></tr>";
        echo "<tr><td>Orario</td><td>$orario</td></tr>";
        echo "<tr><td>Note</td><td>$note</td></tr>";
        echo "<tr><td>Piatti</td><td>" . implode(", ", $piatti) . "</td></tr>";
        echo "<tr><td>Parcheggio</td><td>" .  $parcheggio . "</td></tr>";
        echo "<tr><td>Cameriere Assegnato</td><td>$cameriereAssegnato</td></tr>";
        echo "<tr><td>Data Prenotazione</td><td>$dataPrenotazione</td></tr>";
        echo "<tr><td>Prezzo Totale</td><td>€" . number_format($prezzoTotale, 2) . "</td></tr>";
        echo "</table>";
    ?>
    
</body>
</html>