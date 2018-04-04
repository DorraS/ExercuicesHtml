<?php 
  include 'product.php';
  include 'panier.php';
  include 'produit_magasin.php';
  
  session_start();
  
  if(!isset($_SESSION['magasin']) ){
	$_SESSION['magasin']=new Magasin();
  }

  echo '<form method="post" action="./addprdouit.php">';
  afficheProduits($_SESSION['magasin']->getListProduit());
  echo '	<input type="submit" id="addProduct" value="Ajouter"/> 
  		</form>';
   
   echo '<form method="post" action="./consulterPanier.php">
			<input type="submit" id="panier" value="Panier"/> 
   		</form>';
   
?>