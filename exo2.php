<h1>Exercice 2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
<h2>résultat</h2>

<?php 
$str="Notre formation DL commence aujourd'hui";
echo "cette phrase contient : " . str_word_count($str) . " mots "; 

?>