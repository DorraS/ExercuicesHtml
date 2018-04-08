drop schema  if exists achat;
create schema achat;
use achat;
CREATE TABLE client
(   id_client  int primary key not NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(250),
    adresse VARCHAR(50)
);
create table produits 
( id_produits int primary key not null  AUTO_INCREMENT,
  refProduit varchar(100),
  prixProduit float8,
  description varchar(255)
  );
  CREATE TABLE commande (
    id_commande int NOT NULL AUTO_INCREMENT,
    numeroCommande int NOT NULL,
    dateCommande date,
    id_client int not null,
    PRIMARY KEY (id_commande),
    CONSTRAINT FK_clientcommande FOREIGN KEY (id_client)
    REFERENCES client(d_client)
);
-- drop table commande
create table commandeProduit(
	id int  not null AUTO_INCREMENT,
    id_commande int NOT NULL ,
    id_produits int not null,
    quantité int,
	primary key (id),
	CONSTRAINT FK_commandecommandeProduit FOREIGN KEY (id_commande)
    REFERENCES commande(id_commande),
    CONSTRAINT FK_produitscommandeProduit FOREIGN KEY (id_produits)
    REFERENCES cproduits(id_produits));
   
    
    
    

  