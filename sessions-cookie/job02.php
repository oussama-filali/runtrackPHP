<?php
// Vérifier si le cookie existe et l'incrémenter
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} 
else {
    $nbvisites = 1;
}

// Réinitialiser le compteur si le bouton "reset" est cliqué
if (isset($_POST['reset'])) {
    $nbvisites = 0;
}

// Mettre à jour le cookie
setcookie('nbvisites', $nbvisites, time() + 3600); // Le cookie expire dans 1 heure

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites avec Cookie</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
