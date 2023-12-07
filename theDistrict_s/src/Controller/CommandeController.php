<?php

namespace App\Controller;

use App\Form\CommandeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Event\CommandeEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use App\Service\MailService;
use DateTime;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'commande')]
    public function Commande(Request $request, SessionInterface $session, EntityManagerInterface $manager, EventDispatcherInterface $dispatcher,  MailService $mailService): Response
    {   
        # Création d'un formulaire 
        $formCommande = $this->createForm(CommandeFormType::class);
        # Gèrer la requête du formulaire 
        $formCommande->handleRequest($request);
        # Vérifie si le formulaire a été soumis et validé
        if ($formCommande->isSubmitted() && $formCommande->isValid()) {
            # Récupère l'utilisateur connecté
            $user = $this->getUser();

            if ($user instanceof \App\Entity\User) {
                $userId = $user->getId();
            } else {
    
                $userId = null;
                   }
            # Récup des données du formulaire 
            $commande =$formCommande->getData();
            # Configuration de la commande 
            $commande->setDateCommande(new DateTime());
            $commande->setEtat(0);
            $commande->setUtilisateur($this->getUser());
            
            # Envoie un email pour comfirmer la commande
            $mailService->sendMail(
                'the_district@gmail.fr',
                $commande->getUtilisateur()->getEmail(),
                'Confirmation de votre commande',
                'Votre Commande est passée avec succès',
                'Email/Email.html.twig',
                ['commande' => $commande]
            );
           
           
            $manager->persist($commande);
            

        
            $event = new CommandeEvent($commande);
            $dispatcher->dispatch($event, 'commande.passee');
           
            
            $session->remove("panier");

          
          $this->addFlash('success', 'Votre commande a été passée avec succès.');

        }
    
        return $this->render('commande/index.html.twig', [
            "formCommande"=>$formCommande,
        ]);
        
}
}