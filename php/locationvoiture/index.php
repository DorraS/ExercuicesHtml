<?php
include_once 'Client.php'; 
include 'ClientRepository.php';
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=location_voiture;charset=utf8', 'root', '');
	
	$clientRepo = new ClientRepository($bdd);
	
	echo('result:   ');
	var_dump($clientRepo->getAll());
	
	//$client1 = new Client($client);
}
catch (Exception $e)
{
	echo 'error'.var_dump($e);
	die('Erreur : ' . $e->getMessage());
}


?>