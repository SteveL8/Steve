<?php

namespace App\EventSubscriber;

use App\Event\CommandeEvent;
use App\Service\MailService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class CommandeSubscriber implements EventSubscriberInterface
{
    private $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'commande.passee' => 'onCommandePassee',
        ];
    }

    public function onCommandePassee(CommandeEvent $event)
    {
        $commande = $event->getCommande();

        $this->mailService->sendMail(
            'the_district@gmail.fr',
            $commande->getUtilisateur()->getEmail(),
            'Confirmation de la commande',
            'Votre Commande à bien était passé',
            'Email/email.html.twig',
            ['commande' => $commande]
        );
    }
}
