<?php

session_start();

// Initialiser ou incrémenter le compteur de visites
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
