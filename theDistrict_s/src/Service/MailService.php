<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($expediteur, $destinataire, $sujet, $message, $htmlTemplate, $context)
    {
        $email = (new TemplatedEmail())
            ->from($expediteur)
            ->to($destinataire)
            ->subject($sujet)
            ->text($message)
            ->htmlTemplate('Email/email.html.twig')
            ->context($context);

        $this->mailer->send($email);
    }
}
