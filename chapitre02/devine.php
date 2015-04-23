<?php
CONST NBR_MAX = 5;
CONST NBR_MIN = 0;
$nombre = rand(NBR_MIN, NBR_MAX);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" >
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>Jeu de devinette</h1>
        <form action="resultat.php" method="post">
            <label>Deviner le nombre entre 0 et 5<br> <input type="number" name="chiffre" size="40" min ="0" max="5" maxlength="1" /></label>
            <input type="submit" name="test" value="Tester" />
            <input type="hidden" name="chiffreadeviner" value="<?=$nombre?>"/>
        </form>
    </body>
</html>

