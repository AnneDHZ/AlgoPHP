<h1>Exercice 11</h1>
<P>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu ( une marque par ligne). 
    Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau. <br>
</P>
<H2>Résultat</H2>


<?php

$marques_voitures = ["Peugeot", "Renault", "BMW", "Mercedes"];

echo "il y a ". count($marques_voitures). " marques de voitures dans le tableau :<br> ";

echo "<ul>";
foreach ($marques_voitures as $marque) {
    echo "<li>". $marque. "</li>";
};

echo "</ul>";



?>