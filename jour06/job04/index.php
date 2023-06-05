<?php
function calcule($nombre1, $operation, $nombre2) {
    $operations = array(
        '+' => function($a, $b) { return $a + $b; },
        '-' => function($a, $b) { return $a - $b; },
        '*' => function($a, $b) { return $a * $b; },
        '/' => function($a, $b) { 
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : division par zéro";
            }
        },
        '%' => function($a, $b) { return $a % $b; }
    );

    if (isset($operations[$operation])) {
        $resultat = $operations[$operation]($nombre1, $nombre2);
        return $resultat;
    } else {
        return "Erreur : opération non valide";
    }
}

$resultat = calcule(10, '+', 5);  
echo $resultat . "<br>";  

$resultat = calcule(10, '-', 5);  
echo $resultat . "<br>";

$resultat = calcule(10, '*', 5);  
echo $resultat . "<br>";

$resultat = calcule(10, '/', 0);  // Division par zéro
echo $resultat . "<br>";  // Affiche "Erreur : division par zéro"

$resultat = calcule(10, '/', 5);  
echo $resultat . "<br>";

$resultat = calcule(10, '%', 5);  
echo $resultat . "<br>";

$resultat = calcule(10, '^', 5);  // Erreur
echo $resultat . "<br>"; // Affiche "opération non valide"
?>

