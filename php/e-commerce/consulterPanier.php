<?php
  include 'product.php';
  include 'panier.php';
  include 'produit_magasin.php';
  
  session_start();
  // recupération du panier de la session s'il existe
  $panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : null;
  // supprisson des produit du panier s'il existe 
  if(isset($_POST['produit']) && isset( $panier)){
  	$produits = $_POST['produit'];
  	foreach ($produits as $ref){
  		$panier->suppProduit($ref);
  	}
  }
   // affichage du panier s'il existe et existe des produits
  if(isset($panier) && sizeof($panier->getListProduit())>0){
	    echo '<form  method="post" action="">';
	   afficheProduits($panier->getListProduit());
	   echo '<input type="submit" id="supprimerbné" value="supprimer"/>
	         <h1> total Panier :'.$panier->getTotal().'</h1>   
           </form>';
	   echo '<form  method="post" action="index.php">
              <input type="submit" id="achatbn" value="Achat"/>
           </form>';
	   
   }else {
   	    // panier vide
	   echo '<h1> Panier vide </h1>';
   }
   
?>