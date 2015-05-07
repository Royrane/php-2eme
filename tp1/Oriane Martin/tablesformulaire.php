<!-- Nom & Prénom: Martin Oriane
     Classe: SM-MI2a
     Sujet: Test de PHP sur les tables d'additions et de multiplications
     Commentaires: Je n'ai pas réussi à afficher les calculs selon la base du chiffre donné. J'ai travaillé sur ce projet avec Vincent Magnenat.
-->

<!DOCTYPE html>
<html lang="fr" >
    
	<head>
		<meta charset="utf-8">
		<title>Test de PHP : Table de multiplications et additions</title>
	</head>
    
	<body>
		<h1> Table de multiplication et addition </h1><br>
		<p> Merci de rentrer un chiffre entre 2 et 16 uniquement afin d'établir la table de multiplication! <p>
		<form action="resultatstables.php" method="post">
			<label> Chiffre: <input type="number" name="chiffre" size="4" maxlength="2" ></label>
			<input type="submit" name="valider" value="Valider" >
		</form>
	<body>	

</html>  


