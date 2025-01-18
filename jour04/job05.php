<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Se connecter">
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Vérifier les identifiants
        if ($username === 'John' && $password === 'Rambo') {
            echo "<p>c’est pas ma guerre</p>";
        } else {
            echo "<p>votre pire cauchemar</p>";
        }
        // verifiier si l'utilisateur est oussama filali
        if ($username === "oussama" && $password === "filali") {
            echo "<p>je suis un homme libre</p>";
        } 

    }
    ?>
</body>
</html>
