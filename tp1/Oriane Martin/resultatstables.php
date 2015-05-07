<!-- Nom & Prénom: Martin Oriane
     Classe: SM-MI2a
     Sujet: Test de PHP sur les tables d'additions et de multiplications
     Commentaires: Je n'ai pas réussi à afficher les calculs selon la base du chiffre donné.
-->

<?php

    //Déclaration des variables
    $chiffre = filter_input(INPUT_POST, 'chiffre', FILTER_SANITIZE_NUMBER_FLOAT);
    //Déclaration du message d'erreur
    if($chiffre<2 || $chiffre>16){
        echo '<a href="javascript:history.back()">Le chiffre doit être compris entre 2 et 16 uniquement. Réessayer</a>';} 
    else {

?>

    <!DOCTYPE html>
    <html lang="fr">
        
        <head>
            <meta charset="UTF-8">
            <title>Test de PHP : Table de multiplications et additions</title>
        </head>
        
        <body>

            <h1> Tables de multiplications et additions</h1>
            <h2>Sur la base du chiffre donné, soit: <?php echo $chiffre ?> </h2>
            <h3>Table d'additions</h3>
            
            <!-- Création de la table d'addition -->
            <table border="1">
                
                <thead>
                    <!-- Création de la colonne horizontale de titre -->
                    <th>
                        <?php	for ($j=1; $j<=$chiffre; $j++) { ?>
                                    <td style="background:#999999;">
                                    <?php echo $j; ?></td>
                        <?php	} ?>
                    </th>
                    
                </thead>
                
                <tbody>
                    <?php
                        // Création des lignes suivantes
                        for ($i=1; $i<=$chiffre; $i++) { 
                    ?>
                        <tr>
                    <?php		for ($j=1; $j<=$chiffre; $j++) {
                                    // Création de la colonne de gauche
                                    if ($j==1) { 
                    ?>		            <td style="background:#999999;"><?php echo $i; ?></td>
                    <?php		    	}
                                    // Création des colonnes suivantes
                                    if ($i==$j) {
                    ?>		            <td>
                    <?php       	} else {
                    ?>		            <td>
                    <?php       	}
                                    // Données affichées dans la cellule
                                    echo ((base_convert($i, 10, $chiffre))+(base_convert($j, 10, $chiffre)));
                    ?>      		</td>
                    <?php	} 
                    ?>
                        </tr>
                    <?php	$j=1;
                            }
                    ?>
                </tbody>
                
            </table>



            <h3>Table de multiplication</h3>
            <!-- Création de la table de mutliplication -->
            <table border="1">
                    
                <thead>
                    <!-- Création de la colonne horizontale de titre -->
                    <th>
                        <?php	for ($j=1; $j<=$chiffre; $j++) { ?>
                                    <td style="background:#999999;">
                                    <?php echo $j; ?></td>
                        <?php	} ?>
                    </th>
                    
                </thead>
                
                <tbody>
                    <?php
                        // Création des lignes suivantes
                        for ($i=1; $i<=$chiffre; $i++) { 
                    ?>
                        <tr>
                    <?php		for ($j=1; $j<=$chiffre; $j++) {
                                    // Création de la colonne de gauche
                                    if ($j==1) { 
                    ?>		            <td style="background:#999999;"><?php echo $i; ?></td>
                    <?php		    	}
                                    // Création des colonnes suivantes
                                    if ($i==$j) {
                    ?>		            <td>
                    <?php       	} else {
                    ?>		            <td>
                    <?php       	}
                                  // Données affichées dans la cellule
                                    echo ((base_convert($i, 10, $chiffre))*(base_convert($j, 10, $chiffre)));
                    ?>	         </td>
                    <?php	} 
                    ?>
                        </tr>
                    <?php	$j=1;
                            }
                    ?>
                </tbody>
            </table>

        </body>
    </html>
<?php ;} ?>
