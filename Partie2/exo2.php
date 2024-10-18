<h1>Exercice 2 </h1>
<P>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
<br>
</P>
<H2>Résultat</H2>


<?php

$capitales =[
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
];

echo afficherTableauHTML($capitales);



function afficherTableauHTML($capitales){
    ksort($capitales);
    $resultat = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                        </tr>
                    </thead>  
                  <tbody>";
    foreach ($capitales as $pays => $capitale) {
        $resultat .="<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
                  }     
    $resultat .= "</tbody>
                </table>";        
                
    return $resultat;


}







?>