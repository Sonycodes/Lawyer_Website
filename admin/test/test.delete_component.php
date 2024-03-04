
<form action="deleteItems.php" method="post">
    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
    <input type="hidden" name="type" value="article">
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>

<form action="deleteItems.php" method="post">
    <input type="hidden" name="id" value="<?php echo $question['id']; ?>">
    <input type="hidden" name="type" value="question">
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>



<?php
// Vérification du type avant de confirmer la suppression
if(isset($_POST['type']) && ($_POST['type'] === 'question' || $_POST['type'] === 'article')) {
    $id = $_POST['id'];
    $type = $_POST['type'];
} else {
    // Redirection en cas de type non valide
    header("Location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de suppression</title>
</head>
<body>
    <h1>Etes-vous sûr de vouloir supprimer cet élément ?</h1>
    <form action="deleted.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="type" value="<?php echo $type; ?>">
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <a href="dashboard.php" class="btn btn-warning">Ne pas supprimer</a>
</body>
</html>


// 


<?php
// deleted.php 
// Vérifier si l'ID et le type sont définis dans la requête POST

if(isset($_POST['id']) && isset($_POST['type'])) {
    
    // Suppression en fonction du type d'élément
    if($_POST['type'] === 'article') {
        // Supprimer l'article avec l'ID correspondant
        $stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
        $stmt->execute([$_POST['id']]);
    } elseif($_POST['type'] === 'question') {
        // Supprimer la question avec l'ID correspondant
        $stmt = $conn->prepare("DELETE FROM questions WHERE id = ?");
        $stmt->execute([$_POST['id']]);
    } else {
        // Gérer le cas où le type n'est pas reconnu
        echo "Type d'élément non valide.";
        exit();
    }

    // Redirection vers une page de confirmation ou ailleurs
    header("Location: confirmation.php?type=" . $_POST['type']);
    exit();
} else {
    // Gérer le cas où l'ID ou le type n'est pas défini
    echo "ID ou type non défini.";
    exit();
}
?>

?>
