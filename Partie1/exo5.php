<h1>Exercice 5</h1>
<P>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.<br>
</P>
<H2>Résultat</H2>


<?php



define('TAUX_CONVERSION', 6.55957);

function convertir_en_euros($valeur_francs) {
    $valeur_euros = $valeur_francs / TAUX_CONVERSION;

    return round($valeur_euros, 2);
}

$valeur_francs = 100;
$valeur_euros = convertir_en_euros($valeur_francs);
echo "Montant en francs : $valeur_francs<br>";
echo $valeur_francs . " francs = " . $valeur_euros . " euros. <br>";

?>