<?php
    $chiffre = (int)$_POST['chiffre'];//definir les variables
    $chiffre_a_deviner = (int)$_POST['chiffreadeviner'];
   
   // Issu de la correction avec le professeur 
    $gagne = $chiffre == $chiffre_a_deviner;
    if ($gagne) {$titre = "Vous avez gagné!";} else {$titre = "Vous avez perdu!";}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $titre ?></title>
</head>
<body>

<h3>TADAAAAAAM</h3>

<?php
 if(/*$chiffre===$chiffre_a_deviner*/$gagne){ 
     echo "Félicitations, tu as réussi à deviner le nombre!";} else{
     echo '<a href="javascript:history.back()">Tu as perdu. Réessayer?</a>';}
?>

</body>
</html>
