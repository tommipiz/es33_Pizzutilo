<?php
    session_start();

    $registrazioni = $_SESSION["registrazioni"] ?? [];

    $etaMedia = 0;
    if (count($registrazioni) > 0) {
        $etaMedia = array_sum($registrazioni) / count($registrazioni);
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultati delle Registrazioni</title>
</head>
<body>
    <h1>Risultati delle Registrazioni</h1>
    
    <table border="1">
        <tr>
            <th>Codice Fiscale</th>
            <th>Età</th>
        </tr>
        <?php foreach ($registrazioni as $cf => $eta): ?>
            <tr>
                <td><?= htmlspecialchars($cf) ?></td>
                <td><?= htmlspecialchars($eta) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <p><strong>Età Media:</strong> <?= number_format($etaMedia, 2) ?></p>
    
    <br>
    <a href="form.html">Nuovo Inserimento</a>
</body>
</html>
