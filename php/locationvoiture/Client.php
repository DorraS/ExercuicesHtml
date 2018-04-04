<?php
class Client{
	private $_id;
	private $_nom;
	private $_prenom;
	private $_login;
	private $_motDePasse;
	 
	
	public function getId(){
		return $this->_id;
	}
	public function getNom(){
		return $this->_nom;
	}
	public function getPrenom(){
		return $this->_prenom;
	}
	public function getLogin(){
		return $this->_login;
	}
	public function getMotDePasse(){
		return $this->_motDePasse;
	}
	public function setId($id){
		$this->_id=$id;
	}
	public function setNom($nom){
		$this->_nom=$nom;
	}
	public function setPrenom($prenom){
		$this->_prenom=$prenom;
	}
	public function setLogin($login){
		$this->_login=$login;
	}
	public function setMotDePasse($motDePasse){
		$this->_motDePasse=$motDePasse;
	}
}
?>