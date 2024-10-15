<h1>Exercice 1</h1>
<P>Soit la phrase " Notre formation DL commence aujourd'hui". <br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus)<br>
</P>
<H2>Résultat</H2>


<?php

// exercice 1
$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen($phrase);

echo "la phrase «$phrase » contient $longueur caractères<br>";
echo "la phrase «$phrase » contient ". strlen($phrase). "caractères<br>";

// exercice 2
$nb_mots = str_word_count($phrase);

echo "la phrase «$phrase » contient $nb_mots mots<br>";

// exercice 3
$ancienne_phrase = "Notre formation DL commence aujourd'hui";
$nouvelle_phrase = str_replace("aujourd'hui", "demain", $ancienne_phrase);

echo "Ancienne phrase : " . $ancienne_phrase . "<br>";
echo "Nouvelle phrase : " . $nouvelle_phrase . "<br>";



// exercice 4
$phrase1 = "engage le jeu que je le gagne";

function est_palindrome($phrase1) {
    $phrase1 = str_replace(' ', '', $phrase1);
    $inversion = strrev($phrase1);
    return $phrase1 === $inversion;
}

if (est_palindrome($phrase1)) {
    echo "La phrase «$phrase1 » est un palindrome.<br>";
} else {
    echo "";
}

// exercice 5
define('TAUX_CONVERSION', 6.55957);

function convertir_en_euros($valeur_francs) {
    $valeur_euros = $valeur_francs / TAUX_CONVERSION;

    return round($valeur_euros, 2);
}

$valeur_francs = 100;
$valeur_euros = convertir_en_euros($valeur_francs);
echo "Montant en francs : $valeur_francs<br>";
echo $valeur_francs . " francs = " . $valeur_euros . " euros. <br>";

// exercice 6
$nb_articles = 5;
$prix_HT = 9.99;
$total_HT = $nb_articles * $prix_HT;
$taux_TVA = 0.20;
$total_TTC = $nb_articles * $prix_HT * (1+ $taux_TVA);

echo "Prix unitaire de l'article : $prix_HT €<br>";
echo "quantité : $nb_articles<br>";
echo "Taux de TVA : $taux_TVA<br>";
echo "Le montant de la facture à régler est de : $total_TTC €<br>";

// exercice 7
$age = 10;


if ($age >= 12) {
    $resultat = "Cadet <br>";
}
elseif ($age >= 10) {
    $resultat = "Minine <br>";
}
elseif ($age >= 8) {
    $resultat = "Pupille<br>";
}
elseif ($age >= 6) {
    $resultat = "Poussin<br>";
}
else {$resultat = "merci de préciser une âge supérieur à 6 ans<br>";}
    
echo "L'enfant qui a $age appartient à la catégorie $resultat";


?>