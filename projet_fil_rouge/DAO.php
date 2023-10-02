<?php
require('connexion_db.php');


//Fonction pour obtenir la liste des catégories
function get_categories() {
    global $db;//Indique que $db est uen variable global 
    try {
        //Requête SQL pour sélectionner toutes les catégorie 
        $query = "SELECT * FROM categorie";

        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch(PDOException $e) {
        echo "Erreur de requête : " . $e->getMessage();
        return null;
    }
}
//Fonction pour obtenir les catégories pour la page d'accueil, ici 
function getIndexCategories($limit = 6) {
    global $db;
    try {
        //REquête SQL pour obtenir les categories 
        $query = "SELECT c.id, c.libelle, c.image, c.lien,
                         (SELECT COUNT(*) FROM plat p WHERE p.id_categorie = c.id) AS nombre_de_plats
                  FROM categorie c
                  ORDER BY nombre_de_plats DESC
                  LIMIT :limit";
        //Prépare la requête SQL 
        $stmt = $db->prepare($query);
        //Lie la valeur de la limite à la requête SQL
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        //Exécute la requête SQL
        $stmt->execute();
        //Récupère le résultat de la requête sous forme de tableau
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Retourne le résultat (la liste des catégories pour la page d'accueil)
        return $result;
    } catch(PDOException $e) {
        echo "Erreur de requête : " . $e->getMessage();
        return null;
    }
}
//Fonction pour obtenir les plats les plus vendus
function getPlats($limit) {
    global $db;
    try {
        //Requête SQL pour obtenir les plats avec la quantité vendue 
        $query = "SELECT plat.id, plat.libelle, plat.image, SUM(commande.quantite) as quantite_vendue
                  FROM plat
                  INNER JOIN commande ON plat.id = commande.id_plat
                  GROUP BY plat.id
                  ORDER BY quantite_vendue DESC
                  LIMIT :limit";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch(PDOException $e) {
        echo "Erreur de requête : " . $e->getMessage();
        return null;
    }
}


?>