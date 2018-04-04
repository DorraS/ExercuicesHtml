<?php

class Magasin {
   private $_listProduits ;
   
   public function __construct(){
	$pord1 = new Produit('01','PLAY 4',400);
	$pord2 = new Produit('02','SWITCH N',200);
	$pord3 = new Produit('03','XBOX ONE',300);
	$this->_listProduits =array($pord1,$pord2,$pord3);
   }
   
   public function getListProduit(){
    	return $this->_listProduits;
	}
   
  public function rechercheProduit($refProduit){
 	foreach ($this->_listProduits as $prdouit){
 		if($prdouit->getRefProduit()== $refProduit){
 			return  $prdouit;
 		}
 		
 	}
 }
}

 function  afficheProduits(array $produits ){
  	echo '<table> 
			<thead>
				<tr>
					<td>REF</td> 
					<td>Label</td> 
					<td>Prix</td> 
				</tr> 
			</thead>
		';
  	foreach($produits as $produit){
  		echo '<tr>
				<td>'.$produit->getRefProduit().'</td>
				<td>'.$produit->getLabelProduit().'</td>
				<td>'.$produit->getPrix().'</td>
		        <td> <input type="checkbox" name="produit[]"  id="produit" value="'.$produit->getRefProduit().'"/> </td>
		     </tr>';
        
  	}
  	echo '</table>';
  }
?>


