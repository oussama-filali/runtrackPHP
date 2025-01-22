<?php
// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
        // Stocker le prénom dans un cookie
        setcookie('prenom', trim($_POST['prenom']), time() + 3600); // Cookie valide pour 1 heure
        header("Location: " . $_SERVER['PHP_SELF']); // Rediriger pour éviter la resoumission du formulaire
        exit;
    }

    // Vérifier si le bouton de déconnexion a été cliqué
    if (isset($_POST['deco'])) {
        // Supprimer le cookie en le définissant avec une date d'expiration passée
        setcookie('prenom', '', time() - 3600);
        header("Location: " . $_SERVER['PHP_SELF']); // Rediriger pour mettre à jour l'affichage
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom'])): ?>
        <p>Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
