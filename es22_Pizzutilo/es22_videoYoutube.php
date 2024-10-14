<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Youtube</title>
</head>
<body>
    <?php
        $video1 = array("titolo" => "Introducing PHP for Beginners","idVideo" => "ABC123");
    
        $video2 = array("titolo" => "Learn PHP in 15 Minutes","idVideo" => "DEF456");
        
        $video3 = array("titolo" => "PHP Crash Course","idVideo" => "GHI789");
        
        $listaVideo = array($video1, $video2, $video3);
    
        function inserisciVideoYoutube($video, $larPerc, $altPx) {
            echo "<h2>{$video['titolo']}</h2>";
            echo "<iframe src='https://www.youtube.com/embed/{$video['idVideo']}' style='width: {$larPerc}%; height: {$altPx}px;' frameborder='0' allowfullscreen></iframe><br>";
        }
        
        inserisciVideoYoutube($listaVideo[0], 50, 250);
        
        $larPerc = 50;
        $altPx = 250;
        
        for ($i = 0; $i < 3; $i++) {
            inserisciVideoYoutube($listaVideo[$i], $larPerc, $altPx);
            $larPerc += 25;
            $altPx += 125;
        } 

    ?>
    
</body>
</html>