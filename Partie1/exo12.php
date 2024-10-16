<h1>Exercice 12</h1>
<P>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de lanque associée 
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective
</P>
<H2>Résultat</H2>


<?php


$personnes = [
    "Mickaël" => "Francais",
    "Virgile" => "espagnol",
    "Marie-Claire" => "anglais",
];


$salutation = "";

function saluer($personnes) {
    ksort($personnes); // pour ranger les salutations par ordre alphabétique
    foreach ($personnes as $prenom => $langue) {
        switch ($langue) {
            case 'Francais':
                $salutation = "Bonjour";
                break;
            case 'espagnol':
                $salutation = "Holla";
                break;
            case 'anglais':
                $salutation = "Hello";
                break;
            default:
                $salutation = '';
        };

        echo "$salutation, $prenom <br>";
    }
}


saluer($personnes);





?>