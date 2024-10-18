<h1>Exercice 1</h1>
<P> créer une fonction personnalisée permettant de transformer une chaîne de caractères passée en argument en majuscules et en rouge.<br>
Vous devez appeler la fonction comme suit : convertirMajRouge($texte)
</P>
<H2>Résultat</H2>

<style>
    .red {
        color: red;
    }
</style>

<?php

$texte = "mon texte en paramètre";
$texte1 = "autre test";

echo convertirMajRouge($texte); 
echo convertirMajRouge1($texte1);

function convertirMajRouge($texte) {
            $resultat = mb_strtoupper($texte);
            $resultat = "<p class='red'>$resultat</p>";
                         
    return $resultat;
}      

function convertirMajRouge1($texte1) {
    return "<p class='red'>".mb_strtoupper($texte1)."</p>";
}






?>