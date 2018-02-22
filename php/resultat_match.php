<?php 
 session_start();

 
 function calcul_somme_points(){
	 $somme=0;
	 foreach($_POST['match'] as $value){
		 $somme+=intval($value);
	 }
	 $_SESSION['nb_points']= $somme;
 }
 calcul_somme_points();

 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nombre de match</title>
</head>
<body>
	<label for="lastname">NOM: <?php echo $_SESSION['nom']; ?> </label><br>
	<label for="firstname">Prénom:<?php echo $_SESSION['prenom']; ?> </label> <br>
	<label for='sexe'>Sexe: <?php echo $_SESSION['sexe']; ?> </label><br>
	<label for='points'>Points Marqués: <?php  echo $_SESSION['nb_points'];?></label><br>
	


</body>
</html>