<?php 
require_once dirname(__DIR__, 2) . '/config/conn.php';
require_once dirname(__DIR__, 2) . '/function/questions.fn.php';
require_once dirname(__DIR__, 2) . '/function/articles.fn.php';

// Récupérer les données extérieures
$currentId = $_POST['id'];
$type = $_POST['type'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
        if ($type === 'question') {
            try {
               // Stocker les données actuelles avant la mise à jour
               $question = htmlspecialchars($_POST['question']);
               $reponse = htmlspecialchars($_POST['reponse']);
               $currentData = findQuestionById($conn, $currentId); 
               $oldData = $currentData;

               // Préparer les valeurs à mettre à jour
               $updateValues = array();
       
               // Vérifier chaque champ s'il a changé
               if ($question != $oldData['question']) {
                   $updateValues[] = "question = '$question'";
               }
               if ($reponse != $oldData['reponse']) {
                   $updateValues[] = "reponse = '$reponse'";
               }
       
               // S'il y a des valeurs à mettre à jour, exécuter la requête SQL
               if (!empty($updateValues)) {
                   $updateString = implode(', ', $updateValues);
                   $sql = "UPDATE questions SET $updateString WHERE id = '$currentId'";
                   $conn->query($sql);
               }
       
               // Message de réussite
               echo "Question updated successfully";
       
               // Redirection après un court délai
               header("Refresh: 3; url=/admin/dashboard.php");
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
    } elseif ($type === 'article') {
        $titre = htmlspecialchars($_POST['titre']);
        $lien = htmlspecialchars($_POST['lien']);
        $description = htmlspecialchars($_POST['description']);
        $currentData = findArticleById($conn, $currentId); 
        $oldData = $currentData;
        try {
             // Préparer les valeurs à mettre à jour
             $updateValues = array();
       
             // Vérifier chaque champ s'il a changé
             if ($titre != $oldData['titre']) {
                 $updateValues[] = "titre = '$titre'";
             }
             if ($lien != $oldData['lien']) {
                 $updateValues[] = "lien = '$lien'";
             }
             if ($description != $oldData['description']) {
                $updateValues[] = "description = '$description'";
            }
     
             // S'il y a des valeurs à mettre à jour, exécuter la requête SQL
             if (!empty($updateValues)) {
                 $updateString = implode(', ', $updateValues);
                 $sql = "UPDATE articles SET $updateString WHERE id = '$currentId'";
                 $conn->query($sql);
             }
     
             // Message de réussite
             echo "Article modifié avec succes";
     
             // Redirection après un court délai
             header("Refresh: 3; url=/admin/dashboard.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        // Redirection en cas de type invalide
       var_dump($type);
        exit;
    }
}
?>
