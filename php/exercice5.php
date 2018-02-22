<?php
/**
* Creer un formulaire qui demande le nom de l'utilisateur
* une fois envoyé
* afficher le nom et demander le prenom
* enfin afficher le nom ET le prénom aprés la validation 
*
* Indice : il faut utiliser les sessions
*/
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>variables</title>
</head>
<body>

<form method="post" action="exercice5.php">
    <label for="login"> saisir votre nom</label>
    <input  name="name" type="text" id="login"/><br>
    <input type="submit" value="envoyer"/>
</form>


  
<PRE>

<?php
   if(count($_POST)>0 && array_key_exists('name', $_POST)){
     $name= $_POST['name'];
     $_SESSION['name']=$name;
     echo $name;
   }
?>

</PRE>
  <form method="post" action="exercice5.php">
    <label for="prenom"> <?php ?>  saisir votre prenom</label>
    <input  name="first_name" type="text" id="prenom"/><br>
    <input type="submit" value="envoyer"/>
</form>
<PRE>

  <?php
  if(count($_POST)>0 && array_key_exists('first_name', $_POST)){
    $first_name= $_POST['first_name'];
    $_SESSION['first_name']= $first_name;
  }
  
    if( count($_SESSION)>0 && array_key_exists('first_name', $_SESSION) && array_key_exists('name', $_SESSION)){
		echo $_SESSION['name'] . '  ' . $_SESSION['first_name'] .  '<br>';
	}
    
    //var_dump($_SESSION);
  ?>
  
   <form method="post" action="exercice5.php">
    <input  name="first_name" type="text" id="prenom"/><br>
    <input type="submit" value="destroy session"/>
   </form>
  
</pre>
  
</body>
</html>
