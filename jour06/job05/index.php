<?php
function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }

    return $count;
}

// INITIALISATION 
$str = "Bonjour";
$char = "o";
$result = occurrences($str, $char);
echo "Le nombre d'occurrences de '$char' dans '$str' est de $result";

?>