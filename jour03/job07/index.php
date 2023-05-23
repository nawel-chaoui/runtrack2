<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = strlen($str);
$result = '';

for ($i = 0; $i < $length; $i++) {
    $currentChar = isset($str[$i]) ? $str[$i] : '';
    $nextChar = isset($str[$i + 1]) ? $str[$i + 1] : $str[0];
    $result .= $nextChar;
}

echo $result;
?>
