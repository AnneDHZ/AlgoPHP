<h1>Exercice 2</h1>
<P>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci. <br>
</P>
<H2>Résultat</H2>


<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nb_mots = str_word_count($phrase);

echo "la phrase «$phrase » contient $nb_mots mots<br>";

?>