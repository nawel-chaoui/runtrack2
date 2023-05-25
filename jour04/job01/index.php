<!DOCTYPE html>
<html>
<head>
    <title>Test du nombre d'arguments GET</title> 
</head>
<body>
    <h1>Formulaire GET</h1>

    <form method="GET" action="">
        <label for="arg1">Pseudo:</label>
        <input type="text" name="arg1" id="arg1"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    $count = 0;

    foreach ($_GET as $key => $value) {
        if (isset($_GET[$key])) {
            $count++; // je comprends pas pourquoi ça compte pas plus que 1, peut-être car ça n'enregistre pas les saisis 
        }
    }

    echo "Le nombre d'arguments GET envoyé est : " . $count;
    ?>

</body>
</html> 