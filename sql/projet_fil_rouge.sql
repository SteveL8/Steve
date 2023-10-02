-- Active: 1692861367629@@127.0.0.1@3306@the_district

                     --ECIRE DES REQUÊTES D'INTEROGATION DE LA BASE DE DONNÉES--

--.Afficher la liste des commandes (La liste doit faire apparaître la, les information du client, le plat ete le prix)
SELECT id_plat,total,date_commande,nom_client,telephone_client,email_client,adresse_client
FROM commande;

--.Afficher la liste des plats en spécifiant la catégorie.
SELECT p.libelle liste_plats, c.libelle nom_categorie
FROM plat p
JOIN categorie c ON p.id_categorie = c.id

--.Afficher les categorie et le nombre de plat actifs dans chaque catégorie.
SELECT c.libelle  nom_categorie,COUNT(p.libelle)  nomnbre_de_plat_actifs
FROM categorie c 
JOIN plat p ON c.id = p.id_categorie
WHERE p.active = 'yes'
GROUP BY c.libelle;

--.Liste des plat les plus vendu par ordre croissant.
SELECT p.libelle liste_plats, c.quantite nombre_de_vente
FROM plat p 
JOIN commande c ON p.id = c.id_plat
GROUP BY p.id
ORDER BY c.quantite DESC;

--.Le plat le plus rémunérateur.
SELECT libelle plat_le_plus_rémunérateur,prix
FROM plat
WHERE prix = (SELECT MAX(prix) FROM plat);

--.liste des clients et le chiffre d'affaire généré par client (par ordre décroissant).
SELECT nom_client,quantite * total chiffre_d_affaire
FROM commande
ORDER BY chiffre_d_affaire DESC;


                        --ECRIRE DES REQUÊTES DE MODIFICATION DE LA BASE DE DONNÉES--

--Ecrivez une requête permettant de supprimer les plats non actif de la base de données.
DELETE
FROM plat
WHERE active <> 'yes';

--Ecrivez une requête permettant de supprimer les commande avec le statut livré.
DELETE
FROM commande
WHERE etat = 'livrée';

--Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie.
--Script pour la nouvelle categorie:
INSERT INTO categorie (id, libelle,image, active)
VALUES ('7','dessert','dessert_cat.jpg','yes');
--Script pour le nouveau plat:
INSERT INTO plat (id,libelle,description,prix,image,id_categorie,active)
VALUES  ('7','Mousse au chocolat','rhdsjsbembgokbfrgsdibgueqbguezi','5.00','mousse.jpg',7,'yes');
--Verification que le plat soit bien dans la nouvelle categorie.
SELECT p.libelle nom_plat,c.libelle nom_categorie
FROM plat p 
JOIN categorie c ON p.id_categorie = c.id
WHERE p.libelle = 'mousse au chocolat';

--Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza'.
UPDATE plat
SET prix = prix * 1.10
WHERE id_categorie = 9;
--Verification
SELECT prix,id_categorie
FROM plat
WHERE id_categorie = 9;

