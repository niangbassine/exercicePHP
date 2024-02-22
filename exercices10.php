<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-PHP</title>
</head>
<body>
<?php
// Fonction pour déterminer si le patient est atteint de la COVID-19
function verifierCovid19($symptomes, $facteursDeRisque) {
    // Vérifier les symptômes
    $symptomesCovid = array("fièvre", "toux", "difficultés respiratoires");
    $symptomesCommuns = array_intersect($symptomes, $symptomesCovid);

    // Vérifier les facteurs de risque
    $facteursDeRisqueCovid = array("voyage récent", "contact avec un cas confirmé");
    $risque = !empty(array_intersect($facteursDeRisque, $facteursDeRisqueCovid));

    // Déterminer le résultat
    if (!empty($symptomesCommuns) || $risque) {
        return "Le patient présente des symptômes de la COVID-19 ou a des facteurs de risque. Consultez un professionnel de la santé.";
    } else {
        return "Le patient ne semble pas présenter de symptômes de la COVID-19. Suivez les précautions recommandées.";
    }
}

// Exemple d'utilisation
$patientSymptomes = array("fièvre", "maux de tête");
$patientFacteursDeRisque = array("voyage récent", "contact avec un cas confirmé");

$resultat = verifierCovid19($patientSymptomes, $patientFacteursDeRisque);
echo $resultat;
?>

</body>
</html>