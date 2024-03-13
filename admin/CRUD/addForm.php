<?php
require_once dirname(__DIR__, 2) . '/config/conn.php';
require_once dirname(__DIR__, 2) . '/function/questions.fn.php';
?>

<?php
// Vérifiez si le type est passé dans l'URL
if(isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    // Redirection en cas d'absence du type
  var_dump($type);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Gestion du Droit du Travail</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

    <!-- Affichage dynamique du formulaire en fonction du type -->
<?php if ($type === 'question') { ?>
    <!-- Formulaire pour ajouter une question -->
    <form action="addElement.php" method="post" class="d-flex flex-column justify-content-center align-items-center">
    <input type="hidden" name="type" value="question">
        <!-- Autres champs du formulaire pour ajouter une question -->
        <label for="question">Question : </label>
        <input type="text" name="question"><br>
        <label for="reponse">Réponse : </label>
        <textarea name="reponse" style="height: 100px"></textarea><br>
        <input type="submit" value="Ajouter"><br>
    </form>
<?php } elseif ($type === 'article') { ?>
    <!-- Formulaire pour ajouter un article -->
    <form action="addElement.php" method="post" class="d-flex flex-column justify-content-center align-items-center">
        <!-- Autres champs du formulaire pour ajouter un article -->
        <input type="hidden" name="type" value="article">
        <label for="titre">Titre : </label>
        <input type="text" name="titre"><br>
        <label for="lien">Lien : </label>
        <input type="text" name="lien"><br>
        <label for="description">Description : </label>
        <textarea name="description" style="height: 100px"></textarea><br>
        <!-- Ajoutez d'autres champs pour les articles si nécessaire -->
        <input type="submit" value="Ajouter"><br>
    </form>
<?php } else {
    // Redirection en cas de type invalide
    header("Location: error.php");
    exit;
} ?>


</body>

</html>