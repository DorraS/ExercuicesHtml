<?php
class ClientRepository{
	private $_dbConnexion;
	
	public function __construct($db){
		$this->_dbConnexion = $db;
	}
	
	public function insert(Client $client){
		
		
		
		$st = $this->_dbConnexion->prepare('INSERT INTO Client(nom, prenom, login, motDePasse) VALUES (:nom, :prenom, :login, :motDePasse)');	
		$st->execute(array(
				'nom' => $client->getNom(),
				'prenom' =>$client->getPrenom(),
				'login' =>$client->getLogin(),
				'motDePasse' => $client->gettMotDePasse()));
		
		
	}
	public function getAll(){
		
		$st= $this->_dbConnexion->prepare('SELECT * From Client');	
		$st->setFetchMode( PDO::FETCH_CLASS, 'Client');
		$st->execute();
		$listClient= $st->fetch( PDO::FETCH_CLASS);
		return $listClient;
	}
	
}


/*try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}*/



?>