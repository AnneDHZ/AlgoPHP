<h1>Exercice 3</h1>
<P>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase. <br>
</P>
<H2>Résultat</H2>


<?php



$ancienne_phrase = "Notre formation DL commence aujourd'hui";
$nouvelle_phrase = str_replace("aujourd'hui", "demain", $ancienne_phrase);

echo "Ancienne phrase : " . $ancienne_phrase . "<br>";
echo "Nouvelle phrase : " . $nouvelle_phrase . "<br>";




?>