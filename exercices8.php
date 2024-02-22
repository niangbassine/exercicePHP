<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
        <?php
        // Définition de la fonction pour calculer la médiane
function calculerMediane($tableau) {
    // Tri du tableau
    sort($tableau);
    // Obtention de la longueur du tableau
    $length = count($tableau);
    // Calcul de l'indice médian
    $middle = floor(($length - 1) / 2);
   
    // Vérification si le tableau a une longueur paire ou impaire
    if ($length % 2 == 0) {
    // Retourne la moyenne des deux valeurs médianes pour une longueur paire
    return ($tableau[$middle] + $tableau[$middle + 1]) / 2;
    } else {
    // Retourne la valeur médiane pour une longueur impaire
    return $tableau[$middle];
    }
   }
   
   // Définition du tableau d'entrée
   $tableauExercice8 = array(4, 2, 7, 1, 5);
   // Appel de la fonction et affichage du résultat
   $resultatExercice8 = calculerMediane($tableauExercice8);
   echo "Médiane du tableau : " . $resultatExercice8;
   
         ?>
    </body>
</html>