<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformation de texte</title>
</head>
<body>
    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        
        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        
        <button type="submit">Transformer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];

        function gras($str) {
            return preg_replace('/\b([A-Z][a-z]*)\b/', '<strong>$1</strong>', $str);
        }

        function cesar($str, $shift = 2) {
            $result = '';
            $length = strlen($str);
            for ($i = 0; $i < $length; $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $asciiOffset = ctype_upper($char) ? 65 : 97;
                    $char = chr((ord($char) + $shift - $asciiOffset) % 26 + $asciiOffset);
                }
                $result .= $char;
            }
            return $result;
        }

        function plateforme($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }

        switch ($transformation) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
        }
    }
    ?>
</body>
</html>
