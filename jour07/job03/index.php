<?php
session_start();

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser la variable de session "prenoms" à un tableau vide
    $_SESSION['prenoms'] = array();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['prenom'])) {
    // Récupérer la valeur du prénom depuis le formulaire
    $prenom = $_POST['prenom'];

    // Vérifier si la variable de session "prenoms" existe
    if (!isset($_SESSION['prenoms'])) {
        // Initialiser la variable de session à un tableau vide si elle n'existe pas
        $_SESSION['prenoms'] = array();
    }

    // Ajouter le prénom à la variable de session "prenoms"
    $_SESSION['prenoms'][] = $prenom;
}

// Afficher l'ensemble des prénoms
echo "Prénoms enregistrés :<br>";
if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
} else {
    echo "Aucun prénom enregistré.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajout de prénoms</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="submit" value="Ajouter">
    </form>

    <form method="POST" action="">
        <input type="submit" name="reset" value="Réinitialiser la liste">
    </form>
</body>
</html>
