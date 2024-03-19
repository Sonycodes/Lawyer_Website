<?php
require_once '../config/conn.php';
require_once '../function/database.fn.php';
require_once dirname(__DIR__) . '/function/questions.fn.php';
require_once dirname(__DIR__) . '/function/ressources.fn.php';
require_once dirname(__DIR__) . '/function/articles.fn.php';
require_once './login/includes/config_session.inc.php';
require_once './login/includes/login_view.inc.php';

//vérifie si on s'est connécté sinon redirection vers page de connexion
// session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ./login/login.poo.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>


<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Administration - Gestion du Droit du Travail</h1>
        <div class="d-flex justify-content-between">
            <h3><?php 
            output_username();
            ?></h3>
            <!-- <p>Bienvenue, 
                <?php //echo $_SESSION['user']; ?>
            !</p> -->
            <a href="../index.php">Visualiser le site</a>
            <a href="./login/logout.php">Se déconnecter</a>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questionsContent" role="tab" aria-controls="questions" aria-selected="false">Questions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="articles-tab" data-toggle="tab" href="#articlesContent" role="tab" aria-controls="articles" aria-selected="false">Articles</a>
            </li>
        </ul>

        <?php
        $questions = findAllQuestions($conn);
        $articles = findAllArticles($conn);
        ?>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Questions -->
            <div class="tab-pane fade show active" id="questionsContent" role="tabpanel" aria-labelledby="questions-tab">
                <h2>Questions</h2>
                <!-- Tableau pour afficher les questions -->
                <!-- Structure du tableau -->
                <!-- Insérer les données dynamiquement ici -->
                <?php foreach ($questions as $index => $question) { ?>
                    <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                            <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                                <?php echo $question['question']; ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $index; ?>">
                            <div class="accordion-body">
                                <?php echo $question['reponse']; ?>
                            </div>
                        </div>

                        <!-- Boutons pour modifier la question -->
                        <div class="d-flex justify-content-end mt-2">

                            <!-- Lien pour modifier une question -->
                            <a href="./CRUD/updateForm.php?type=question&id=<?php echo $question['id']; ?>" class="btn btn-warning me-2">Modifier</a>


                            <!-- Boutons supprimer question -->
                            <!-- Formulaire pour la suppression d'une question -->
                            <form action="./CRUD/confirmdelete.php" method="post">
                                <!-- Champ caché contenant l'ID de la question à supprimer -->
                                <input type="hidden" name="id" value="<?php echo $question['id']; ?>">
                                <!-- Champ caché indiquant le type de l'élément à supprimer (dans ce cas, une question) -->
                                <input type="hidden" name="type" value="question">
                                <!-- Bouton de soumission du formulaire pour la suppression -->
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>

                        </div>
                    </div>
                <?php } ?>
                <!-- Bouton Ajouter -->
                <a href="./CRUD/addForm.php?type=question" class="btn btn-primary mb-3">Ajouter une Question</a>
            </div>


    <!-- Articles -->
            <div class="tab-pane fade" id="articlesContent" role="tabpanel" aria-labelledby="articles-tab">
                <h2>Articles</h2>
                 <!-- Bouton add -->
                 <a href="./CRUD/addElement.php?type=article" class="btn btn-primary mb-3">Ajouter un Article</a>
                <!-- Tableau pour afficher les articles -->
                <!-- Structure du tableau -->
                <!-- Insérer les données dynamiquement ici -->
                <?php foreach ($articles as $i => $article) { ?>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title heading<?php echo $i; ?>" id="heading<?php echo $article['titre']; ?>"></h5>
                                    <p> <?php echo $article['description']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <a href="<?php echo $article['lien']; ?>"><?php echo $article['lien']; ?></a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boutons pour modifier et supprimer l'article -->
                    <div class="d-flex justify-content-end mt-2">
                        <a href="./CRUD/updateForm.php?type=article&id=<?php echo $article['id']; ?>" class="btn btn-warning me-2">Modifier</a>

                        <form action="./CRUD/confirmdelete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                            <input type="hidden" name="type" value="article">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>

                <?php } ?>
            </div>
        </div>

    </div>

    <!-- Modal d'ajout de question -->
    <div class="modal fade" id="addQuestionModal" tabindex="-1" role="dialog" aria-labelledby="addQuestionModalLabel" aria-hidden="true">
        <!-- Contenu du modal -->
    </div>

    <!-- Modal d'ajout d'article -->
    <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
        <!-- Contenu du modal -->
    </div>


    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/faqs/faq-2/assets/css/faq-2.css">
    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>