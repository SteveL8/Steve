-- Active: 1692861367629@@127.0.0.1@3306@exemple
--1. Afficher toutes les information concernant les employés avec la commande "SELECT * FROM" + employe ici pour avoir la table du même nom.
SELECT * FROM employe;
--2.  Afficher toutes les information concernant les departements encore avec "SELECT * FROM" + le nom de la table ici dept.
SELECT * FROM dept;
--3. Afficher le nom, la date d'embauche, le numéro du supérieur, Le numéro de département et le salaire de tous les employés.
--On utilise encore la commande "SELECT * FROM" mais ici on veut des colonne specifique donc va les chercher identifiant puis on les sépare a une virgule.
SELECT nom,dateemb,nosup,nodep,salaire 
FROM employe;
--4. Afficher tous les employés avec la commande "SELECT" + la colonne titre ici + "FROM" + employe.
SELECT titre 
FROM employe;
--5. Suppression des doublons.Afficher le titre de tous les employés en utilisant la commande "DISTINCT" qui a pour effet de de n'afficher qu'une seule fois les lignes du même nom.
SELECT DISTINCT titre 
FROM employe;
--6. Afficher le nom, le numéro d'employés et le numéro du département des employés dont le titre est "secrétaire".
--Utilisation de la commande "WHERE" restraindre les information à afficher à secrétaire.
SELECT nom,dateemb,nodep 
FROM employe 
WHERE titre = 'secrétaire';
--7. Afficher le nom ete le numéro de département dont le numéro de département est  supérieur à 40.Utilisation de la commande "WHERE".
SELECT nom,nodep 
FROM employe 
WHERE nodep > 40;
--8. Afficher le nom et prénom des employes dont le nom est alphabétiquement antérieur au prénom.
SELECT nom,prenom 
FROM employe 
WHERE nom < prenom;
--9. Afficher le nom, le salire et le numéro du département des employés dont le titre est "Représentant", le numéro de département est 35 et le salire supérieur à 20000.
SELECT nom,salaire,nodep 
FROM employe 
WHERE titre = 'représentant' AND nodep = 35 AND salaire > 20000;
--10. Afficher le nom, le titre et le salaire des employés dont le titre est "représentant" ou dont le titre est "président".
SELECT nom,titre,salaire 
FROM employe 
WHERE titre = 'représentant' OR titre = 'président';
--11. Afficher le nom, le titre, le numéro de département, le salaire des employés du département 34, dont le titre est "représentant" ou "secrétaire".
SELECT nom,titre,nodep,salaire 
FROM employe 
WHERE nodep = 34 AND (titre = 'représentant' OR titre = 'secrétaire');
--12. Afficher le nom, le titre, le numéro de departement, le salaire des employés dont le titre est représentant ou dont le titre est secrétaire dans le département numéro 34.
SELECT nom,titre,nodep,salaire 
FROM employe 
WHERE (titre = 'représentant' OR titre = 'secrétaire') AND nodep = 34;
--13. Afficher le nom et le salaire des employés dont le salaire est compris entre 20000 et 30000.
SELECT nom,salaire 
FROM employe 
WHERE salaire BETWEEN 20000 AND 30000;
--15. Afficher le nom des employés commençant par la lettre "H".Utiisation de la commande "LIKE" avec "%" en mettant le H devant le pourcentage nous permet de prendre que les nom qui commence par la H
SELECT nom
FROM employe
WHERE nom LIKE 'H%';
--16. Afficher le nom des employés se terminant par la lettre "n".Même chose que l'exercice ci-dessus sauf qu'on met la lettre ici n a la fin.
SELECT nom
FROM employe
WHERE nom LIKE '%n';
--17. Afficher le nomdes employés contenant la lettre "u" en 3éme position.Ici le nombre d'underscore représente un caractère quelconque donc dans "__n%" le n est en 3éme position.
SELECT nom
FROM employe
WHERE nom LIKE '__u%';
--18. Afficher le salaire et le nom des employés du service 41 classés par salaire croissant.Utilisation de la commande "ORDER BY" et de "ASC" qui sert a trié du plus petit au plus grand.
SELECT nom,salaire
FROM employe
WHERE nodep = 41
order by salaire ASC;
--19. Afficher le salaire et le nom des employés du service 41 classés par salaire décroissant.Ici "DESC" trie par ordre décroissant du plus grand au plus petit.
SELECT nom,salaire
FROM employe
WHERE nodep = 41 dateemb 
ORDER BY salaire DESC;
--20. Afficher le titre, le salaire et le nom des employés classés par titre croissant et par salaire décroissant.
SELECT titre,salaire,nom 
FROM employe
ORDER BY titre ASC, salaire DESC;
--21. Afficher le taux de commission, le salaire et le nom des employés classés par taux de commission croissante.
SELECT tauxcom, salaire,nom
FROM employe
ORDER BY tauxcom ASC;
--22. Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission n'est pas renseigné.IS NULL est une condition pour vérifier  si une colonne contient une valeur null.
SELECT nom,salaire,tauxcom,titre
FROM employe
WHERE taux_de_commission IS NULL;
--23. Affichier le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est renseigné.IS NOT NULL verifie si la colonne ne contitent pas de valeur null.
SELECT nom, salaire,tauxcom,titre
FROM employe
WHERE tauxcom IS NOT NULL;
--24. Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est inférireur à 15.
SELECT nom,salaire,tauxcom,titre
FROM employe
WHERE tauxcom < 15;
--25. Afficher le nom, le salaire, le tauxde commission, le titre des employés dont le taux de commission est supérireur à 15.
SELECT nom,salaire,tauxcom,titre
FROM employe
WHERE tauxcom > 15;
--26. Afficher le nom, le salaire, le taux de commission et la commission des employés dont le taux de commission n'est pas nul.
--(La commission est calculée en multipliant le salaire par le taux de commission)
SELECT nom,salaire,tauxcom,(salaire * tauxcom) AS com
FROM employe
WHERE tauxcom IS NOT NULL;
--27. Afficher le nom, le salaire, le taux commission, la commission des employés dont le taux de commission n'est pas nul, classé par taux de commission croissant.
SELECT nom,salaire,tauxcom, (salaire * tauxcom) AS com
FROM employe
WHERE tauxcom IS NOT NULL
ORDER BY tauxcom ASC;
--28. Afficher le nom et le prénom (concaténés) des employés.Renommer les colonnes.utilisation de la fonction "concat" qui permet de fusionner  deux colonnes.
SELECT CONCAT(nom,' ',prenom) AS nometprenom
FROM employe;
--29. Afficher les 5 premières lettres du nom des employés.La fonction "LEFT" prend deux arguments, la colonne et le nombre de carâctere à extraire.
SELECT LEFT(nom, 5) AS 5lettres
FROM employe;
--30. Afficher le nom et le rang de la lettre "r" dans le nom des employés.Ultilisation de "INSTR" renverra la position de la lettre rechercher(sous-chaine) dans les nom(chaine) si il ne trouve rie il envoi 0. 
SELECT nom, INSTR(nom, 'r') AS lettre_r
FROM employe;
--31. Afficher le nom, le nom en majuscule et le nom en miniscule de l'employé dont le nom est Vrante.Utilisation de "UPPER" pour mettre en majuscule le nom et l'inverse avec "LOWER". 
SELECT nom, UPPER(nom) AS non_maj, LOWER(nom) AS nom_min
FROM employe
WHERE nom = 'Vrante';
--32. Afficher le nom et le nombre de caractère du nom des employés.Utilisation de "LENGTH" qui renvoie le nombre de caractères des chaîne de caractères.
SELECT nom, LENGTH(nom) AS nombre_caracteres
FROM employe;


