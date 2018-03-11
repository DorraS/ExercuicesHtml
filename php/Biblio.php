<?php 
session_start();

class Livres {
	protected $titre;
	protected $auteur;
	protected $disponibilite=true;
	public function __construct($titre,$auteur){
		$this->titre = $titre;
		$this->auteur = $auteur;
	}
	public function getTitre(){
		return $this->titre;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	public function getDisponibilite(){
		return $this->disponibilite;
	}
	public function setTitre($titre){
		$this->titre = $titre;
	}
	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}
	public function setDisponibilite($disponibilite){
		$this->disponibilite = $disponibilite;

	}

}
class Clients{
	protected $nom;
	protected $prenom;
	public function __construct($nom,$prenom){
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function setNom($nom){
		$this->nom = $nom;
	}
	public function setPrenom($prenom){
		$this->prenom = $prenom;   
	}
}
class Pret{
	protected $client;
	protected $livre;
	protected $dateEmprunt;
	public function __construct($client,$livre,$dateEmprunt){
		
		$this->client=$client;
		$this->livre=$livre;
		$this->dateEmprunt=$dateEmprunt;
	}
	public function getClient(){
		return $this->client;
	}
	public function getLivre(){
		return $this->livre;
	}
	public function getDateEmprunt(){
		return $this->dateEmprunt;
	}
	public function setClient($client){
		$this->client = $client;   
	}
	public function setLivre($livre){
		$this->livre = $livre;   
	}
	public function setDateEmprunt($dateEmprunt){
		$this->dateEmprunt = $dateEmprunt;   
	}
}



try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque;charset=utf8', 'root', '');
	}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	$query = $bdd->query('SELECT * From livre');
	$livres = $query->fetchAll();
	
	$query = $bdd->query('SELECT * From client');
	$clients = $query->fetchAll();
	$listelivres=[];
	foreach($livres as $livre){
		array_push($listelivres, new Livres($livre['titre'],$livre['auteur']));
	}
	$listeclients=[];
	foreach($clients as $client){
		array_push($listeclients, new Clients($client['nom'],$client['prenom']));
	}

	echo '<form method="post" action="Biblio.php">'  ;
	echo '<label for="listClient">liste des Clients</label>
	<table name="listClient" id="listClient">
  <thead>
    <tr>
	   <td> </td>
	   <td>Nom</td>
	   <td>Prenom</td>
	</tr>
  </thead>
  <tbody>
';
  for ($i=0;  $i<count($listeclients);$i++){
		echo'<tr>
		    <td><input type="checkbox" name="client" value="'.$i.'"/> </td>
		    <td>'.$listeclients[$i]->getNom().'</td>
		    <td>'.$listeclients[$i]->getPrenom().'</td>
		</tr>';
	}
	echo '</tbody></table>
	<label for="listLivre">liste des Livres</label>
		<table>
  <thead>
    <tr>
	   <td> </td>
	   <td>titre</td>
	   <td>auteur</td>
	</tr>
  </thead>
  <tbody>
';
  
	for ($i=0;  $i<count($listelivres);$i++){
		// afficher que les livre disponible
		if($listelivres[$i]->getDisponibilite()){
			echo'<tr>
				<td><input type="checkbox" name="livres[]" value="'.$i.'"/> </td>
				<td>'.$listelivres[$i]->getTitre().'</td>
				<td>'.$listelivres[$i]->getAuteur().'</td>
			</tr>';
	    }
	}
	echo '</tbody></table>
		<input type="submit" value="envoyez"/>
		</form>';
   if(array_key_exists('client',$_POST)&& array_key_exists('livres',$_POST)) {
	 
	$clientSelected=$listeclients[intval($_POST['client'])];
	
    $listeEnprinters=array();
	
	
    foreach($_POST['livres'] as $livresIndex) {
		$listelivres[intval($livresIndex)]->setDisponibilite(false);
		
		array_push($listeEnprinters,new Pret($clientSelected,$listelivres[intval($livresIndex)],getdate() ));
	   // mettre à jour l'état du livre emprunté   
	}    
	var_dump($listeEnprinters);
	
	unset($listeEnprinters);
	unset($_POST['client']);
	unset($_POST['livres']);
	
}
?>