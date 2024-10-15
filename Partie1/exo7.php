<h1>Exercice 7</h1>
<P>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
Poussin : entre 6 et 7 ans<br>
Pupille : entre 8 et 9 ans<br>
Minime : entre 10 et 11 ans<br>
Cadet : à partir de 12 ans<br>
Si la catégorie n’est pas gérée, merci de le préciser.<br>
</P>
<H2>Résultat</H2>


<?php


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