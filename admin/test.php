
<?php
$id = $_GET['id'];
$sth = $dbco->prepare("DELETE FROM questions WHERE id='$id' ");
$sth->execute();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentId = $_POST['id'];
    $sql = "DELETE FROM questions WHERE id = $currentId";
    $conn->query($sql);
}



if(isset($_POST['action']) && $_POST['action'] === 'delete') {
    // Traitement de la suppression
} else {
    // Annulation de la suppression, redirection vers la page dashboard.php
    header("Location: dashboard.php");
    exit;
}


function deleteQuestionById($conn, $id) {
    // Préparation de la requête SQL pour supprimer l'élément avec l'ID spécifié
    $query = "DELETE FROM questions WHERE id = :id";
    
    // Préparation de la requête
    $stmt = $conn->prepare($query);
    
    // Liaison des paramètres
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    // Exécution de la requête
    if ($stmt->execute()) {
        // La suppression a réussi
        return true;
    } else {
        // La suppression a échoué
        return false;
    }
}




// Fonction pour supprimer des données d'une table dans une base de données SQL en utilisant PDO
function deleteQuestionById2($conn, $id) {
    try {
        // Construction de la requête DELETE
        $sql = "DELETE FROM questions WHERE id = :id";
        
        // Préparation de la requête
        $stmt = $conn->prepare($sql);
        
        // Liaison des paramètres
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        // Exécution de la requête
        if ($stmt->execute()) {
            // Retourne true si la suppression réussit
            return true;
        } else {
            // Retourne false si la suppression échoue
            return false;
        }
    } catch (PDOException $e) {
        // Gestion des erreurs PDO
        echo "Erreur: " . $e->getMessage();
        return false;
    }
}

// Exécution de la fonction si la méthode de requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération de l'ID à supprimer depuis le formulaire POST
    $currentId = $_POST['id'];

    // Connexion à la base de données
    $conn = getPDOlink($config); // Assurez-vous d'avoir défini $config auparavant avec les informations de connexion

    // Suppression de la question par son ID
    if(deleteQuestionById2($conn, $currentId)) {
        echo "La question a été supprimée avec succès.";
    } else {
        echo "Une erreur s'est produite lors de la suppression de la question.";
    }
}




?>


<!-- code que j'ai utilisé pour update -->


<?php
//recupérer les donnés extérieur
$currentId = $_POST['id'];
$currentData = updateQuestionById($conn, $currentId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //récupération des valeurs du formulaire
    $question = htmlspecialchars($_POST['question']);
    $reponse = htmlspecialchars($_POST['reponse']);

    try {

        // Update the drugs table
        $sql = "UPDATE questions SET question = '$question', reponse = '$reponse' WHERE id = '$currentId'";
        $conn->query($sql);
        //message de reussite 
        echo "Product updated successfully";
        //récupére ce qu'on a envoyé
        $updatedData = $_POST;
        //compare avec ce qu'on avait avant
        $diff = array_diff_assoc($updatedData,$currentData);
        // var_dump($old); 
        // var_dump($sent) ;
        var_dump($diff) ;
        // sleep(3); ca ne marche pas donc on utilise refresh pour pouvoir afficher le message avant la redirection
        header("Refresh: 3; url=/admin/addProduit.php");
    } catch (PDOException $e) {
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }
}





