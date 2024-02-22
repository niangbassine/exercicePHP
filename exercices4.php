<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
    <?php

// Fonction pour compter le nombre de voyelles dans une chaîne
function compterVoyelles($chaine) {
    // Convertir la chaîne en minuscules pour éviter les problèmes de casse
    $chaine = strtolower($chaine);
    
    // Définir les voyelles dans un tableau
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

    // Initialiser le compteur de voyelles à zéro
    $nombreVoyelles = 0;

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        // Vérifier si le caractère actuel est une voyelle
        if (in_array($chaine[$i], $voyelles)) {
            // Incrémenter le compteur de voyelles
            $nombreVoyelles++;
        }
    }

    // Retourner le nombre total de voyelles dans la chaîne
    return $nombreVoyelles;
}

// Tableau de chaînes de caractères
$tableauChaines = ["Bonjour", "OpenAI", "Programmation", "PHP"];

// Parcourir chaque élément du tableau
foreach ($tableauChaines as $chaine) {
    // Appeler la fonction compterVoyelles pour chaque chaîne et afficher le résultat
    echo "Nombre de voyelles dans '$chaine' : " . compterVoyelles($chaine) . "<br>";
}

?>
  </body>
</html>