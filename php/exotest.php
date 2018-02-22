<?php
function affiche_entier(int$entier){
	$i=1;
	while($i<=$entier){
		echo $i;
		$i++;
	}
}
 
affiche_entier(6);

				
/*creer une fonction qui affiche le tablau en html*/
function create_table(array $thead,array $contenu,$filtre_key= NULL, $filtre_value=NULL){
	echo '<table>';
	// create head
	 echo '<thead>';
 echo '<tr>';
 foreach ($thead as $tcolumn){
	 echo '<th>'.$tcolumn.'</th>';
 }
  echo'</tr>';
 echo '</thead>';
 echo '<tbody>';
 foreach($contenu as $trow){
	 if(($filtre_key!= NULL && $filtre_value!=NULL && $trow[$filtre_key]==$filtre_value)||($filtre_key== NULL)){
		 	 echo '<tr>';
	 foreach($thead as $cle){
		 echo '<td>'. $trow[$cle].'</td>';
	 }
			echo '</tr>';
	 }

 }
  
 echo '</tbody>';
 echo '</table>';
}

/*test*/
/*$head est un tableau index qui commence par 0*/
$head= array('nom','prenom', 'sexe');
/*$tbody est un tableau multidimmentionnel 
*contenant des tableaux key=>valeur presentant 
*une personne*/
$tbody= array(array ($head[0]=>'khalfaoui', $head[1]=>'Dorra',$head[2]=>'femme'),
				array($head[0]=>'saihi', $head[1]=>'yassine',$head[2]=>'male'));
 create_table($head,$tbody,'nom','saihi');	
$head= array('couleur','style', 'pointure'); 
$tbody= array(array ($head[0]=>'rouge', $head[1]=>'chic',$head[2]=>36),
				array($head[0]=>'bleu', $head[1]=>'streetwear',$head[2]=>45));
 create_table($head,$tbody);
 


?>