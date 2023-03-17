<h1> Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>
<h2>Résultat</h2>

<?php
function total($prix, $qte, $tva){
    $tva=$tva/100;
    $tvaTotal=$prix*$qte*$tva;
    $total=($prix*$qte) + $tvaTotal;

    echo "Prix unitaire de l'article : " . $prix . " € <br>";
    echo "quantité : " . $qte . "<br>";
    echo "Taux de TVA :" . $tva . "<br>";
    echo "Le montant de la facture à régler est de : " . $total . " € <br>";
}

total(9.99, 5, 20);


?>