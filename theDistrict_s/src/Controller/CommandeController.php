<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeFormType;
use App\Repository\PlatRepository;
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
        $formCommande = $this->createForm(CommandeFormType::class);
        $formCommande->handleRequest($request);
        if ($formCommande->isSubmitted() && $formCommande->isValid()) {

           
           
            $user = $this->getUser();

            if ($user instanceof \App\Entity\User) {
                $userId = $user->getId();
            } else {
    
                $userId = null;
                   }

            // récupérer le détail de la commande
            $detail=$session->get('panier');
            // dd($detail);
           
        
            // Récupérer les éléments de la table commande
            $commande =$formCommande->getData();
            $commande->setDateCommande(new DateTime());
            $commande->setEtat(0);
            $commande->setUtilisateur($this->getUser());
            // dd($commande);

            $mailService->sendMail(
                'the_district@gmail.fr',
                $commande->getUtilisateur()->getEmail(),
                'Confirmation de la commande',
                'Votre Commande est passée avec succès',
                'Email/CommandeEmail.html.twig',
                ['commande' => $commande]
            );
           
           
            $manager->persist($commande);
            

            // déclancher l'évenement
            $event = new CommandeEvent($commande);
            // distribuer l'evenement 
            $dispatcher->dispatch($event, 'commande.passee');
           
            // supprimer le panier dans la sission 
            $session->remove("panier");

          // Ajouter un message flash de succès
          $this->addFlash('success', 'Votre commande a été passée avec succès.');

          //$this->redirectToRoute('catalogue');
        }
    
        
       
        return $this->render('commande/index.html.twig', [
            "formCommande"=>$formCommande,
        ]);
        
}
}