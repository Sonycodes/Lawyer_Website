<?php
require_once '../config/conn.php';
require_once '../function/database.fn.php';

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Établir la connexion à la base de données
    $conn = getPDOlink($config);

    // Requête SQL préparée pour vérifier les informations d'identification et éviter les injections SQL
    $sql = "SELECT * FROM `users` WHERE username=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $password]);

    // Vérification du résultat de la requête
    $result = $stmt->fetch();
    if ($result) {
        // Si la requête a réussi, vérifiez si une ligne correspondante a été trouvée
        // L'utilisateur est authentifié
        // Démarrez la session, définissez les variables de session, etc.
        session_start();
        $_SESSION['user'] = $username;

        // Rediriger l'utilisateur vers la page d'accueil sécurisée
        header("Location: dashboard.php");
        exit; // Assurez-vous de terminer le script après la redirection
    } else {
        // Afficher un message d'erreur si les informations d'identification sont incorrectes
        echo "Identifiant ou mot de passe incorrect";
    }
}
?>
