<h1>Exercice </h1>
<P>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
<br>
</P>
<H2>Résultat</H2>


<?php

$capitales =[
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid",
];



    echo afficherTableauHTML($capitales);

// utiliser la capitale pour la colonne capitale et dans le lien wiki puisque le début est identique pour tous les liens

function afficherTableauHTML($capitales){
    asort($capitales);
    $resultat = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                            <th>Lien Wiki</th>
                        </tr>
                    </thead>  
                  <tbody>";
                  // tous les éléments que l'on veut 1 fois doivent être en dehors de la boucle foreach
    foreach ($capitales as $pays => $capitale) {
        $resultat .="<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                        <td><a target='blank' href='https://fr.wikipedia.org/wiki/$capitale'>Lien wiki</a></td>  
                    </tr>";
                  }    // on ferme la boucle 
    $resultat .= "</tbody>    
                </table>";        // elements qui ferme le tableau (en dehors de la boucle)
                
    return $resultat;


}

// pour faire un tableau HTML dans PHP avec plus de 2 colonnes et des liens http différents

// définir le tableau de tableau
// $capitales =[
//     "France" => [
//         "capitale" => "Paris", 
//         "site" => "http://www.paris.fr",
//         "population" => 3534545
//     ],
//     "Allemagne" => [
//         "capitale" => "Berlin", 
//         "site" => "http://www.berlin.de",
//         "population" => 45445564
//     ]
// ];



// function afficherTableauHTML($capitales){
//     asort($capitales);
//     $resultat = "<table border=1>
//                     <thead>
//                         <tr>
//                             <th>Pays</th>
//                             <th>Capitale</th>
//                             <th>Lien Wiki</th>
//                             <th>Population</th>
//                         </tr>
//                     </thead>  
//                   <tbody>";
//     foreach ($capitales as $pays => $tableau) {
//         $resultat .="<tr>
//                         <td>".mb_strtoupper($pays)."</td>
//                         <td>".ucfirst($tableau["capitale"])."</td>
//                         <td><a target='blank' href='".$tableau['site']."'>Lien wiki</a></td>
//                         <td>".$tableau["population"]."</td>
//                     </tr>";
//                   }     
//     $resultat .= "</tbody>
//                 </table>";        
                
//     return $resultat;


// }


 ?>