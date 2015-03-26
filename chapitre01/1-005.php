<?php
    $nom = "Charlie";
    $ville = "Vevey";
    $pays = "Suisse";
    $operation = "";
?>

<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <title>Exercice 1-005.php</title>
    </head>
    
    <body>
        Bonjour <strong><?= $nom ?></strong> !<br>
        Vous habitez à <?= $ville ?> en <?= $pays ?> <br><br>
        
        <!-- une différente manière... avec printf -->
        <?php
            printf('Bonjour <strong>%s</strong> !<br>Vous habitez à %s en %s<br><br>', 
            $nom, $ville, $pays);
            // Le %s est le truc qui va être remplacé. Ici, le s signifie string, donc chaîne de caractère
            // %d pour chiffre décimal
        ?> <br><br>
        
        <?php
            $operation = strlen($nom);
            echo "strlen avec la variable \$nom donne : $operation<br><br>";
        ?>    </body>
    
</html>
