<h1>Exercice 6 </h1>
<P>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.<br>
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
</P>
<H2>Résultat</H2>


<?php


$elements = ["Monsieur","Madame","Mademoiselle"];

echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    $resultat = "<form>
                <select>";  // pas besoin de specifier d'élément quand c'est un tableau
                // mettre ce que l'on veut une seule fois => un seul menu déroulant HORS de la boucle
    
    foreach ($elements as $genre) {
        $resultat .= "<option>$genre</option>";} // mettre dans la boucle UNIQUEMENT ce que l'on veut du tableau
    
    $resultat.="</select>
                </form>"; // ne pas oublier de refermer les éléments
    return $resultat;
    } 
  

?>