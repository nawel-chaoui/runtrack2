<?php
// Fonction pour vérifier si un nombre est premier
function nbPremier($nombre) {
    if ($nombre < 2) {
        return false; // Les nombres inférieurs à 2 ne sont pas premiers
    }

    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i === 0) {
            return false; // Si le nombre est divisible par un diviseur, il n'est pas premier
        }
    }

    return true; // Le nombre est premier si aucune division exacte n'a été trouvée
}

// Boucle pour itérer à travers les nombres de 2 à 1000
for ($nombre = 2; $nombre <= 1000; $nombre++) {
    if (nbPremier($nombre)) {
        echo $nombre . "<br />"; // Afficher le nombre s'il est premier avec un retour à la ligne
    }
}
?>
