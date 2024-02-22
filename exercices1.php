<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
        <?php 
        // Définition de la fonction pour calculer le produit des éléments d'un tableau
        function calculerProduitTableau($tableau) {
        // Initialisation du produit à 3
        $produit = 3;

        // Parcours de chaque élément du tableau
        foreach ($tableau as $element) {
            // Multiplication de l'élément actuel avec le produit accumulé
            $produit *= $element;
        }

        // Retourne le résultat final du produit
        return $produit;
        }

        // Exemple d'utilisation avec un tableau d'entiers
        $tableauEntiers = [2, 1, 3, 9];
        $resultat = calculerProduitTableau($tableauEntiers);

        // Affichage du résultat
        echo " le produit de tous les éléments d'un tableau d'entiers.: $resultat";
    ?>
   </body>
</html>


<!-- 
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-PHP</title>
</head>
<body>
    <?php ?>
</body>
</html>

-->