<?php
$nom = $_POST['login'];
$_GET[’nom’];

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" >
        <title>Exercice 3</title>
    </head>
    <body>
        
        Nom : <?php if(empty($nom)){echo $_GET['nom'] ;} else { echo $nom;}?>

    </body>
</html>
