<?php 
/*Une classe, c'est un ensemble de variables et de fonctions (attributs et méthodes).

Un objet, c'est une instance de la classe pour pouvoir l'utiliser.

Tous vos attributs doivent être privés. Pour les méthodes, peu importe leur visibilité. C'est ce qu'on appelle le principe d'encapsulation.

On déclare une classe avec le mot-cléclasssuivi du nom de la classe, et enfin deux accolades ouvrantes et fermantes qui encercleront la liste des attributs et méthodes.
*/
class Personnage{
	/* attributs de la classe*/
	private $_force= 50; //50 valeur par défaut de la force//
	private $_degats= 0;
	private $_localisation= "paris";
	private $_experience= 1;
	
	
	public function __construct($force, $degats, $localisation , $experience) {
		echo 'appel du constructeur 1';
        $this->_force = $force;
		$this->_degats =  $degats;
		$this->_localisation=$localisation;
		$this->_experience=$experience;
    }
	
	/*déclaration des methodes*/
	public function deplacer(){
		echo 'deplacement';
	}
	public function frapper($personnefrappe){}
	public function affiche_experience(){
		echo $this->_experience;
	}
	public function ganer_experienc(){
		$this->_experience+=1;
		
	}
	
	
}

$perso= new Personnage;
echo '<br>';
var_dump ($perso);
echo '<br>';
$perso->deplacer();
echo '<br>';
$perso->ganer_experienc();
var_dump($perso);
echo '<br>';
$perso->affiche_experience();

$perso2 =  new Personnage(80,10,'Metz',1000);
echo '<br>';
var_dump($perso2);



?>