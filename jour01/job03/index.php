 <?php 
 // Définition des variables.
$boolean = true;
$integer = 42;
$string = "Ceci est une chaîne";
$float = 3.14;

// Création du tableau HTML.
echo "
<table border='1'>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Boolean</td>
            <td>boolean</td>
            <td>" . ($boolean ? 'true' : 'false') . "</td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>integer</td>
            <td>$integer</td>
        </tr>
        <tr>
            <td>String</td>
            <td>string</td>
            <td>$string</td>
        </tr>
        <tr>
            <td>Float</td>
            <td>float</td>
            <td>$float</td>
        </tr>
    </tbody>
</table>
";
 ?>
