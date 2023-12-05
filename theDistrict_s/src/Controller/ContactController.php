<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {
        // Récupération des données du formulaire
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $email = $request->request->get('email');
        $tel = $request->request->get('tel');
        $demande = $request->request->get('demande');

        // Validation des champs (exemple simple)
        if (empty($nom) || empty($prenom) || empty($email) || empty($tel) || empty($demande)) {
            $this->addFlash('error', 'Tous les champs sont obligatoires');
            // Redirection vers le formulaire
            return $this->redirectToRoute('contact');
        }

        $this->addFlash('success', 'Formulaire envoyé avec succès');
        return $this->redirectToRoute('app_catalogue');
    }
}

