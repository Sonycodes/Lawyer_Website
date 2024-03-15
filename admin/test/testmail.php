<?php
$name = $_POST["nom"];
$firtname = $_POST["prénom"];
$email= $_POST["email"];
// on devrai peut etre rajouter sujet et cela nous permettrai de faire un système de trie dans la boite de mail

$message= $_POST["message"];




//on récupére les classes qui sont dans vendor
require "vendor/autoload.php";

// regarder c'est quoi un name space ?

//importer fichiers
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//on instancie mail  avec un argument true qui permet de configuerer des exceptions s'il y a des problèmes
$mail = new PHPMailer(true);

//configuartion de l'envie avec smtp avec methode
$mail->isSMTP();
//authentification(propriété)
$mail->SMTPAuth = true; 

$mail->Host = 'smtp.hostinger.fr';
// type d'inscription que le serveur utilise
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    


?>

<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire et les nettoie
    $name = clean_input($_POST["name"]);
    $email = clean_input($_POST["email"]);
    $message = clean_input($_POST["message"]);

    // Vérifie que les champs ne sont pas vides
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Vérifie que l'adresse email est valide
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Limite la taille du message à 500 caractères
            $message = substr($message, 0, 500);

            // Adresse email de destination
            $to = "soniatavaresebirdll@gmail.com";

            // Sujet de l'email
            $subject = "Nouveau message de $name";

            // Corps de l'email
            $body = "Nom: $name\n";
            $body .= "Email: $email\n";
            $body .= "Message:\n$message";

            // Envoi de l'email
            if (mail($to, $subject, $body)) {
                echo "Votre message a été envoyé avec succès.";
            } else {
                echo "Une erreur est survenue lors de l'envoi du message.";
            }
        } else {
            echo "Adresse email invalide.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
}

// Fonction pour nettoyer les données entrées par l'utilisateur
function clean_input($data) {
    // Supprime les espaces en début et en fin de chaîne
    $data = trim($data);
    // Supprime les barres obliques inverses (\)
    $data = stripslashes($data);
    // Convertit les caractères spéciaux en entités HTML
    $data = htmlspecialchars($data);
    return $data;
}
?>