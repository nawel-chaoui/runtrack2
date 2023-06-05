<?php
function leetSpeak($str) {
    $leetMapping = array(
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7',
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        's' => '5',
        't' => '7'
    );

    $leetStr = '';
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];

        if (isset($leetMapping[$char])) {
            $leetStr .= $leetMapping[$char];
        } else {
            $leetStr .= $char;
        }
    }

    return $leetStr;
}

$str = "Hello World";
$leetStr = leetSpeak($str);
echo $leetStr;

?>