<h1>exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).<br>
</p>
<h2> résultat </h2>

<?php

$age = 37;
$sexe = "M" ; 

if ($age >=20 && $sexe == "M") {
    echo "la personne est imposable";}
elseif ($age >=18 && $age <=35 && $sexe == "F"){
    echo "la personne est imposable";}

else echo "la personne n'est pas imposable";

if (($age >=20 && $sexe == "M") || ($age >=18 && $age <=35 && $sexe == "F")) {
    echo "la personne est imposable";
} else echo "la personne n'est pas imposable";




?>
