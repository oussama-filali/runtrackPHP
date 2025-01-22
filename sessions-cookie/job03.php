<?php
session_start();

// Initialiser la liste des prénoms dans la session si elle n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter le prénom à la liste si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
        $_SESSION['prenoms'][] = trim($_POST['prenom']);
    }

    // Réinitialiser la liste si le bouton "reset" est cliqué
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Prénoms</title>
</head>
<body>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . htmlspecialchars($prenom) . "</li>";
            }
        } else {
            echo "<li>Aucun prénom enregistré.</li>";
        }
        ?>
    </ul>
</body>
</html>
