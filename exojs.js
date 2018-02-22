var chiffre= 0;
/*créer une boucle qui va itérer 20 fois. A chaque itération, il faut afficher dans la console : "le nombre X est pair", 
ou "le nombre X est impair"*/
for(var i=0;i<=20;i++){
	if(i%2==0){
		console.log('le nombre '+ i+' est pair');
	}else 
		console.log('le nombre '+i+' est impair');
}
/*créer une boucle qui va itérer 10 fois.
 A chaque itération afficher : " 1 * 9 = 9", "2 * 9 = 18", etc*/

for(var i=1;i<=10;i++){
console.log(i*9);
}


var somme = 0;
var i = 1;
while(i<=1){
	chiffre = prompt('saissez un chiffre');
	// calculer somme
	somme = somme + parseInt(chiffre);
	console.log('affiche '+ chiffre);
	console.log('affiche '+ somme);
	console.log(somme/i++);
}
/*créer fonction qui calcule si un nombre est premier
 ( un nombre est premier si il n'est pas divisible par un nombre plus petit )*/
function estPremier(nombre) {
	if(nombre==2){
		return true;
	}
     for(var i=2; i< nombre; i++ ){
		 if(nombre%i==0){
			return false; 
		 }
	 } 
return true;		 
}

console.log(estPremier(6));
console.log(estPremier(7));
console.log(estPremier(31));
console.log(estPremier(2));

// declaration d'un objet produit avec les propertiers ( reference ,  prix, labelle, marque)
var produits =  [{ refrence : 'x001' , prix : 100, type:'TELE' , marque : 'LG'},{ refrence : 'x001' , prix : 100, type:'TELE' , marque : 'Sony'},
{ refrence : 'x001' , prix : 150, type:'TELE' , marque : 'SUMSUNG'}];

for(var i = 0; i< produits.length; i++ ){
    console.log('-----------------');
   console.log(produits[i].prix);
   console.log(produits[i].refrence);
   console.log(produits[i].type);
   console.log(produits[i].marque);
   console.log('-----------------');
}