<?php use PHPMailer\PHPMailer\PHPMailer;
$name = $_POST["nom"];
$firtname = $_POST["prénom"];
$email= $_POST["email"];
// on devrai peut etre rajouter sujet et cela nous permettrai de faire un système de trie dans la boite de mail

$message= $_POST["message"];
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.fr';
    $mail->SMTPAuth = true;
      //SMTP username //SMTP password
    $mail->Username   = 'contact@becker-avocate.fr';                     
    $mail->Password   = 'Bananes-98';  
      //Enable implicit TLS encryption                          
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
    $mail->Port       = 587;  
    //
    $mail->setFrom($email, $name);
    $mail->addAddress('sonia.98.tavares@gmail.com', 'Moi');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        //content of email
        $mail->Subject = 'Formulaire de contact Becker_website';
        $mail->isHTML(false);
        //  Cela commence une affectation de chaîne de texte à la propriété Body de l'objet $mail
        // chaîne heredoc est une manière pratique de définir des chaînes de texte sur plusieurs lignes en PHP. Elle est souvent utilisée pour insérer de grandes portions de texte sans avoir à échapper des guillemets ou des apostrophes
        $mail->Body = <<<EOT
E-mail: {$_POST['email']}
Nom: {$_POST['name']}
Nom: {$_POST['firstName']}
Message: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Désolé, quelque chose a mal tourné. Veuillez réessayer plus tard.';
        } else {
            $msg = 'Message envoyé ! Merci de nous avoir contactés.';
        }
    } else {
        $msg = 'Partagez-les avec nous !';
    }

    ?>