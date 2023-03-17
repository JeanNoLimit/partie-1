<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</p>
<h2>Résultat</h2>

<?php 
function multiply ( int $nbre) : string
{
    $display = 'table de ' .$nbre . ' : <br>';
    for ($i = 1; $i<=10; $i++){
        $ttl=$nbre*$i;
        $display .=  $i . ' x ' . $nbre . ' = ' . $ttl . '<br>'; 
        // équi vaut à $display =   $display . $i . ' x ' . $nbre . ' = ' . $ttl . '<br>'; 
    }
    return $display;
}
function multiply2 (int $nbre) : string
{
    $display = 'table de ' .$nbre . ' : <br>';
    $i=0;
    while ($i<10){
        $ttl=$nbre*$i;
        $display .=  $i . ' x ' . $nbre . ' = ' . $ttl . '<br>'; 
        $i++;
    }
    return $display;
}
echo multiply (8);
echo multiply (2);
?>