<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use App\Entity\Categorie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
     # Afficher la page d'accueil
    #[Route('/', name: 'app_catalogue')]
    public function index(CategorieRepository $categorieRepository, PlatRepository $platRepository): Response
    {   
         # Récupération de toutes les catégories et plats
        $categories = $categorieRepository->findAll();
        $plats = $platRepository->findAll();

        $plats = array_slice($plats, 0, 3);
         
         # Afficher l'accueil avec les catégorei et les plats 
        return $this->render('catalogue/index.html.twig', [
            'categories' => $categories,
            'plats' => $plats,
        ]);
    }

     # Afficher toutes les catégorie 
    #[Route('/cat', name: 'app_categorie')]
    public function categorie(CategorieRepository $categoriePage): Response
    {
         #Récupération de toutes les catégorie 
        $categories = $categoriePage->findAll();

        return $this->render('catalogue/categorie.html.twig', [
            'categories' => $categories,
        ]);
    }
      
     # Afficher les plats de chauqe catégorie
    #[Route('/plats/{id}', name: 'app_plats')]
      public function platCategorie(EntityManagerInterface $entityManager, int $id): Response
     {
          # Récupére la catégorie via son id 
         $categorie = $entityManager->getRepository(Categorie::class)->find($id);
         
          # Vérification si la catégorie existe
         if (!$categorie) {
             throw $this->createNotFoundException(
                 'Aucune Categorie a un id '.$id
             );
         }

          # Récupération des plats de chaque catégorie et le nom des catégorie  
         $plats = $categorie->getPlats();
         $nomCategorie=$categorie->getLibelle();
         
         return $this->render('catalogue/plats.html.twig', [
            'plats' => $plats,
            'nomCategorie'=>$nomCategorie
        ]);
     }


}

