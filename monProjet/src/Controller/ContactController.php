<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\DemoFormType;
use App\Form\ContactFormType;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/*class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, MailService $ms): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //on crée une instance de Contact
            $message = new Contact();
            // Traitement des données du formulaire
            //...
            //persistance des données

            $entityManager->persist($message);
            $entityManager->flush();

            //envoi de mail avec notre service MailService
            $email = $ms->sendMail('hello@example.com', $message->getEmail(), $message->getObjet(), $message->getMessage() );
//            dd($message->getEmail());

        }
    }
}
    /**public function sendEmail(MailerInterface $mailer, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérez les données du formulaire
            $data = $form->getData();

            // Créez un objet Contact
            $message = new Contact();
            $message->setEmail($data->getEmail());
            $message->setObjet($data->getObjet());
            $message->setMessage($data->getMessage());

            // Persistez l'objet Contact
            $entityManager->persist($message);
            $entityManager->flush();

            // Créez un email avec TemplatedEmail
            $email = (new TemplatedEmail())
                ->from('hello@example.com')
                ->to($data->getEmail())
                ->subject($data->getObjet())
                ->htmlTemplate('emails/contact_email.html.twig')
                ->context([
                    'objet' => $data->getObjet(),
                    'mail' => $data->getEmail(),
                    'message' => $data->getMessage(),
                ]);

            try {
                $mailer->send($email);
                $this->addFlash('success', 'Le formulaire a été soumis avec succès et l\'e-mail a été envoyé.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'envoi de l\'e-mail : ' . $e->getMessage());
            }

            // Redirigez l'utilisateur vers une autre page
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}*/

