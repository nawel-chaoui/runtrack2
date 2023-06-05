<?php
session_start();

// Vérifier si la variable de session "nbvisites" existe
if (!isset($_SESSION['nbvisites'])) {
    // Initialiser la variable de session à 0 si elle n'existe pas
    $_SESSION['nbvisites'] = 0;
}

// Incrémenter le compteur de visites à chaque chargement de la page
$_SESSION['nbvisites']++;

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur de visites à 0
    $_SESSION['nbvisites'] = 0;
}

// Afficher le contenu de la variable de session "nbvisites"
echo "Nombre de visites : " . $_SESSION['nbvisites'];

// Si vous voulez afficher un bouton de réinitialisation
echo '<form method="POST" action="">
        <input type="submit" name="reset" value="Reset">
      </form>';
?>
