
<h1>Exercice 1</h1>
<p>Soit la phrase «Notre formation DL commence aujourd'hui».<br>Ecrire un algorithme permettant de compter le nombre de caractèrescontenus dans cette phrase (espaces inclus).</p>
<h2>résultat :</h2>

<?php 
$str="Notre formation DL commence aujourd'hui";

echo "cette phrase contient : ". strlen($str) . " charactères.";

?>

<h1>Exercice 2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
<h2>résultat</h2>

<?php 

echo "cette phrase contient : " . str_word_count($str) . " mots "; 

?>

<h1> Exercice 3</h1>
<p>A  partir  de  la  phrase  de  l’exercice  1,  écrire  l’instruction  permettant  de  remplacer  le  mot «aujourd’hui» par le mot «demain». Afficher l’ancienne et la nouvelle phrase.</p>
<h2>résultat</h2>

<?php
$w1="aujourd'hui";
$w2="demain";

echo $str. "<br>";
echo str_replace($w1,$w2, $str); 
?>

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
palindrome ("Engage le jeu que je le gagne");
?>

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

<h1>Exercice 11</h1>
<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>
<h2>Resultat</h2>

<?php

    $marques=["Peugeot", "Renault", "BMW", "Mercedes"] ;
    //count = compte le nombre d'éléments du tableau
    echo "Il y a ". count($marques). " marques de voitures dans le tableau : <br>";
    foreach ($marques as $marque) {
        echo "$marque <br>";
      }
    
?>

<h1> Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)</p>
<h2>Résultat</h2>

<?php
$lang =[
    
    'Virgile' => 'ESP',
    'Marie-Claire' => 'ENG',
    'Mickeäl' => 'FRA',
];

function hello (array $languages) {
    $result="";
    foreach ($languages as $prenom => $lang){
        if ($lang=='FRA'){
            
            $result.='Bonjour ' .$prenom. '<br>';
        }
        if ($lang=='ENG'){
            $result.='Hello ' . $prenom. '<br>';
        }
        if ($lang=='ESP'){
            $result.='Hola ' . $prenom . '<br>';
        }
    }
return $result;
}

echo hello($lang);


?>

<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>
<h2>Résultat</h2>

<?php

$notes=[10,12,8,19,3,16,11,13,9];

function moyenne ($notes){
    //array sum permet de faire la somme des notes.
    $somme=array_sum($notes);
    $nbreNotes=count($notes);
    echo "Les notes obtenues par l'élève sont : ";
    foreach ($notes as $note) {
        echo "$note ";
    }
    //round permet d'arrondir le résultat
    $moyenne= " <br> Sa moyenne générale est donc de : " . round($somme/$nbreNotes,2);
    return $moyenne;
}

echo moyenne($notes);
?>

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

<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>
<h2>Résultat</h2>

<?php

class  Personne {
    private $_nom;
    private $_prenom;
    private $_dateNaissance;

    public function age($_dateNaissance){
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
        return $diff->format('%y');
    }

}



?>