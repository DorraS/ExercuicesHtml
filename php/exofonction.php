<?php
session_start();
/*
functions
*/
function hello($prenom){
	echo 'bonjour '. $prenom;
}
/*exo1*/
function valeur_exist($table,$val)
{
	
	foreach($table as $value){
		if($value==$val){
			return true;
		}
	}
	return false;
}
/*exo2*/

function length_string(string $string){
	$compteur=0;
	
	foreach(str_split($string) as $char){
		$compteur++;
	}
	return $compteur;
}
/*exo3*/

function verifier_position(string $string1, string $string2){
	$firstchar= $string2[0];
	$position=0;
	$taille1= strlen($string1);
	$taille2= strlen($string2);
	
	foreach(str_split($string1) as $char){
		 if($taille1-$position<$taille2){
			return null;
		}
		
		if (($char==$firstchar)&&
		(substr($string1,$position,$taille2)== $string2)){
			return $position;
		}
		$position++;
	}	
}

function tableau ($table,$cle){
	return $table[$cle];
	
}

function variable_exist($cle){
	if (array_key_exists($cle,$_POST) ||array_key_exists($cle,$_GET)||array_key_exists($cle,$_SESSION)){
		return true;
	}
	return false;
}


/*
tests
*/
$_POST['name']= 'pseudo';
var_dump (variable_exist('name'));

var_dump (variable_exist('name'));
/*test avec $_get*/
$_GET['nom']= 'dorra';
var_dump (variable_exist('nom'));
/*test $_SESSION*/
var_dump (variable_exist('test'));
$_SESSION['test']= 'debut';


hello('yassine');
echo length_string('bonjour dorra');





$index= array(1,8,9,7);

var_dump(valeur_exist($index,8));
var_dump(valeur_exist($index,10));
var_dump(valeur_exist($index,7));
var_dump(valeur_exist($index,2));
var_dump(valeur_exist($index,1));
$tableau = array('a','b','c','d');
foreach( $tableau as $char){
	echo $char . '<br>';
}


var_dump (verifier_position('machaine','chaine'));
var_dump (verifier_position('machaine','cba'));

$valeur= Array
    (
        ('uid') => '100',
        ('name') => 'Sandra Shush',
        ('url') => 'urlof100'
    );
	echo tableau($valeur,'url');

?>

