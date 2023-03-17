<H1>exercice 7</H1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge: </p>
<h2>Résultat</h2>

<?php
function categorie ($age) {
    if ($age>=6 && $age<=7){
        echo 'L\'enfant qui a ' .$age. ' ans appartient à la catégorie "Poussin" <br>'; 
    }
    elseif ($age>=8 && $age<=9){
        echo 'L\'enfant qui a ' .$age. ' ans appartient à la catégorie "Pupille" <br>'; 
    }
    elseif ($age>=10 && $age<=11){
        echo 'L\'enfant qui a ' .$age. ' ans appartient à la catégorie "Minime"<br>'; 
    }
    elseif ($age>=12){
        echo 'L\'enfant qui a ' .$age. ' ans appartient à la catégorie "cadet" <br>'; 
    }
    else {
        echo 'L\'enfant qui a ' . $age . ' ans n\'appartient à aucune catégorie <br>';
    }
}

categorie (10);
categorie (30);
categorie (1);
categorie (15);
categorie (6);

?>