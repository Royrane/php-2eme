<?php
    $chiffre = $_POST['chiffre'];//definir les variables
    $chiffre_a_deviner = $_POST['chiffreadeviner'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exercice 2-002</title>
</head>
<body>

<h3>Voici les valeurs transmises par l'utilisateur</h3>

<?php
 if($chiffre===$chiffre_a_deviner){ echo "Félicitations, tu as réussi à deviner le nombre!";} else {echo '<a href="javascript:history.back()">Réessayer!</a>';};
?>

</body>
</html>
