<h1>Exercice 4</h1>
<P>Ecrire un algorithme permettant de savoir si une phrase est palindrome<br>
</P>
<H2>Résultat</H2>


<?php



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


?>