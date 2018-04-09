<?php
include("Connexion.php");
function createClass($nom,$niveau,$bdd){
	$req = $bdd->prepare('insert into classe (nom,niveau)
						values(:nom,:niveau)');
	$req->execute(array('nom'=>$nom,'niveau'=>$niveau));
	
	$id_classe=$bdd->lastInsertId();
	return $id_classe;
}
function createEleve($nom,$prenom,$moyenne,$id_classe,$bdd){
	$req = $bdd->prepare('insert into eleve (nom,prenom,moyenne,id_classe)
						values(:nom,:prenom,:moyenne,:id_classe)');
	$req->execute(array('nom'=>$nom,'prenom'=>$prenom,'moyenne'=>$moyenne,'id_classe' =>$id_classe));
	$id_eleve=$bdd->lastInsertId();
	return $id_eleve;	
}
function getEleve($id_classe,$bdd){
	$req=$bdd->prepare('select * from eleve where id_classe = :id_classe');
	$req->bindParam('id_classe',$id_classe);
	$req->execute();
	return $req->fetchAll();
}
function calculRang($eleves){
	$topEleve=array();
	foreach($eleves as $eleve){
		if(!isset($topEleve['moyenne']) || $topEleve['moyenne'] <$eleve['moyenne']){
			$topEleve=$eleve;
		}
	}
	return $topEleve;
}

/*$id_classe= createClass('Rose','1C',$bdd);
id_eleve= createEleve('Gucci','toto',9.25,$id_classe,$bdd);
:$id_eleve= createEleve('YSL','Lisa',16.94,$id_classe,$bdd);*/
echo 'Class 1 : <BR>';
var_dump(calculRang(getEleve(1,$bdd)));
echo 'Class 12 : <BR>';
var_dump(calculRang(getEleve(12,$bdd)));

?>