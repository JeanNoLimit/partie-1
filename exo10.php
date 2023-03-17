<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>
<h2>Résultat</h2>

<?php 

function rendu (int $somme, int $montant) {
    $reste = $somme - $montant ;
    echo 'Montant à payer : ' . $montant . ' € <br>';
    echo 'Montant versé : ' . $somme . ' € <br>';
    echo 'Montant à rendre : '. $reste. ' € <br>';
    echo '************************************************** <br>';
    $i=0;
    $nbre10=0;
    $nbre5=0;
    $nbre2=0;
    $nbre1=0;
    while ($reste > 0){
        if ($reste>= 10){
            $nbre10++;
            $reste-=10;
        }
        elseif($reste>=5){
            $nbre5++;
            $reste-=5;
        }
        elseif($reste>=2){
            $nbre2++;
            $reste-=2;
        }
        elseif($reste>=1){
            $nbre1++;
            $reste-=1;
        }

    }
    echo 'rendre ' . $nbre10 . ' billets de 10€, ' . $nbre5 . ' billets de 5€, ' . $nbre2. ' pièces de 2€, '. $nbre1 . ' pièces de 1€.' ;
}

rendu (200, 152)

?>