<?php
class Produit {
	private $_refProduit;
	private $_labelProduit;
	private $_prix;
	public function __construct( $refProduit,$labelProduit,$prix){
		$this->_refProduit = $refProduit;
		$this->_labelProduit =$labelProduit;
		$this->_prix = $prix;	
	}
	public function getRefProduit(){
		return $this->_refProduit;
	}
	public function getLabelProduit(){
		return $this->_labelProduit;
	}
	public function getPrix(){
		return $this->_prix;
	}
	public function setRefProduit($refProduit){
		$this->_refProduit = $refProduit;
	}
	public function setLabelProduit($labelProduit){
		$this->_labelProduit = $labelProduit;
	}
	public function setPrix($prix){
		$this->_prix = $prix;
	}
	
	
}

?>