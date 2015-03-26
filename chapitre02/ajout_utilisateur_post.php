<?php
    $login    = $_POST['login'];     
    $password = $_POST['motdepasse'];  
    $majeur   = $_POST['majeur'];     
    $sexe     = 'non renseigné';
    // Le sexe n'est pas défini.
    if (isset($_POST['sexe'])) 
    { //SI l'utilisateur a REMPLI le formulaire,
        $sexe = $_POST['sexe'];
      // ALORS type est égal à ce que l'utilisateur a rempli. 
    }
     // on peut l'écrire comme ça aussi:
    $lettre = isset($_POST['lettre']) ? $_POST['lettre'] : 0;
    $membre   = isset($_POST['membre']) ? $_POST['membre'] : 0;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" >
        <title>Exercice 2</title>
    </head>
    <body>
        <h1>Voici les valeurs transmises par l'utilisateur</h1><br><br>
        <p>Login: <?= $login ?><br><br>
        Mot de passe: <?= $password ?><br><br>
        Majeur: <?= $majeur ?><br><br>
        Sexe: <?= $sexe ?><br><br>
        Lettre de nouvelle: <?= $lettre ?><br><br>
        Membre de soutien: <?= $membre ?></p>

    </body>
</html>
