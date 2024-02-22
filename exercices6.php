<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
    <?php

function elementsSansDoublons($tableau) {
    // Compter le nombre d'occurrences de chaque élément
    $occurrences = array_count_values($tableau);

    // Tableau pour stocker les éléments sans doublons
    $resultat = [];

    // Parcourir le tableau initial
    foreach ($tableau as $element) {
        // Vérifier s'il n'y a qu'une seule occurrence de l'élément
        if ($occurrences[$element] === 1) {
            // Ajouter l'élément au tableau sans doublons
            $resultat[] = $element;
        }
    }

    return $resultat;
}

// Exemple d'utilisation
$tableau = [1, 2, 2, 3, 4, 4, 5, 6];

// Appeler la fonction et afficher le résultat
$resultat = elementsSansDoublons($tableau);
echo "Les éléments sans doublons sont : [" . implode(', ', $resultat) . "]\n";

?>

    </body>
</html>