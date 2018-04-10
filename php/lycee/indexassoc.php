<?php 
include ("connexionassoc.php");
function getBirthday ($date,$bdd){
	$req = $bdd->prepare('select* from adherent where STR_TO_DATE(date_naissance,\'%d-%m\')= STR_TO_DATE(:date,\'%d-%m\')');
	$bdd->bindParam('date',$date);
	$req->execute();
	return $req->fetchAll();
}
$date_jour= date();
$listAnniv = getBirthday($date,$bdd);
  if(sizeof($listAnniv)> 0){
	  echo 'Joyeux anniversaire:.<br>';
	foreach($listAnniv as $anniv){
		echo $anniv['nom'].$anniv['prenom'].'est né(e) le '.$anniv['date_naissance'];
	}
  } else {
		echo 'pas de gateau pour aujourd\'hui! ';
	}




?>