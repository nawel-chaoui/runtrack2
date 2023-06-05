<?php
if (isset($_COOKIE['nbvisites'])) {
    $_COOKIE['nbvisites']++;
} else {
    $_COOKIE['nbvisites'] = 1;
    setcookie('nbvisites', $_COOKIE['nbvisites'], time() + 86400); // expire dans 1 jour
}

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur de visites à 0 en mettant le cookie à une nouvelle valeur
    $_COOKIE['nbvisites'] = 0;
    setcookie('nbvisites', $_COOKIE['nbvisites'], time() + 86400); // expire dans 1 jour
}

// Afficher le contenu du cookie "nbvisites"
echo "Nombre de visites : " . $_COOKIE['nbvisites'];

?>
