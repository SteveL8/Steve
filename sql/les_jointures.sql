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

--.Rechercher le nom et le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron.
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

--.Rechercher le nom et le titre des employés du service 31 qui ont un titre que l'on trouve dans le départerment 32.
SELECT nom,titre
FROM employe 
WHERE nodep = 31 AND titre IN (
        SELECT DISTINCT titre
        FROM employe
        WHERE nodep = 32
    );

--.Rechercher le nom et le titre des employés du service 31 qui ont un titre que l'on trouve pas dans le départment 32.
SELECT nom,titre
FROM employe
WHERE nodep = 31 AND titre NOT IN (
    SELECT titre
    FROM employe
    WHERE nodep =32
);

--.Recherhcer le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairant.
SELECT nom,titre,salaire
FROM employe
WHERE (titre,salaire) IN (
    SELECT titre,salaire
    FROM employe 
    WHERE nom = 'fairant'
    );

--.Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les département dans lequels il n'y a personne, classés par numéro de département.
--.Utilisation de la fonction "COALESCE" pour retourner les valeurs null.
SELECT d.nodept AS num_dep,
d.nom AS nom_dep,
COALESCE(e.nom, 'Aucun employés') AS nom_employe
FROM dept AS d
LEFT JOIN employe AS e ON d.nodept = e.nodep
ORDER BY d.nodept;

--1.Calculer le nombre d'employés de chaque titre.
SELECT titre,COUNT(*) nombre_employes
FROM employe
GROUP BY titre;

--2.Calculer la moyenne des salaires et leur somme, par region.
SELECT d.nodept region,AVG(e.salaire) moyenne_salaire,SUM(e.salaire) somme_salaire
FROM employe AS e
JOIN dept AS d ON e.nodep = d.nodept
GROUP BY d.nodept;

--3.Afficher les numéro des département ayant au moins 3 employés.
SELECT nodep numéro_dep, COUNT(*) nombre_emplyes
FROM employe
GROUP BY nodep
HAVING COUNT(*) >= 3;

--4.Afficher les lettres qui sont l'initiale d'au moins trois employés.
SELECT LEFT(nom,1)  initiale,COUNT(*)  nombre_employes
FROM employe
GROUP BY initiale
HAVING COUNT(*) >= 3;

--5.Rechercher le salaire maximum et le salaire minimum parmi tous les salairiés ete l'écart entre les deux.
SELECT MAX(salaire) salaire_max,MIN(salaire) salaire_min,MAX(salaire) - MIN(salaire) ecart_salaire
FROM employe;

--6.Rechercher le nombre de titre différents.
SELECT titre, COUNT(*)
FROM employe
GROUP BY titre
HAVING COUNT(*)

--7.Pour chaque titre, compter le nombre d'employés possédant ce titre.ADD
SELECT titre,COUNT(*) nombre_employes
FROM employe
GROUP BY titre;

--8.Pour chaque nom de département, afficher le nom du département et le nombre d'employés.
SELECT d.nom nom_département,COUNT(*) nombre_employes
FROM dept d 
JOIN employe AS e ON d.nodept = e.nodep
GROUP BY d.nom;

--9.Rechercher les titre et la moyenne des salaire par titre dont la moyenne est supérieure à la moyenne des salaire des Représentant.
SELECT titre,AVG(salaire) moyenne_salaire
FROM employe
GROUP BY titre
HAVING AVG(salaire) > (
    SELECT avg(salaire)
    FROM employe
    WHERE titre = 'représentant'
);

--10.Rechercher le nombre de salaires renseignés et le nombre de taux commission renseignés.
SELECT COUNT(salaire) nombre_salaire,COUNT(tauxcom) nomre_tauxcom
FROM employe;
















