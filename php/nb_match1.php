<?php 
 session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nombre de match</title>
</head>
<body>
<form method='post' action='resultat_match.php'>
	<label for="lastname">NOM: <?php echo $_SESSION['nom']; ?> </label><br>
	<label for="firstname">Prénom:<?php echo $_SESSION['prenom']; ?> </label> <br>
	<label for='sexe'>Sexe: <?php echo $_SESSION['sexe']; ?> </label><br>
	<label for='points'>Points Marqués: </label><br>
	<?php 
		for ($i=1; $i<=$_SESSION['nbMatch'];$i++){
			echo '<label for="points'.$i.'">Match ' .$i.' </label><input name="match[]" type="text" id="points'.$i.'"> <br>';
		}
	
	?>
	<input type='submit' value='envoyez'/>

</form>
</body>
</html>