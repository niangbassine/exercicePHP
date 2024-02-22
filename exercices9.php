<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
        <?php 
           function calculerFrequenceCaracteres($chaine) {
               $frequence = array();
           
               // Convertir la chaîne en tableau de caractères
               $caracteres = str_split($chaine);
           
               // Parcourir chaque caractère et calculer la fréquence
               foreach ($caracteres as $caractere) {
                   // Ignorer les espaces et autres caractères spéciaux si nécessaire
                   if (!ctype_space($caractere) && ctype_alpha($caractere)) {
                       if (isset($frequence[$caractere])) {
                           // Si le caractère existe déjà dans le tableau, incrémenter la fréquence
                           $frequence[$caractere]++;
                       } else {
                           // Si le caractère n'existe pas encore, initialiser la fréquence à 1
                           $frequence[$caractere] = 1;
                       }
                   }
               }
           
               // Retourner le tableau de fréquences
               return $frequence;
           }
           
           // Exemple d'utilisation
           $chaine = "Bonjour, comment ça va ?";
           $resultat = calculerFrequenceCaracteres($chaine);
           
           // Afficher les résultats
           foreach ($resultat as $caractere => $frequence) {
               echo "Le caractère '$caractere' apparaît $frequence fois.<br>";
           }
           
           ?>
    </body>
</html>
