<?php 
require_once '../config/conn.php';
require_once 'database.fn.php';


// Établir la connexion à la base de données
   $conn = getPDOlink($config);

//création fonction qui permet de récupérer les questions de la bdd pour la page ressouce

function findAllQuestions($conn){
    $sql= "SELECT * FROM `questions`";
    $requete = $conn->query($sql);
    $questions = $requete->fetchAll();
    return $questions;
}

//pour visualiser le contenu du tableau qui est récupéré (attention echo ne pourra pas afficher le tableau)
// var_dump(findAllQuestions($conn));

function findQuestionById($conn, $currentID) {
    $sql = "SELECT 
    q.id, q.question, q.reponse
    FROM questions AS q
    WHERE q.id = :currentID";
    
     // Préparation de la requête
     $stmt = $conn->prepare($sql);
    
     // Lier le paramètre
     $stmt->bindParam(':currentID', $currentID, PDO::PARAM_INT);
     
     // Exécution de la requête
     $stmt->execute();
     
     // Récupération du résultat
     $question = $stmt->fetch(PDO::FETCH_ASSOC);
 
     return $question;
}

//function pour delete les questions via leur id :


function deleteQuestionById($conn, $id) {
    // Préparation de la requête SQL pour supprimer l'élément avec l'ID spécifié
    $query = "DELETE FROM questions WHERE id = ?";
    
    // Préparation de la requête
    $stmt = $conn->prepare($query);
    
    // Liaison des paramètres
    $stmt->bind_param("i", $id);
    
    // Exécution de la requête
    if ($stmt->execute()) {
        // La suppression a réussi
        return true;
    } else {
        // La suppression a échoué
        return false;
    }
    return $question;
}

