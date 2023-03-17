<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>
<h2>Résultat</h2>

<?php

$notes=[10,12,8,19,3,16,11,13,9];

function moyenne ($notes){
    //array sum permet de faire la somme des notes.
    $somme=array_sum($notes);
    $nbreNotes=count($notes);
    echo "Les notes obtenues par l'élève sont : ";
    foreach ($notes as $note) {
        echo "$note ";
    }
    //round permet d'arrondir le résultat
    $moyenne= " <br> Sa moyenne générale est donc de : " . round($somme/$nbreNotes,2);
    return $moyenne;
}

echo moyenne($notes);
?>