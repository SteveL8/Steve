<?php

namespace App\Controller;
use App\Entity\Plat;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController

{    # Afficher le contenu du panier
    #[Route('/panier', name: 'panier')]
    public function index(SessionInterface $session, PlatRepository $platRepository )
    { 
       
        
        $panier=$session->get("panier",[]);
       
       $data=[];
       $total=0;
       // Parcours le panier pour récupérer les informations des plats
       foreach ($panier as $id => $quantite) {
        $plat=$platRepository->find($id);
        $data[]=[
            "plat"=>$plat,
           "quantite"=> $quantite
        ];
        $total+=$plat->getPrix()*$quantite;
        
       }
        return $this->render('panier/index.html.twig', [
          'data'  =>$data,
          'total'  =>$total
        ]);
      
    }
     # Ajouter un plat au panier
    #[Route('/panier/plat/{id}', name: 'ajouterPanier')]
    public function ajouter(Plat $plat, SessionInterface $session, PlatRepository $platRepository): Response
    {
        
        $id=$plat->getId();
        
         # Récupération du panier depuis la session
        $panier=$session->get("panier",[]);
       
 
         # Ajout du plat au panier avec une quantité de 1 s'il n'est pas présent, sinon, incrémentation de la quantité
        if (empty($panier[$id])) {
            $plat=$platRepository->find($id);
            $panier[$id]=1;
        }
        else{
            $plat=$platRepository->find($id);
            $panier[$id]++ ;
        }

         # Maj du panier dans la session
        $session->set("panier",$panier);
        

        return $this->redirectToRoute('panier', [
          
        ]);
    }

     #Modifier la quantité d'un plat
    #[Route('/ajouter/{id}', name: 'ajouter')]
public function modifier(Plat $plat, SessionInterface $session)
{
    $id = $plat->getId();
    $panier = $session->get('panier', []);

    if (!empty($panier[$id])) {
        $quantite = $_POST['quantite'];

        $panier[$id] = max(1, $quantite);
    }

    $session->set('panier', $panier);

    return $this->redirectToRoute('panier');
}


    # Supprimer un plat
    #[Route('/supprime/{id}', name: 'supprime')]
    public function delete(Plat $plat, SessionInterface $session)
    {
        
        $id = $plat->getId();

        
        $panier = $session->get('panier', []);

         #Supprime du plat s'il est présent dans le panier
        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        $session->set('panier', $panier);
        

        return $this->redirectToRoute('panier');
    }

}