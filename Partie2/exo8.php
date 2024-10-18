<h1>Exercice 8 </h1>
<P>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :
repeterImage($url,4);

</P>
<H2>Résultat</H2>


<?php



$url ="http://my.mobirise.com/data/userpic/764.jpg";
$n = 4;

echo repeterImage($url,$n);

function repeterImage($url,$n){
    $i = 1;
    while ($i <= $n) {
        echo "<img src='$url' />";
        $i++;
    }   
};
//  ne pas oublier d'incrémenter $i++; sinon boucle infinie



// possible avec une boucle for
// function repeterImage($url,$n){
    
//     for ($i = 1; $i <= $n; $i++) {
//         echo "<img src='$url' />";
        
//     }   
// };




// echo str_repeat("<img src='http://my.mobirise.com/data/userpic/764.jpg'/>", 4);



?>







