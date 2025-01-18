<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        
        <label for="age">Âge :</label>
        <input type="number" id="age" name="age"><br><br>
        
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Compter et afficher combien d'arguments ya' t'il dans $_POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numberOfPostArguments = count($_POST);
        echo "<p>Le nombre d'arguments POST est : " . $numberOfPostArguments . "</p>";
    }
    ?>
</body>
</html>
