<h1>Exercice 6</h1>
<P>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)<br>
</P>
<H2>Résultat</H2>


<?php

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



?>