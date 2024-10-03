<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafi</title>
</head>
<body>
    <?php
        $size = 15;
        $num = 8;

        for($i=0; $i<$num; $i++) {
            echo "<p style='font-size: " . ($size + ($i * 2)) . "px;'>Paragrafo " . ($i + 1) . "</p>";
            
        }

    ?>
    
</body>
</html>