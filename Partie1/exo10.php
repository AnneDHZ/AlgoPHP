<h1>Exercice 10 </h1>
<p> A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10€ et de 5€, de pièces de 2€ et 1€.</p>
<h2>résultat</h2>

<?php

$montant = 152;
$somme_versee = 200;
$rendu = $somme_versee-$montant;


echo "Montant à payer : $montant €<br>";
echo "montant à verser : $somme_versee €<br>";
echo "reste à payer : $rendu €<br>";
echo "*********************<br>";


echo "Rendue de monnaie : <br>";
$billets10 = intdiv($rendu, 10);
$rendu = ($rendu - $billets10 * 10);
echo "$billets10 billets de 10€ - ";


$billets5 =intdiv($rendu, 5);
$rendu = ($rendu - $billets5 * 5);
echo "$billets5 billets de 5€ - ";

$pieces2 =intdiv($rendu, 2);
$rendu = ($rendu - $pieces2 * 2);
echo "$pieces2 pièces de 2€ - ";

$pieces1 =intdiv($rendu, 1);
$rendu = ($rendu - $pieces1 * 1);
echo "$pieces2 pièces de 1€ - ";



?>