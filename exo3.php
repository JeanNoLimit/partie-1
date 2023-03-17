<h1> Exercice 3</h1>
<p>A  partir  de  la  phrase  de  l’exercice  1,  écrire  l’instruction  permettant  de  remplacer  le  mot «aujourd’hui» par le mot «demain». Afficher l’ancienne et la nouvelle phrase.</p>
<h2>résultat</h2>

<?php
$w1="aujourd'hui";
$w2="demain";
$str="Notre formation DL commence aujourd'hui";

echo $str. "<br>";
echo str_replace($w1,$w2, $str); 
?>