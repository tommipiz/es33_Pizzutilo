<?php
    session_start();

    if (!isset($_SESSION["registrazioni"])) {
        $_SESSION["registrazioni"] = [];
    }


    $codiceFiscale = $_GET['codice_fiscale'] ?? null;
    $eta = isset($_GET['eta']) ? (int)$_GET['eta'] : null;

    if ($codiceFiscale && $eta) {
        $_SESSION["registrazioni"][$codiceFiscale] = $eta;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Conferma Inserimento</title>
</head>
<body>
    <h1>Inserimento Effettuato</h1>
    
    <p>Codice Fiscale: <?= htmlspecialchars($codiceFiscale) ?></p>
    <p>Età: <?= htmlspecialchars($eta) ?></p>
    
    <br>
    <a href="form.html">Nuovo Inserimento</a><br>
    <a href="risultati.php">Vedi risultati</a>
</body>
</html>
