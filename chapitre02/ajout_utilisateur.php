<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" >
        <title>Exercice 2</title>
    </head>
    <body>
        <h1>Inscris-toi!</h1> <br>
        <form action="ajout_utilisateur_post.php" method="post">
            <label>Login<br> <input type="text" name="login" size="40" maxlength="100" /></label><br><br>
            <label>Mot de passe<br> <input type="password" name="motdepasse" size="40" maxlength="100" /></label><br><br>
            <label>Majeur<br>
                <select name="majeur">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
            </label><br><br>
            <label>Age<br> <input type="text" name="age" size="3" maxlength="3"</label><br><br>
            Type<br> <label><input type="radio" name="sexe" value="femme" /> Femme </label>
                     <label><input type="radio" name="sexe" value="homme" /> Homme </label><br><br>        
            Options<br> <input type="checkbox" name="lettre" value="1" /> <label>Lettre de nouvelle</label>
                        <input type="checkbox" name="membre" value="1" /> <label>Membre de soutien</label>
            <br><br>
            <input type="submit" name="inscription" value="Inscription" />
        </form>
    </body>
</html>
