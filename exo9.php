<h1>Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe <br>.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</p>
<h2>résultat</h2>

<?php

function imposable (int $age, string $sexe) {
    $display = 'Age : '. $age . '<br>' . 'Sexe : '. $sexe. '<br>';
    if ($sexe=='F' && $age>=18 && $age<=35 || $sexe=='M' && $age>=20){
        $display .= "La personne est imposable <br>";
    }
    else {
        $display .= "La personne n'est pas imposable <br>";
    }
    return $display;
}

echo imposable (18, 'F');
echo imposable (20, 'M');
echo imposable (40, 'F');


?>