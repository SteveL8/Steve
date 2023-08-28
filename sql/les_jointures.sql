-- Active: 1692861367629@@127.0.0.1@3306@exemple
--.Rechercher le prénom des employés et le numéro de la région de leur département.
--"e." et "d." Servent à indiquer à quel table ils appartiennent.
SELECT e.prenom, d.nodept AS num_region_employe
FROM employe e
JOIN dept d ON e.nodep = d.nodept;

--.Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les table utilisées).
SELECT e.nodep,d.nom,e.nom
FROM employe AS e
JOIN dept AS d ON e.nodep = d.nodept
ORDER BY e.nodep,e.nom;

--.Rechercher le nom des employés du département 'Distribution'.
SELECT e.nom 
FROM employe AS e
JOIN dept AS d ON e.nodep = d.nodept
WHERE d.nom = 'Distribution';

--.Rechercher le nom ete le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron.
SELECT e1.nom AS nom_employe,
e1.salaire AS salaire_employe,
e2.nom AS nom_sup,
e2.salaire AS salaire_sup
FROM employe AS e1
JOIN employe AS e2 ON e1.salaire > e2.salaire;

--.Rechercher le nom ete e titre des employés qui ont le me titre que Amartakaldire.
SELECT nom,titre
FROM employe
WHERE titre IN
       (SELECT titre FROM employe WHERE nom = 'amartakaldire');

--.Rechercher le, le salaire et le numéro de département des employés qui gagnent plus qu'un seul employés du département 31, classés par numéro de département et salaire.
SELECT nom,salaire,nodep
FROM employe
WHERE salaire > (
    SELECT MIN(salaire)
    FROM employe
    WHERE nodep =31
)
ORDER BY nodep,salaire;

--.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les emeployés du département 31, clasés par numéro de département et salaire.
SELECT nom, salaire,nodep
FROM employe
WHERE salaire > all (
    SELECT salaire 
    FROM employe
    WHERE nodep = 31
)
ORDER BY nodep,salaire;

--.Rechercher le nom ete le titre des employés du service 31 qui ont un titre que l'on trouve dans le départerment 32.ADD



