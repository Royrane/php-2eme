<?php
    $prix = (int)$_POST['prix'];//definir les variables
    $fonds = (int)$_POST['fonds'];
    $message = "";
    
$fondsmin = $prix*0.2;

$pret = $prix-$fonds;

$rang1 = $pret*0.2;

$rang2 = $pret*0.8;

$interet1 = $rang1*0.035;

$interet2 = $rang2*0.025;

 /*  
    if ($fonds > ($prix*0.2) {
        $message = "ok";} else {$message = "Vous ne disposez pas des 20% minimum de fonds propres nécessaires à l'acquisition de l'objet immobilier";}
    if ($fonds >|& ($prix*0.5) {message
        $message = " Somme prêtée au taux unique du second rang" ;}
    if ($fonds > $prix) {
        $message = "Montant de l'emprunt: $prix <br> Montant du premier rang: $prix*0.2 <br> Montant du second rang: $prix*0.8 <br> Intérêts du premier rang à un taux de 3.5%: ($prix*0.2)*0.35 <br> Intérêts du second rang à un taux de 2.5% = ($prix*0.8)*0.25 <br>"; }
*/

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Calcul d'intérêts</title>
</head>
<body>

    <?= if($fonds > $fondsmin){
        $message= "ok" ;} else { if?>

</body>
</html>
