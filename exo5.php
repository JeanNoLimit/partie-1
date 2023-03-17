<h1> Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<H2>Résultat</H2>

<?php

function conversion($fr)
{
    $euro=$fr/6.55957;
    $euro=number_format($euro,2);
    echo "Montant en francs : ". $fr . "<br>" . $fr . " Francs = ". $euro . " €" ;  
}
conversion(100);
?>