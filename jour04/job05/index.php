<!DOCTYPE html>
<html>
<head>
    <title>FORMULAIRE DE CONNEXION</title>
</head>
<body>
    <h1>Log in :</h1>

    <form method="POST" action="" class="formulaire">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password :</label>
        <input type="text" name="password" id="password"><br>
        <input type="submit" value="Submit">
    </form>

    <?php

    ?>

<?php

if (isset($_POST['username']) && isset($_POST['password']))
{

if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo')
{
      echo "C'est pas ma guerre";
}
else
{
      echo "Votre pire cauchemar";
}
}
?>
