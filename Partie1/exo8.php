<h1> exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication par 8 <br></p>
<h2>résultat</h2>

<?php

$nb = 8;

    echo "table de ". $nb. " :<br>";
for($i=1;$i<=10;$i++) {
    $resultat = $i* $nb;
    echo $i . " x " . $nb . " = " . $resultat . "<br>";
}

echo "table de ". $nb. " :<br>";

$a = 1;
while($a <= 10) {
    $resultat = $a*$nb;
    echo $a. " x ". $nb. " = ". $resultat. "<br>";
    $a++;
}


















?>