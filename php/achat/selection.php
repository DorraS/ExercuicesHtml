<?php 
include("Connexion.php");
/*
 $req = $bdd->prepare('select * from client where id_client =:id');
// Charger les paramétres de la requete
$req->bindValue('id',1);
// executer la requete 
$req->execute();
// recupérer le resultat
$client =$req->fetch();
$sth= $bdd->prepare('select * from produits where refProduit =:reference');
$sth->bindValue('reference','528ez57');
$sth->execute();
$produit =$sth->fetch();
$qqq= $bdd->prepare('insert into commande (numeroCommande,dateCommande,id_client)
					values(:n_cmd, :date_cmd,:id_client)');
$qqq->bindValue('n_cmd',99);
$qqq->bindValue('date_cmd','2018-04-08');
$qqq->bindValue('id_client',4);
$qqq->execute();
$idCommande=$bdd->lastInsertId();
$parms=array('id_commande'=>$idCommande,'id_produit'=>$produit['id_produits'],'quantite'=>1);
var_dump ($idCommande);
$req=$bdd->prepare('insert into commandeproduit (id_produits,id_commande,quantité)
	values(:id_produit,:id_commande,:quantite)');
$req->execute($parms);
*/
$miseajour= array('mail'=>'khalfaoui@yahoo.fr','name'=>'khalf', 'id'=>2);
$query= $bdd->prepare('update client set email=:mail, nom=:name where id_client=:id');
$query->execute($miseajour);
var_dump($miseajour);

					








?>