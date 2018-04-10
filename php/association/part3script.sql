use association;
SET SQL_SAFE_UPDATES = 0;
-- supprimer cours AIKIDO
-- delete le lien entre participant et  activitéalte
/*DELETE par.* FROM activite a
INNER JOIN planning p ON a.idplanning = p.id_planning
INNER JOIN typeactivite tac ON a.idtypeActivite = tac.idtypeActivite
INNER JOIN participant par ON a.id_activite = par.id_activite
WHERE p.date_planning = '2018-04-12' AND tac.typeActivite = 'AIKIDO';

DELETE  a.* FROM activite a
INNER JOIN planning p ON a.idplanning = p.id_planning
INNER JOIN typeactivite tac ON a.idtypeActivite = tac.idtypeActivite
WHERE p.date_planning = '2018-04-12' AND tac.typeActivite = 'AIKIDO';*/
-- faire passer Balze en dirigeant
-- insert into role (idtypeAdherent, id_adherent) values (1,16);
-- afficher la liste des profs et leurs activités
/*select ad.*, a.* from typeadherent tad 
INNER JOIN role r ON tad.idtypeAdherent= r.idtypeAdherent
INNER JOIN adherent ad ON r.id_adherent = ad.id_adherent
LEFT JOIN activite a ON ad.id_adherent = a.id_prof
where tad.typeAdherent ='Prof';*/
-- afficher les activités avec détail participant
select tac.typeActivite, p.date_planning,a.heureDebut,a.dateFin,ad.nom,ad.prenom, adp.nom,adp.prenom from activite a 
inner join adherent ad ON a.id_prof = ad.id_adherent
inner join typeactivite tac ON a.idtypeActivite = tac.idtypeActivite
inner join planning p on a.idplanning = p.id_planning
inner join participant par on a.id_activite = par.id_activite
inner join adherent adp on par.id_adherent = adp.id_adherent
where p.date_planning between '2018-04-09' and '2018-04-20'
order by tac.typeActivite, p.date_planning, adp.nom 


