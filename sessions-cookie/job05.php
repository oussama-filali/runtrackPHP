<?php
session_start();

// Initialiser la grille si elle n'existe pas
if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['currentPlayer'] = 'X';
}

// Gérer le clic sur une case
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $row = $_POST['row'];
    $col = $_POST['col'];

    if ($_SESSION['grid'][$row][$col] === '-') {
        $_SESSION['grid'][$row][$col] = $_SESSION['currentPlayer'];
        $_SESSION['currentPlayer'] = $_SESSION['currentPlayer'] === 'X' ? 'O' : 'X';
    }
}

// Fonction pour vérifier le gagnant
function checkWinner($grid) {
    // Vérifier les lignes, colonnes et diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] !== '-' && $grid[$i][0] === $grid[$i][1] && $grid[$i][1] === $grid[$i][2]) {
            return $grid[$i][0];
        }
        if ($grid[0][$i] !== '-' && $grid[0][$i] === $grid[1][$i] && $grid[1][$i] === $grid[2][$i]) {
            return $grid[0][$i];
        }
    }
    if ($grid[0][0] !== '-' && $grid[0][0] === $grid[1][1] && $grid[1][1] === $grid[2][2]) {
        return $grid[0][0];
    }
    if ($grid[0][2] !== '-' && $grid[0][2] === $grid[1][1] && $grid[1][1] === $grid[2][0]) {
        return $grid[0][2];
    }
    return null;
}

$winner = checkWinner($_SESSION['grid']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; text-align: center; }
        button { width: 100%; height: 100%; }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <?php if ($winner): ?>
        <p>Le joueur <?php echo $winner; ?> a gagné !</p>
        <form method="post">
            <button type="submit" name="reset">Recommencer</button>
        </form>
        <?php
        if (isset($_POST['reset'])) {
            session_destroy();
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
        ?>
    <?php else: ?>
        <p>Joueur actuel : <?php echo $_SESSION['currentPlayer']; ?></p>
        <form method="post">
            <table borde ="1">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < 3; $j++): ?>
                            <td>
                                <?php if ($_SESSION['grid'][$i][$j] === '-'): ?>
                                    <button type="submit" name="row" value="<?php echo $i; ?>" formaction="?col=<?php echo $j; ?>">-</button>
                                <?php else: ?>
                                    <?php echo $_SESSION['grid'][$i][$j]; ?>
                                <?php endif; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </table>
        </form>
    <?php endif; ?>
</body>
</html>
