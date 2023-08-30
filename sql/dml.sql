-- Active: 1692861367629@@127.0.0.1@3306@exemple

--POUR L'INSTRUCTION 'insert'
--.Ajouter trois employés dans la base de données avec les données de votre choix.
insert into employe (noemp, nom, prenom, dateemb,nosup,titre, nodep, salaire)
values (29,'port','diane','2001-01-22 00.00.00',2,'chef entrepot','50',25000),
(27,'deux','eric','2001-01-23 00.00.00',2,'chef entrepot','42',27000),
(28,'touge','six','2001-01-25 00.00.00',2,'chef entrepot','41',23000);
--Verifier en utilisant la requête 'SELECT'.
SELECT *
FROM employe;

--Ajouter un département.
insert into dept(nodept,nom,noregion)
values ('25','publicité','1');
--Verifier en utilisant la requête 'SELECT'.
SELECT *
FROM dept;


--POUR L'INSTRUCTION 'update'
--.Augmenter de 10% le salaire de l'employe 17.
UPDATE employe
SET salaire = salaire *1.10
WHERE noemp = 17;
--Verifier en utilisant la requête 'SELECT'.
SELECT salaire,noemp
FROM employe
WHERE noemp = 17;

--.Changer le nm du département 45 en 'Logistique'
UPDATE dept
SET nom = 'logistique'
WHERE nodept = 45;

--Verifier en utilisant la requête 'SELECT'.
SELECT nom,nodept
FROM dept
WHERE nodept = 45;


--POUR L'INSTRUCTION 'delete'.
--.Supprimer le dernier des employés que vous avez insérés précédement.
DELETE
FROM employe
WHERE noemp = 29;

--Verifier en utilisant la requête 'SELECT'.
SELECT noemp
FROM employe
WHERE noemp = 29;


