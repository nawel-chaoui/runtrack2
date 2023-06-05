<!DOCTYPE html>
<html>
<head>
    <title>Transformation de chaîne</title>
</head>
<body>
    <form method="POST" action="">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required>
        <br>
        <label for="fonction">Transformation :</label>
        <select id="fonction" name="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br>
        <input type="submit" value="Valider">
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Récupérer les valeurs du formulaire
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];

        // Appliquer la transformation en fonction de l'option choisie
        if ($fonction === "gras") {
            $resultat = transformerEnGras($str);
        } elseif ($fonction === "cesar") {
            $resultat = decalerCesar($str);
        } elseif ($fonction === "plateforme") {
            $resultat = ajouterUnderscore($str);
        }

        // Afficher le résultat
        echo "<p>Résultat : $resultat</p>";
    }

    // Fonction pour mettre en gras les mots commençant par une lettre majuscule
    function transformerEnGras($str) {
        $mots = explode(" ", $str);
        $resultat = "";

        foreach ($mots as $mot) {
            if (ctype_upper($mot[0])) {
                $resultat .= "<b>$mot</b> ";
            } else {
                $resultat .= "$mot ";
            }
        }

        return rtrim($resultat);
    }

    // Fonction pour décaler chaque caractère selon le nombre spécifié (2 par défaut)
    function decalerCesar($str, $decalage = 2) {
        $resultat = "";

        $length = 0;
        while (isset($str[$length])) {
            $length++;
        }

        for ($i = 0; $i < $length; $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $ascii = ord($char);
                $decaleAscii = ($ascii - ord('a') + $decalage) % 26 + ord('a');
                $resultat .= chr($decaleAscii);
            } else {
                $resultat .= $char;
            }
        }

        return $resultat;
    }

    // Fonction pour ajouter un "_" aux mots finissant par "me"
    function ajouterUnderscore($str) {
        $mots = explode(" ", $str);
        $resultat = "";

        foreach ($mots as $mot) {
            if (substr($mot, -2) === "me") {
                $resultat .= "$mot _";
            } else {
                $resultat .= "$mot ";
            }
        }

        return rtrim($resultat);
    }
    ?>
</body>
</html>