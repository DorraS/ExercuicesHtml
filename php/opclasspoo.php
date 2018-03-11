<?php 
class Personne{
	private $_nom;
	private $_prenom;
	private $_sexe;
	public function __construct(){}
	public function __construct1($nom,$prenom,$sexe){
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_sexe = $sexe;
	}
	
	public function getName(){
		return $this->_nom;
	}
	public function setName($nom){
		$this->_nom = $nom;
		
	}
	public function setPrenom($prenom){
		$this->_prenom = $prenom;
	}
	public function setSexe($sexe){
		$this->_sexe = $sexe;
	}
	public function hello(){
		echo $this->_nom;
	}
}
class Eleve extends Personne{
	private $_classe;
	private $_niveau;
	public function __construct(){
		parent::__construct();
	}
	public function __construct1($nom,$prenom,$sexe){
		parent::__construct1($nom,$prenom,$sexe);
	}
	public function __construct2($nom,$prenom,$sexe,$classe,$niveau){
		parent::__construct1($nom,$prenom,$sexe);
		$this->_classe = $classe;
		$this->_niveau = $niveau;
	}
	public function getClasse(){
		return $this->_classe;
	}
	public function getNiveau(){
		return $this->_niveau;
	}
	public function setClasse($classe){
		$this->_classe = $classe;
	}
	
	public function setNiveau($niveau){
		$this->_niveau = $niveau;
	}
	
	public function hello(){
		echo 'Hello '.$this->getName() .' you are in class '.$this->_classe;
	}
	
}
$pupil = new Eleve();
$pupil->setName('5ra');
$pupil->setClasse('2B');
$pupil->hello();

$perso = new Personne('saihi','dorra','femme');
$perso->hello();
var_dump($perso);
/*
var_dump($pupil);

 
var_dump ($perso);
 $perso->setName('yassine');
var_dump ($perso); 
 $perso->setPrenom('becha');
 var_dump ($perso);
 echo $perso->getName();
 */

 
 

?>