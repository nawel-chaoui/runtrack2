<?php
// Vérifier si le bouton "Déconnexion" a été cliqué
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le mettant à une valeur vide et en lui attribuant une date d'expiration passée
    setcookie('prenom', '', time() - 3600);
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['connexion'])) {
    // Récupérer la valeur du prénom depuis le formulaire
    $prenom = $_POST['prenom'];

    // Créer le cookie avec le prénom
    setcookie('prenom', $prenom, time() + 86400); // expire dans 1 jour
}

// Vérifier si le cookie existe ou si le formulaire a été soumis récemment
if (isset($_COOKIE['prenom']) || isset($_POST['connexion'])) {
    // Afficher le message de bienvenue et le bouton "Déconnexion"
    echo "Bonjour " . ($_COOKIE['prenom'] ?? $_POST['prenom']) . " !";
    echo '<form method="POST" action=""><input type="submit" name="deco" value="Déconnexion"></form>';
} else {
    // Afficher le formulaire de connexion
    echo '<form method="POST" action=""><input type="text" name="prenom" placeholder="Prénom" required>';
    echo '<input type="submit" name="connexion" value="Connexion"></form>';
}
?>

