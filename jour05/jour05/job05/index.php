<?php
  // Inclusion du fichier CSS sélectionné
  if (isset($_POST['style'])) {
    $style = $_POST['style'];
    echo '<link rel="stylesheet" type="text/css" href="' . $style . '.css">';
  }
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulaire avec liste déroulante</title>
</head>
<body>
    <header></header>
  <h1>Sélectionne un style</h1>
  <form method="POST" action="">
    <select id="style" name="style">
      <option value="style1">Style 1</option>
      <option value="style2">Style 2</option>
      <option value="style3">Style 3</option>
    </select><br><br>

    <input type="submit" value="Valider">
  </form>
  <footer></footer>
</body>
</html>