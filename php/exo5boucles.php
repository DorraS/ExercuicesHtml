* Creer un script qui affiche les tables de multiplications des nombres de 1 a 5
*/
<?php

for($i=1;$i<=5;$i++){
	for($j=1;$j<=5;$j++){
		echo $i.'*'.$j.'='.$i*$j.'<br>';
	}
}
$somme=0;
for($i=1;$i<=20;$i++){
	$somme=$somme+$i;
}
echo $somme;


?>
