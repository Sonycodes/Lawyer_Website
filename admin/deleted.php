<?php
require_once '../config/conn.php'; 
require_once '../function/questions.fn.php';

//recupérer 
$currentId = $_POST['id'];
// $delete = deleteQuestionById($conn, $currentId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération de l'ID à supprimer depuis le formulaire POST
    $currentId = isset($_POST['id']) ? $_POST['id'] : null;
    
    // Vérification que l'ID est valide
    if ($currentId !== null) {
        // Connexion à la base de données
        $conn = getPDOlink($config); // Assurez-vous d'avoir défini $config auparavant avec les informations de connexion
        
        // Suppression de la question par son ID
        try {
            $delete = deleteQuestionById($conn, $currentId);
            
            // Vérification si la suppression a réussi
            if ($delete) {
                // Message de réussite
                echo "Question supprimée avec succès.";
                
                // Redirection après un délai
                header("Refresh: 3; url=/admin/dashboard.php");
            } else {
                // Message en cas d'échec de la suppression
                echo "Une erreur s'est produite lors de la suppression de la question.";
            }
        } catch (PDOException $e) {
            // Gestion des erreurs PDO
            echo "Erreur: " . $e->getMessage();
        }
    } else {
        // Message en cas d'ID non valide
        echo "ID non valide.";
    }
}


?>
