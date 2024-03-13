<?php 
require_once dirname(__DIR__, 2) . '/config/conn.php';
require_once dirname(__DIR__, 2) . '/function/questions.fn.php';

// Récupérer les données extérieures
$currentId = $_POST['id'];
$currentData = findQuestionById($conn, $currentId); 

// Sécurité des données : Vous avez déjà utilisé htmlspecialchars pour éviter les attaques XSS. Cependant, lors de la mise à jour de données dans la base de données, assurez-vous d'utiliser des requêtes préparées pour éviter les injections SQL. Utiliser des requêtes préparées permet également de s'assurer que les données sont correctement échappées.

// Gestion des valeurs inchangées : Dans votre code actuel, vous vérifiez chaque champ pour voir s'il a changé avant de l'ajouter à la chaîne de mise à jour. C'est une bonne pratique pour éviter des mises à jour inutiles, mais vous pouvez également ajouter une condition pour vérifier si des champs ont été modifiés pour éviter d'exécuter la requête SQL inutilement.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $question = htmlspecialchars($_POST['question']);
    $reponse = htmlspecialchars($_POST['reponse']);

    try {
        // Stocker les données actuelles avant la mise à jour
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
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }
}
