<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activité 9</title>
</head>
<body>
    <h2>Affichage des cartes brassées en 4 lignes</h2>
    <?php
        $tabNombres = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
        $tabSuites = array("carreau", "trefle", "coeur", "pique");
        $cartes = [];
        $cartesBrasse = [];
        foreach ($tabSuites as $s) {
            foreach ($tabNombres as  $n) {
                $cartes[] = $n. "-". $s; 
            }
        }
        $paquet1 = array_slice($cartes,0, count($cartes) / 2);
        $paquet2 = array_slice($cartes, count($cartes) / 2);
        for ($i=0; $i < count($cartes)/2 ; $i++) { 
            $cartesBrasse[] = $paquet1[$i]; 
            $cartesBrasse[] = $paquet2[$i]; 
        }
        echo "<ul>";
        $index = 1;
        foreach ($cartesBrasse as $c) {
            if ($index < (count($cartesBrasse) / 4)) {
                if ($index === 1) {
                    echo "<li>";
                }
                echo $c. " - ";
                $index++;
                
            }else {
                echo $c. "</li>";
                $index = 1;
            }
        }
        echo "</ul>";

    ?>
    
</body>
</html>