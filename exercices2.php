<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
        <?php

            // Définition de la fonction supprimerDoublons
            function supprimerDoublons($tableau) {
                // Initialisation d'un nouveau tableau qui va contenir les éléments sans doublons
                $tableauSansDoublons = [];

                // Parcours de chaque élément du tableau d'origine
                foreach ($tableau as $element) {
                    // Vérification si l'élément n'est pas déjà présent dans le tableau sans doublons
                    if (!in_array($element, $tableauSansDoublons)) {
                        // Si l'élément n'est pas déjà présent, on l'ajoute au tableau sans doublons
                        $tableauSansDoublons[] = $element;
                    }
                }

                // Retourne le tableau sans doublons
                return $tableauSansDoublons;
            }

            // Exemple d'utilisation
            $tableauAvecDoublons = [1, 2, 2, 3, 4, 4, 5];
            $tableauSansDoublons = supprimerDoublons($tableauAvecDoublons);

            // Affichage du résultat avec print_r
            echo "Tableau avec doublons : \n";
            print_r($tableauAvecDoublons);

            echo "Tableau sans doublons : \n";
            print_r($tableauSansDoublons);


    ?>
</body>
</html>

