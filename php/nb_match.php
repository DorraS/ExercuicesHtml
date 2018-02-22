<?php 
session_start();


function reccuperation_info_abonne(){
	$name = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$sexe = $_POST['sexe'];
	$nb_match = $_POST['nbMatch'];
	$_SESSION['nom']=$name;
	$_SESSION['prenom']= $prenom;
	$_SESSION['sexe']= $sexe;
	$_SESSION['nbMatch']= $nb_match;
	header("Location:nb_match1.php");
}

reccuperation_info_abonne();

?>