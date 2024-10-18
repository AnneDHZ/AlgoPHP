<h1>Exercice </h1>
<P>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</P>
<H2>Résultat</H2>


<?php



$elements = ["choix 1", "choix 2", "choix 3"];
    

 echo genererCheckbox($elements);


function genererCheckbox($elements){
        $resultat ="<form>";

      foreach ($elements as $choix){
            $resultat .= "<div>
                            <input type='checkbox' id ='$choix' name='$choix'/>
                            <label for='$choix'>$choix</label>
                           </div> ";  //les <div> font office de <br>
      }
      $resultat .="</form>";
        return $resultat;                                    
};


// penser à mettre } de fermeture de boucle AVANT $resultat .="</form>";
// puis ensuite le return

   

   
?>

