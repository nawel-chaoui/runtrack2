<!DOCTYPE html>
<html>
<head>
    <title>FORMULAIRE POST</title> 
</head>
<body>
    <h1>Nombre d'arguments POST :</h1>

    <form method="POST" action="">
        <label for="arg1">Pseudo:</label>
        <input type="text" name="arg1" id="arg1"><br>
        <label for="arg2">Age:</label>
        <input type="text" name="arg2" id="arg2"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    $count = 0;

    foreach ($_POST as $key => $value) {
        if (isset($_POST[$key])) {
            $count++; 
        }
    }

    echo "Le nombre d'arguments GET envoyé est : " . $count;
    ?>

</body>
</html> 