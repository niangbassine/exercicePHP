<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
    <?php

// Deux tableaux d'entiers
$tableau1 = [1, 2, 3, 4, 5];
$tableau2 = [3, 4, 5, 6, 7];

// Tableau pour stocker les éléments communs
$elementsCommuns = [];

// Parcourir le premier tableau
foreach ($tableau1 as $element1) {
    // Parcourir le deuxième tableau
    foreach ($tableau2 as $element2) {
        // Vérifier si l'élément du premier tableau est égal à l'élément du deuxième tableau
        if ($element1 == $element2) {
            // Ajouter l'élément commun au tableau
            $elementsCommuns[] = $element1;
            // Sortir de la boucle interne pour éviter les duplications
            break;
        }
    }
}

// Afficher les éléments communs
echo "Les éléments communs sont : [", implode(', ', $elementsCommuns), "]\n";

?>

    </body>
</html>