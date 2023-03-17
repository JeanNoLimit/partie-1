<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>
<h2>Résultat</h2>

<?php

class  Personne {
//attributs de la classe.
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;

//constructeur
    public function __construct(string $nom, string $prenom, string $dateNaissance){
            $this->_nom=$nom;
            $this->_prenom=$prenom;
            $this->_dateNaissance= new DateTime($dateNaissance);
        }
//methode pour déterminer l'age de la personne.
    public function calcAge(){

        $aujourdhui = new DateTime();
        $diff = $this->_dateNaissance->diff($aujourdhui);
        $diff=$diff->format('%y');
        return $diff;
    }
        

//Accesseurs (Getter)
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getAge(){
        return $this->_dateNaissance;
    }
    public function getInfos() : string
    {
        return $this->getPrenom()." ". $this->getNom()." a ".$this->calcAge(). " ans <br>";
    }
    //permet de convertir un objet en chaîne de caractères (https://www.delftstack.com/fr/howto/php/convert-object-to-string-php/)
    public function __toString(){
        return $this->getPrenom()." ". $this->getNom()." a ".$this->calcAge(). " ans <br>";
    }
}

$p1=new Personne("DUPONT","Michel","1980-02-19");
$p2=new Personne("DUCHEMIN","Alice","1985-02-17");

//On peut utiliser cette écriture grâce à la fonction __toString qui convertie l'objet p1 en chaîne de caractère
echo $p1;

echo $p2->getInfos();


?>