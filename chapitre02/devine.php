<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" >
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>Jeu de devinette</h1>
        <form action="resultat.php" method="post">
            <label>Deviner le nombre entre 0 et 5<br> <input type="text" name="chiffre" size="40" maxlength="2" /></label>
            <input type="submit" name="test" value="Tester" />
            <input type="hidden" name="chiffreadeviner" value="3"/>
        </form>
    </body>
</html>

