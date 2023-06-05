<?php
session_start();

// Réinitialiser la partie
if(isset($_POST['reset'])){
    unset($_SESSION['grille']);
}

// Vérifier si un joueur a gagné
function verifierGagnant($grille){
    $symboles = array('X', 'O');

    // Vérifier les lignes
    for($i = 0; $i < 3; $i++){
        if($grille[$i][0] != '-' && $grille[$i][0] == $grille[$i][1] && $grille[$i][1] == $grille[$i][2]){
            return $grille[$i][0];
        }
    }

    // Vérifier les colonnes
    for($j = 0; $j < 3; $j++){
        if($grille[0][$j] != '-' && $grille[0][$j] == $grille[1][$j] && $grille[1][$j] == $grille[2][$j]){
            return $grille[0][$j];
        }
    }

    // Vérifier les diagonales
    if($grille[0][0] != '-' && $grille[0][0] == $grille[1][1] && $grille[1][1] == $grille[2][2]){
        return $grille[0][0];
    }

    if($grille[2][0] != '-' && $grille[2][0] == $grille[1][1] && $grille[1][1] == $grille[0][2]){
        return $grille[2][0];
    }

    // Match nul
    $totalCases = 9;
    $casesRemplies = 0;
    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            if($grille[$i][$j] != '-'){
                $casesRemplies++;
            }
        }
    }
    if($casesRemplies == $totalCases){
        return 'matchnul';
    }

    return null;
}

// Gérer les clics sur les boutons
if(isset($_POST['case'])){
    $ligne = $_POST['ligne'];
    $colonne = $_POST['colonne'];
    $symbole = $_SESSION['tour'];

    $_SESSION['grille'][$ligne][$colonne] = $symbole;

    // Changer de joueur
    $_SESSION['tour'] = ($_SESSION['tour'] == 'X') ? 'O' : 'X';

    // Vérifier si un joueur a gagné
    $gagnant = verifierGagnant($_SESSION['grille']);
    if($gagnant){
        $message = ($gagnant == 'matchnul') ? 'Match nul' : $gagnant . ' a gagné';
        unset($_SESSION['grille']);
        unset($_SESSION['tour']);
    }
}

// Initialiser la partie
if(!isset($_SESSION['grille'])){
    $_SESSION['grille'] = array(
        array('-', '-', '-'),
        array('-', '-', '-'),
        array('-', '-', '-')
    );
    $_SESSION['tour'] = 'X';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu du morpion</title>
</head>
<body>
    <h1>Jeu du morpion</h1>
    <table>
        <?php for($i = 0; $i < 3; $i++) : ?>
            <tr>
                <?php for($j = 0; $j < 3; $j++) : ?>
                    <td>
                        <?php if($_SESSION['grille'][$i][$j] == '-'): ?>
                            <form method="POST" action="">
                                <input type="hidden" name="ligne" value="<?= $i ?>">
                                <input type="hidden" name="colonne" value="<?= $j ?>">
                                <input type="submit" name="case" value="-">
                            </form>
                        <?php else: ?>
                            <?= $_SESSION['grille'][$i][$j] ?>
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <?php if(isset($message)): ?>
        <p><?= $message ?></p>
        <form method="POST" action="">
            <input type="submit" name="reset" value="Réinitialiser la partie">
        </form>
    <?php endif; ?>
</body>
</html>