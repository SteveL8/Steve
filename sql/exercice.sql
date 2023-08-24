-- Active: 1692861367629@@127.0.0.1@3306@exemple
--1. Afficher toutes les information concernant les employés avec la commande "SELECT * FROM" + employe ici pour avoir la table du même nom.
SELECT * FROM employe;
--2.  Afficher toutes les information concernant les departements encore avec "SELECT * FROM" + le nom de la table ici dept.
SELECT * FROM dept;
--3. Afficher le nom, la date d'embauche, le numéro du supérieur, Le numéro de département et le salaire de tous les employés.
--On utilise encore la commande "SELECT * FROM" mais ici on veut des colonne specifique donc va les chercher identifiant puis on les sépare a une virgule.
SELECT nom,dateemb,nosup,nodep,salaire FROM employe;
--4. Afficher tous les employés avec la commande "SELECT" + la colonne titre ici + "FROM" + employe.
SELECT titre FROM employe;
--5. Suppression des doublons.Afficher le titre de tous les employés en utilisant la commande "DISTINCT" qui a pour effet de de n'afficher qu'une seule fois les lignes du même nom.
SELECT DISTINCT titre FROM employe;
--6. Afficher le nom, le numéro d'employés et le numéro du département des employés dont le titre est "secrétaire".
--Utilisation de la commande "WHERE" restraindre les information à afficher à secrétaire.
SELECT nom,dateemb,nodep FROM employe WHERE titre = 'secrétaire';
--7. Afficher le nom ete le numéro de département dont le numéro de département est  supérieur à 40.Utilisation de la commande "WHERE".
SELECT nom,nodep FROM employe WHERE nodep > 40;
--8. Afficher le nom et prénom des employes dont le nom est alphabétiquement antérieur au prénom.
SELECT nom,prenom FROM employe WHERE nom < prenom;
--9. Afficher le nom, le salire et le numéro du département des employés dont le titre est "Représentant", le numéro de département est 35 et le salire supérieur à 20000.
SELECT nom,salaire,nodep FROM employe WHERE titre = 'représentant' AND nodep = 35 AND salaire > 20000;
--10. Afficher le nom, le titre ete le salaire des employés dont le titre est "représentant" ou dont le titre est "président".
SELECT nom,titre,salaire FROM employe WHERE titre = 'représentant' OR titre = 'président';
--11. Afficher le nom, le titre, le numéro de département, le salaire des employés du département 34, dont le titre est "représentant" ou "secrétaire".
SELECT nom,titre,nodep,salaire FROM employe WHERE nodep = 34 AND (titre = 'représentant' OR titre = 'secrétaire');
--12. Afficher le nom, le titre, le numéro de departement, le salaire des employés dont le titre est représentant ou dont le titre est secrétaire dans le département numéro 34.
SELECT nom,titre,nodep,salaire FROM employe WHERE (titre = 'représentant' OR titre = 'secrétaire') AND nodep = 34;
--13. Afficher le nom et le salaire des employés dont le salaire est compris entre 20000 et 30000.
SELECT nom,salaire FROM employe WHERE salaire BETWEEN 20000 AND 30000;
