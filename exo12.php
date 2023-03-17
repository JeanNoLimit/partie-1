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