<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati del Sondaggio</title>
</head>
<style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
<body>
    <h1>Risultati del Sondaggio</h1>

    <?php
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $data_nascita = $_GET['data_nascita'];
    $orario_arrivo = $_GET['orario_arrivo'];
    $mezzo = $_GET['mezzo'];

    if (isset($_GET['corsi']) && !empty($_GET['corsi'])) {
        $corsi = $_GET['corsi'];
    } else {
        $corsi = "Nessuna attività";
    }

    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di Nascita</th>
            <th>Orario di Arrivo</th>
            <th>Mezzo di Trasporto</th>
            <th>Corsi Pomeridiani Seguiti</th>
        </tr>

    <?php 
        echo "<tr>";
            echo "<td><p>$nome</p></td>";
            echo "<td><p>$cognome</p></td>";
            echo "<td><p>$data_nascita</p></td>";
            echo "<td><p>$orario_arrivo</p></td>";
            echo "<td><p>$mezzo</p></td>";
            echo "<td><p>$corsi</p></td>";
           
        echo "</tr>";
    echo "</table>";
    ?>    

 
</body>
</html>
