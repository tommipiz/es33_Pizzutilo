<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo e voti</title>
</head>
<body>
    <?php
        $listaVoti1 = [ rand(2,10),rand(2,10),rand(2,10),rand(2,10),rand(2,10) ];
        $listaVoti2 = [ rand(2,10),rand(2,10),rand(2,10),rand(2,10),rand(2,10) ];
        $listaVoti3 = [ rand(2,10),rand(2,10),rand(2,10),rand(2,10),rand(2,10) ];

        $studente1 = ["cognome" => "Pizzutilo", "nome" => "Tommaso","listaVoti" => $listaVoti1 ];
        $studente2 = ["cognome" => "Petrini", "nome" => "Giacomo","listaVoti" => $listaVoti2 ];
        $studente3 = ["cognome" => "Viligiardi", "nome" => "Yuri","listaVoti" => $listaVoti3 ];
    

        function calcolaMedia($voti) {

            $somma = 0;

            foreach ($voti as $voto) {
                $somma += $voto;
            }
            return $somma / count($voti);
        }

        $mediaVoti1 = calcolaMedia($studente1['listaVoti']);
        $mediaVoti2 = calcolaMedia($studente2['listaVoti']);
        $mediaVoti3 = calcolaMedia($studente3['listaVoti']);

        
        //Studente 1
        echo "<ul>";
            echo "<li><h2>$studente1[cognome]</h2></li>";
            echo "<li><h2>$studente1[nome]</h2></li>";
            echo "<li> Lista voti: </li>";

                echo "<ol>";
                        foreach($studente1['listaVoti'] as $voto ) {
                            $votoMax1 = 0;

                            echo "<li>$voto</li>";

                        }
                echo "</ol>";
        echo "</ul>";

        echo "Media: $mediaVoti1";

        //Studente 2
        echo "<ul>";
        echo "<li><h2>$studente2[cognome]</h2></li>";
        echo "<li><h2>$studente2[nome]</h2></li>";
        echo "<li> Lista voti: </li>";

            echo "<ol>";
                foreach($studente2['listaVoti'] as $voto ) {
                    echo "<li>$voto</li>";
                }
            echo "</ol>";
        echo "</ul>";

        echo "Media: $mediaVoti2";

        //Studente 3
        echo "<ul>";
        echo "<li><h2>$studente3[cognome]</h2></li>";
        echo "<li><h2>$studente3[nome]</h2></li>";
        echo "<li> Lista voti: </li>";

            echo "<ol>";
                foreach($studente3['listaVoti'] as $voto ) {
                    echo "<li>$voto</li>";
                }
            echo "</ol>";
        echo "</ul>";

        echo "Media: $mediaVoti3";

        $votoMax1 = max($studente1['listaVoti']);
        $votoMax2 = max($studente2['listaVoti']);
        $votoMax3 = max($studente3['listaVoti']);

        echo "<table style='border-style: solid; border-color: black; margin-top: 50px;'>";
            echo "<tr>";
                echo "<th>Nome Studente</th>";
                echo "<th>Cognome Studente</th>";
                echo "<th>Media voti</t>";
                echo "<th>Voto massimo</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td>$studente1[nome]</td>";
                echo "<td>$studente1[cognome]</td>";
                echo "<td>$mediaVoti1</td>";
                echo "<td>$votoMax1</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td>$studente2[nome]</td>";
                echo "<td>$studente2[cognome]</td>";
                echo "<td>$mediaVoti2</td>";
                echo "<td>$votoMax2</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td>$studente3[nome]</td>";
                echo "<td>$studente3[cognome]</td>";
                echo "<td>$mediaVoti3</td>";
                echo "<td>$votoMax3</td>";
            echo "</tr>";
            
        echo "</table>";
 

    ?>
    
</body>
</html>