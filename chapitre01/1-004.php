<?php
    $nom = "Gaston Lagaffe"; // Nom de l'utilisateur
    $var1 = 10;              // Variable entière
    $var2 = 3.3;             // Variable réelle
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>yolo </title>
    </head>
    <body>

        <p>Bonjour <strong><?= $nom?> !</strong><br>
        var1 + var2 = <?=$var1+$var2?><br>
        var1 % var2 = <?=$var1%$var2?><br>
        Division entière de var1 par var2 = <?=round($var1/$var2)?><br>
        Incrémentation de 20 pour var1 : <?=$var1+20?><br>
        Incrémentation de 1 pour var1 : <?=$var1+1?><br>
        var 1 vaut la valeur entière de var2 : <?=$var1=(int) $var2?><br></p>
    </body>
</html>
