<h1>Exercice </h1>
<P>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.<br>
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);
</P>
<H2>Résultat</H2>


<?php


$nomsInput = ["Nom","Prénom","Ville"];

echo afficherInput($nomsInput);

// faire attention entre ce que l'on veut afficher une fois à mettre en dehors de la bouchle et ce que l'on veut afficher plusieurs fois à mettre dans la boucle
function afficherInput($nomsInput){
    $resultat = "<form>";
    foreach ($nomsInput as $champs) {
        $resultat .= "<label>$champs<br>
                       <input type='text' name=$champs/>
                      </label><br>";  
    }
    $resultat .= "</form>"; 
    return $resultat;               
}


?>