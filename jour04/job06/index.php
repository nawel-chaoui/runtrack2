<html>
<head>
    <title>pair/impair</title>
</head>
<body>
<h1>Pair ou impair ?</h1>
<form action="" method="get" class="formulaire">
      <label for="nombre">Nombre : </label>
      <input type="text" name="nombre" id="username">

      <input type="submit" value="Envoyer">
</form>
</body>
</html>

<?php

if (isset($_GET['nombre']))
{
      if ($_GET['nombre'] % 2 == 0)
      {
            echo "Nombre pair";
      }
      else
      {
            echo "Nombre impair";
      }
}

?>