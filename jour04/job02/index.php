<!DOCTYPE html>
<html>
<head>
    <title>FORMULAIRE</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Affichage des arguments et valeurs :</h1>

    <form method="GET" action="">
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom"><br>
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (!empty($_GET)) {
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        foreach ($_GET as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>';
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>

</body>
</html>
