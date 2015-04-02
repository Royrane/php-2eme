<?php
/* ---------------------------------------------------------------------
 *                        Exercice 2-002                            
 * Nom du fichier: ajout_utilisateur_post.php 
 * Auteur: PKR 
 * Date: Janvier 2008
 * Description: Ce script affiche un formulaire d'inscription                              
 * ---------------------------------------------------------------------
 */
// Variables
// 
// on récupère les informations du l'utilisateur
$login            = htmlspecialchars($_POST['login']);
$passwd           = htmlspecialchars($_POST['passwd']);
$presentation     = htmlspecialchars($_POST['presentation']);
$majeur           = (int) $_POST['majeur'];
$type             = $_POST['type'];
$lettre_nouvelle  = (int) $_POST['lettre_nouvelle'];
$membre_soutien   = (int) $_POST['membre_soutien'];

if($login==$passwd){echo "Le login et le password ne peuvent pas être les mêmes!";};
if((mb_strlen($login))<3){echo "le login est trop court! <br>";};
if((mb_strlen($passwd))<5){echo "Le mot de pass est trop court! <br>";};
if(empty($presentation)){ echo "La présentation ne peut pas être vide <br>";} else {trim($presentation);};
if(empty($type)){echo 'Le type ne peut pas être vide';};
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

echo "Login: $login <br>
Mot de passe: $passwd <br>
Majeur: $majeur <br>
Type: $type <br>
Lettre de nouvelle: $lettre_nouvelle <br>
Membre soutien: $membre_soutien<br>
Présentation:<br> $presentation";

?>

</body>
</html>
