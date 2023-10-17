<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail = new PHPMailer(true);

// On va utiliser le SMTP
$mail->isSMTP();

// On configure l'adresse du serveur SMTP
$mail->Host = 'localhost';

// On configure le port SMTP (587 est un port couramment utilisé)
$mail->Port = 1025;

$mail->SMTPAuth = false;

// Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('votre@email.com', 'The District Company');

// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress("client1@example.com", "Mr Client1");

// Sujet du mail
$mail->Subject = 'Confirmation de commande';

// Corps du message
$corps = "Cher client,\n\n";
$corps .= "Nous vous confirmons que votre commande a été enregistrée avec succès.\n\n";
$corps .= "Détails de la commande :\n";
$corps .= "Nom du plat : " . $_SESSION['panier'][0]['nom'] . "\n";
$corps .= "Quantité : " . $_SESSION['panier'][0]['quantite'] . "\n";
$corps .= "Total : " . calculTotal() . " €\n\n";
$corps .= "Nous vous remercions de votre commande.\n";

$mail->Body = $corps;

// On envoie le mail dans un bloc try/catch pour capturer les éventuelles erreurs
try {
    $mail->send();
    echo 'Email de confirmation envoyé avec succès';
} catch (Exception $e) {
    echo "L'envoi de l'e-mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
}
?>