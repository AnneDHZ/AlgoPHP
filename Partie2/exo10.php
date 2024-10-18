<h1>Exercice 10 </h1>
<P>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).<br>
</P>
<H2>Résultat</H2>


<?php

$nomsInput = ["Nom","Prénom","Ville"];
$elements = ["Masculin", "Féminin", "autre"];
$formation = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

echo afficherInput($nomsInput);
echo afficherRadio($elements);
echo genererCheckbox($formation);


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



function afficherRadio($elements){
        $resultat ="<form>";

      foreach ($elements as $choix){
            $resultat .= "<div>
                            <input type='radio' id ='$choix' name='sexe'/>
                            <label for='$choix'>$choix</label>
                           </div> ";  //les <div> font office de <br>
      }
      $resultat .="</form>";
        return $resultat;                                    
};



function genererCheckbox($elements){
        $resultat ="<form>
                    <legend>«Quelle formation voulez-vous intégrer?»";

      foreach ($elements as $choix){
            $resultat .= "<div>
                            <input type='checkbox' id ='$choix' name='$choix'/>
                            <label for='$choix'>$choix</label>
                           </div> ";  //les <div> font office de <br>
      }
      $resultat .="</legend>
                    </form>";
        return $resultat;                                    
};


?>