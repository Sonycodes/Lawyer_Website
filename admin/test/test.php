
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

/* 

"<h1> Etes-vous sûre de vouloir supprimer cet élément ? <h2>
    <form action="deleted.php" method="post">
    <input type="hidden" name="id" value="<?php echo $question['id']; ?>,<?php echo $article['id']; ?>">
    <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <a href="dashboard.php" class="btn btn-warning">Ne pas supprimer</a>" 
    est ce que ça peut marcher pour informer du fait qu'on voudrait supprimer la question ou l'article, 
    dépendant de ce qu'on a cliqué auparavant, pour pouvoir utiliser une page delete.php pour deux catégories 
    différentes ?

ChatGPT
Oui, votre approche semble correcte pour gérer la suppression d'éléments, que ce soit une question ou un article,
 en fonction de ce qui a été sélectionné précédemment. Cependant, vous devez adapter votre script deleted.php 
 pour qu'il puisse gérer les suppressions en fonction des paramètres reçus.

Voici comment vous pourriez procéder :

Modifiez votre formulaire pour inclure une variable supplémentaire, par exemple type, pour indiquer le type d'élément à supprimer (question ou article).
Dans deleted.php, analysez cette variable type pour décider comment traiter la suppression.

Voici comment vous pourriez mettre en œuvre ces changements dans votre code :
html
Copy code
<h1>Êtes-vous sûr de vouloir supprimer cet élément ?</h1>

<form action="deleted.php" method="post">
    <input type="hidden" name="id" value="<?php echo $question['id']; ?>,<?php echo $article['id']; ?>">
    <!-- Ajouter un champ caché pour indiquer le type -->
    <input type="hidden" name="type" value="<?php echo isset($question) ? 'question' : 'article'; ?>">
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
<a href="dashboard.php" class="btn btn-warning">Ne pas supprimer</a>
Dans deleted.php, vous pouvez récupérer la valeur de type pour décider comment traiter la suppression :

php
Copy code
<?php
// Vérifier si l'ID et le type ont été soumis
if (isset($_POST['id'], $_POST['type'])) {
    // Récupérer l'ID et le type depuis le formulaire
    $id = $_POST['id'];
    $type = $_POST['type'];

    // Séparer les ID s'ils sont multiples
    $ids = explode(',', $id);

    // Traiter la suppression en fonction du type
    switch ($type) {
        case 'question':
            // Supprimer les questions avec les ID fournis
            foreach ($ids as $questionId) {
                // Supprimer la question avec l'ID $questionId
            }
            break;
        case 'article':
            // Supprimer les articles avec les ID fournis
            foreach ($ids as $articleId) {
                // Supprimer l'article avec l'ID $articleId
            }
            break;
        default:
            // Type invalide
            echo "Type invalide";
            break;
    }
} else {
    // ID ou type non fourni
    echo "ID ou type non fourni";
}
?>
Assurez-vous d'adapter la logique de suppression dans deleted.php en fonction du type d'élément à supprimer.





