use achat;
insert into client (nom,prenom,email,adresse) 
			values ('saihi','dorra','saihidorra@yahoo.fr','1 rue pierre mendes france metz'),
				   ('khalf','yassine','khalfyassine@yahoo.com','33 rue de la chine paris'),
                   ('dupont', 'pierre','dupont@gmail.com', '120 rue gambetta nice');
insert into produits (refProduit, prixProduit, description) 
			values ('145f44d',65.99, 'chaussures homme'),
					('8754p5',47, 'jean boyfriend'),
                    ('528ez57',78.29,'chaise jaune'),
                    ('8765z6z',102,'sac à main bandoulière');
insert into commande(numeroCommande,dateCommande,id_client)
			values(4154, '2018-03-21',1),
				 (687, '2017-11-05',3);
insert into commandeproduit (id_commande,id_produits, quantité)
			values (1,4,3),
				    (2,2,1);
                    
                 
                    