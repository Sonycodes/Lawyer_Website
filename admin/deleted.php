<?php
require_once '../config/conn.php'; 
require_once '../function/questions.fn.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Appel de la fonction pour supprimer la question
    if(deleteQuestionById($conn, $id)) {
        // La suppression a réussi
        echo "L'élément a été supprimé avec succès.";
    } else {
        // La suppression a échoué
        echo "Une erreur s'est produite lors de la suppression de l'élément.";
    }
} else {
    echo "ID non spécifié.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de suppression</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<h1>Vous avez supprimé l'élément!</h1>
    
</body>
</html>
