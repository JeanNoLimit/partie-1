<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
<h2>Résultat</h2>

<?php

function calcAge($dateNaissance, $dateCourante){
    $dNaisTemp= DateTime::createFromFormat('d/m/Y', $dateNaissance);
    $dCourtemp= DateTime::createFromFormat('d/m/Y', $dateCourante);
    $diff = date_diff($dCourtemp, $dNaisTemp);
    $display= "Ci la date courante est le " . $dateCourante . " et la date de naissance le " . $dateNaissance . "<br>";
    $display.= "l'age de la personne est de : " . $diff->format('%y') . " ans ". $diff->format('%m') . " mois et " . $diff->format('%d') . " jours.";
    return $display;

}
echo calcAge("17/01/1985", "21/05/2018");

?>