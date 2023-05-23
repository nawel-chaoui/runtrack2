<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    'consonnes' => 0,
    'voyelles' => 0
);

$vowels = array('a', 'e', 'i', 'o', 'u', 'y');
$chars = str_split(strtolower($str));

foreach ($chars as $char) {
    if (isset($dic['consonnes']) && in_array($char, $vowels, true)) {
        $dic['voyelles']++;
    } elseif (isset($dic['voyelles'])) {
        $dic['consonnes']++;
    }
}

echo '<table>';
echo '<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>';
echo '<tbody>';
echo '<tr><td>' . $dic['voyelles'] . '</td><td>' . $dic['consonnes'] . '</td></tr>';
echo '</tbody>';
echo '</table>';
?>
