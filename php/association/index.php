<?php 
include ("connexion.php");
/**
* recupération des adhérents qui fêtent leur anniversaire à une date donnée
*/
function getBirthday($date,$bdd){
	$req = $bdd->prepare('select * from adherent where DATE_FORMAT(date_naissance,\'%d-%m\')= DATE_FORMAT(:date,\'%d-%m\')');
	$req->bindParam('date',$date);
	$req->execute();
	return $req->fetchAll();
}
// réccupération du planning par date 

function getActivity($date,$bdd){
	$req = $bdd->prepare('select tac.typeActivite, a.* from activite a inner join planning p on a.idplanning = p.id_planning
								inner join typeactivite tac on a.idtypeActivite = tac.idtypeActivite 
								where date(date_planning)= date(:date) ');
	$req->bindParam('date',$date);
	$req->execute();
	return $req->fetchAll();
}

$date_jour= date("Y-m-d H:i:s");

// affichier l'anniversaire du jour
$listAnniv = getBirthday($date_jour,$bdd);
  if(sizeof($listAnniv)> 0){
	  echo ' Joyeux anniversaire: <br>';
	foreach($listAnniv as $anniv){
		echo $anniv['nom'].$anniv['prenom'].'est né(e) le '.$anniv['date_naissance'];
	}
  } else {
		echo 'pas de gateau pour aujourd\'hui!<br> ';
	}
// afficher les activités du jour
$listActivity = getActivity($date_jour,$bdd);
if(sizeof($listActivity)>0){
	echo 'les activités du jour sont: <br>';
	foreach ($listActivity as $activity){
		echo $activity['typeActivite'].' commence à '. $activity['heureDebut']. ' et fini à '.$activity['dateFin'].'<br>';
	}
}	
   



?>