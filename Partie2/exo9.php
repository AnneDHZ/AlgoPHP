<h1>Exercice 9</h1>
<P>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Masculin","Féminin","autre").<br>
Exemple :
afficherRadio($nomsRadio);

</P>
<H2>Résultat</H2>


<?php


$elements = ["Masculin", "Féminin", "autre"];
    

 echo afficherRadio($elements);


function afficherRadio($elements){
        $resultat ="<form>";

      foreach ($elements as $choix){
            $resultat .= "<div>
                            <input type='radio' id ='$choix' name='$choix'/>
                            <label for='$choix'>$choix</label>
                           </div> ";  //les <div> font office de <br>
      }
      $resultat .="</form>";
        return $resultat;                                    
};

// problème on peut selectionner plusieurs choix...




?>