<h1>Exercice 1</h1>
<P>Soit la phrase " Notre formation DL commence aujourd'hui". <br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus)<br>
</P>
<H2>Résultat</H2>


<?php


$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen($phrase);

echo "la phrase «$phrase » contient $longueur caractères<br>";
echo "la phrase «$phrase » contient ". strlen($phrase). "caractères<br>";