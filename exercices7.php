<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
        <?php 
        // Définition de la fonction pour la concaténation des chaînes
function concatenationChaines($tableau) {
    // Utilisation de la fonction implode pour concaténer les chaînes
    return implode("", $tableau);
   }
   
   // Définition du tableau d'entrée
   $tableauExercice7 = array("Bonjour", " ", "c'est", " ", "le monde", " ", "des developpeuses.");
   // Appel de la fonction et affichage du résultat
   $resultatExercice7 = concatenationChaines($tableauExercice7);
   echo "Résultat de la concaténation : " . $resultatExercice7;
   
        ?>
    </body>
</html>