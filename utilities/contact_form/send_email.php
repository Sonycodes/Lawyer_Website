<?php
// Utilisation des classes PHPMailer pour l'envoi d'e-mails
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Nettoyage des données entrées par l'utilisateur
$name = clean_input($_POST["name"]);
$firstName = clean_input($_POST["firstName"]);
$email = clean_input($_POST["email"]);
$message = clean_input($_POST["message"]);
$sujet = clean_input($_POST["sujet"]);


// Inclusion de la bibliothèque PHPMailer
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

// Création d'une nouvelle instance de PHPMailer
$mail = new PHPMailer;

// Configuration de PHPMailer pour utiliser SMTP
$mail->isSMTP();
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.hostinger.fr';
$mail->SMTPAuth = true;
$mail->Username   = 'contact@becker-avocate.fr'; // Nom d'utilisateur SMTP
$mail->Password   = 'Bananes-98'; // Mot de passe SMTP
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Activation du chiffrement TLS
$mail->Port       = 587; // Port SMTP

// Définition de l'expéditeur
$mail->setFrom('contact@becker-avocate.fr', $name, $firstName); // Adresse e-mail de l'expéditeur

// Ajout du destinataire
$mail->addAddress('arandaligia8@gmail.com', 'Moi'); // Adresse e-mail du destinataire

// Ajout d'une adresse de réponse
if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
  // Définition du sujet de l'e-mail
  $mail->Subject = $sujet;
  $mail->isHTML(false); // Spécification du format de l'e-mail (ici, texte brut)

  // Corps de l'e-mail
  $mail->Body = <<<EOT
E-mail: {$_POST['email']}
Nom: {$_POST['name']}
Nom: {$_POST['firstName']}
Message: {$_POST['message']}
EOT;

  // Envoi de l'e-mail et gestion d'erreurs
  if (!$mail->send()) {
    $msg = 'Désolé, quelque chose a mal tourné. Veuillez réessayer plus tard.';
  } else {
    $msg = 'Message envoyé ! Merci de nous avoir contactés.';
  }
} else {
  $msg = 'Partagez-les avec nous !';
}
echo $msg;
header("Refresh: 3; url=/index.php");
// Fonction pour nettoyer les données entrées par l'utilisateur
function clean_input($data)
{
  // Supprime les espaces en début et en fin de chaîne
  $data = trim($data);
  // Supprime les barres obliques inverses (\)
  $data = stripslashes($data);
  // Convertit les caractères spéciaux en entités HTML
  $data = htmlspecialchars($data);
  return $data;
}
