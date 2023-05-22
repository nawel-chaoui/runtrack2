<?php
// Création des variables avec des valeurs
$booleanVar = true;
$integerVar = 5;
$stringVar = "Salutations";
$floatVar = 3.14;

// Génération du tableau HTML
echo "<table>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>boolean</td><td>booleanVar</td><td style='text-align: center;'>".($booleanVar ? "true" : "false")."</td></tr>";
echo "<tr><td>entier</td><td>integerVar</td><td style='text-align: right;'>$integerVar</td></tr>";
echo "<tr><td>string</td><td>stringVar</td><td>$stringVar</td></tr>";
echo "<tr><td>float</td><td>floatVar</td><td style='text-align: right;'>$floatVar</td></tr>";
echo "</tbody>";
echo "</table>";
?>
