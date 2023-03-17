<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Résultat</h2>

<?php

function palindrome (string $pal)
{
    $temp = str_replace(" ","",$pal);
    $temp = strtolower($temp);
    $temp2 = strrev($temp);

    if($temp==$temp2){
       echo "cette phrase est un palindrome";
    }
    else{
        echo "cette phrase n'est pas un aplindrome";
    }
    
    //echo $temp2;
    //echo $temp;
    
}