<?php
require_once dirname(__DIR__, 2) . '/config/conn.php';
require_once dirname(__DIR__, 2) . '/function/questions.fn.php';
require_once dirname(__DIR__, 2) . '/function/articles.fn.php';
$conn = getPDOlink($config);
$question = findQuestionById($conn, $_GET['id']); 
$article = findArticleById($conn, $_GET['id']); 

// Vérifiez si le type est passé dans l'URL
if(isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    // Redirection en cas d'absence du type
    header("Location: ../dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulaire de modification des questions</title>
</head>

<body>
    <div class="card decoration-none">
<?php if($type === 'question') {?>
    <form action="updateElement.php" method="post">
    <input type="hidden" name="type" value="question">
        <input type="hidden" name="id" value="<?= isset($question['id']) ? $question['id'] : '' ?>">
        <ul>
            <li>
                <label for="question">Question : </label>
                <textarea id="question" name="question"><?= isset($question['question']) ? $question['question'] : '' ?></textarea>
            </li>
            <li>
                <label for="reponse">Réponse : </label>
                <textarea id="reponse" name="reponse"><?= isset($question['reponse']) ? $question['reponse'] : '' ?></textarea>
            </li>
            <li>
            <div class="button">
                <button type="submit">Valider les modifications</button>
            </div>
            </li>
        </ul>
    </form>
<?php } elseif ($type === 'article') { ?>
    <form action="updateElement.php" method="post">
    <input type="hidden" name="type" value="article">
        <input type="hidden" name="id" value="<?= isset($article['id']) ? $article['id'] : '' ?>">
        <ul>
            <li>
                <label for="titre">Titre : </label>
                <textarea id="titre" name="titre"><?= isset($article['titre']) ? $article['titre'] : '' ?></textarea>
            </li>
            <li>
                <label for="lien">Lien : </label>
                <textarea id="lien" name="lien"><?= isset($article['lien']) ? $article['lien'] : '' ?></textarea>
            </li>
            <li>
                <label for="description">Description: </label>
                <textarea id="description" name="description"><?= isset($article['description']) ? $article['description'] : '' ?></textarea>
            </li>
            <li>
            <div class="button">
                <button type="submit">Valider les modifications</button>
            </div>
            </li>
        </ul>
    </form>
<?php } else {
  header("Location: ../dashboard.php");
  exit;
} ?>

    </div>

</body>
</html>
