<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification de Nombre</title>
</head>
<body>
    <form action="" method="get">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <input type="submit" value="Vérifier">
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        // Vérifier si la valeur entrée est un nombre
        if (is_numeric($nombre)) {
            // Vérifier si le nombre est pair ou impair
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>
