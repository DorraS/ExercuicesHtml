<?php 
  include 'product.php';
  include 'panier.php';
  include 'produit_magasin.php';

  session_start();
    
    if (isset($_POST['produit'])) {
		$produits = $_POST['produit'];
		
		$panier=new Panier();
		
		if(isset($_SESSION['panier'])){
			$panier=$_SESSION['panier'];
		}
		
		foreach ($produits as $ref){
			
			$produitAAjouter = $_SESSION['magasin']->rechercheProduit($ref);
			$panier->ajoutProduit($produitAAjouter);
		}
		
		// mise à jour de panier au niveau de la session de l'utilisateur
		$_SESSION['panier'] = $panier;
		// redirection vers la page de consultation du panier
		header("Location: ./consulterPanier.php");
        die();
		
	}
?>