<?php
require_once '../config/conn.php'; 
require_once '../function/questions.fn.php';
$conn = getPDOlink($config);
$currentId = $_POST['id'];
$question = findQuestionById($conn,$currentId);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <h1> Etes-vous sûre de vouloir supprimer cet élément ? <h2>

    <form action="deleted.php" method="post">
    <input type="hidden" name="id" value="<?php echo $question['id']; ?>">
    <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <a href="dashboard.php" class="btn btn-warning">Ne pas supprimer</a>

</body>
</html>