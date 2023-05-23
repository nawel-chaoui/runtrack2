<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    $isVowel = false;

    foreach ($vowels as $vowel) {
        if (strcasecmp($char, $vowel) === 0) {
            $isVowel = true;
            break;
        }
    }

    if ($isVowel) {
        echo $str[$i];
    }
}
?>
