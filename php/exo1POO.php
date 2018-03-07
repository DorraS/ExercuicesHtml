<?php
/**
* Créer des classes Dog et et Cat étendant Pet et implémentant l'interadce Animal
* 
* Methode de Animal : 
*   - Cry() // Affiche le nom du crie de l'animal
*   - Run() // Affiche la vitesse a laquelle l'animal court
* Propriété de Animal :
*    - $speed
*    - $cryName
* 
* Methode de Pet
*   - Sleep() // Affiche le temps d'une sieste d'un animal
* Proprieté de Pet
*   - SleepTime
*
* Il faut passer les paramètres $sleepTime, $speed, $cryName dans le constructeur
* 
* 
* Créer ensuite 3 chats et 2 chiens, les mettres dans un tableau
* Parcourir le tableau et afficher soit le cri, la vitesse ou son temps de sieste.
*/

interface Animal{
	//public $speed;
	//public $cryName;
	public function cry();
	public function run();
}
class Pet{
	private $_sleepTime;
	private $_speed;
	private $_cryName;
	public function sleep(){
		echo $this->_sleepTime;
	}
	public function __construct($sleepTime, $speed, $cryName){
		$this->_sleepTime =  $sleepTime;
		$this->_speed = $speed;
		$this->_cryName = $cryName;
	}
}
class Dog extends Pet{}
class Cat extends Pet{}
$cat1= new Cat('10hours','25km/h','miaou');
$cat2= new Cat('5hours','35km/h','grrr');
$cat3= new Cat('8hours','40km/h','keees');
$dog1= new Dog('4hours','50km/h','hawhaw');
$dog2= new Dog('6hours','37km/h','plouf');
$animals= array($cat1, $cat2,$cat3,$dog1,$dog2);
var_dump($animals);
$methods= 
foreach($animals as $key=>$value){

}

?>