<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$reversed = '';

for ($i = mb_strlen($str, 'UTF-8') - 1; $i >= 0; $i--) {
    if (isset($str[$i])) {
        $reversed .= mb_substr($str, $i, 1, 'UTF-8');
    }
}

echo $reversed;
?>
