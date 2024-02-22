<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP-PHP</title>
    </head>
    <body>
		<?php 
		function rotationDroite($tableau, $positions) {
			// Obtention de la longueur du tableau
			$length = count($tableau);
		
			// Calcul du nombre d'éléments à déplacer
			$positions = $positions % $length;
		
			// Utilisation de array_splice pour effectuer la rotation
			array_splice($tableau, 0, 0, array_splice($tableau, -$positions));
		
			return $tableau;
		}
		
		// Exemple d'utilisation
		$tableauOriginal = [1, 2, 3, 4, 5];
		$positionsRotation = 2;
		$tableauApresRotation = rotationDroite($tableauOriginal, $positionsRotation);
		
		// Affichage du résultat sans utiliser implode
		echo "Tableau original : ";
		foreach ($tableauOriginal as $element) {
			echo $element . ", ";
		}
		echo "\n";
		
		echo "Tableau après rotation de $positionsRotation positions à droite : ";
		foreach ($tableauApresRotation as $element) {
			echo $element . ", ";
		}
		echo "\n";
		?>
	</body>
</html>