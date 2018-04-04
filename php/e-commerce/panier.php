<?php

class Panier {
	// list Produit (class produit)
	private  $_listProduit;
	
	public function __construct(){
		$this->_listProduit = array();
	}
	public function getListProduit(){
		return $this->_listProduit;
	}
	public function ajoutProduit($produit){
		array_push($this->_listProduit,$produit);
	}
	public function getTotal(){
		$total = 0;
		foreach($this->_listProduit as $produit){	
			$total += $produit->getPrix();
		}
		return $total;
	}
	
	public function suppProduit($ref){
		foreach($this->_listProduit as $index=>$produit) {
			if($produit->getRefProduit()==$ref){
				unset($this->_listProduit[$index]);
				break;
			}
		}
	}
}




?>

