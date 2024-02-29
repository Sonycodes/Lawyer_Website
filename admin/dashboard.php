<?php
require_once '../function/questions.fn.php';
require_once '../function/ressources.fn.php';
require_once '../function/articles.fn.php';

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
    <div class="container">
        <h1 class="mt-5 mb-4">Administration - Gestion du Droit du Travail</h1>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="false">Questions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="articles-tab" data-toggle="tab" href="#articles" role="tab" aria-controls="articles" aria-selected="false">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="links-tab" data-toggle="tab" href="#links" role="tab" aria-controls="links" aria-selected="false">Liens</a>
            </li>
        </ul>

        <?php
        $questions = findAllQuestions($conn);
        ?>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Questions -->
            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                <h2>Questions</h2>
                <!-- Tableau pour afficher les questions -->
                <table class="table">
                    <!-- Structure du tableau -->
                    <!-- Insérer les données dynamiquement ici -->


                    <?php foreach ($questions as $index => $question) { ?>
        <div class="accordion-item mb-4 shadow-sm">
            <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                <button class="accordion-button collapsed bg-transparent fw-bold" type="button" 
                data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" 
                aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                    <?php echo $question['question']; ?>
                </button>
            </h2>
            <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" 
            aria-labelledby="heading<?php echo $index; ?>">
                <div class="accordion-body">
                    <?php echo $question['reponse']; ?>
                </div>
            </div>
            
            <!-- Boutons pour modifier et supprimer la question -->
            <div class="d-flex justify-content-end mt-2">
                <a href="toUpdate.php?id=<?php echo $question['id']; ?>" 
                class="btn btn-warning me-2">Modifier</a>
                <form action="deleteItems.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $question['id']; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    <?php } ?> 


                    <!-- Bouton Ajouter -->
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addQuestionModal">Ajouter Question</button>
            </div>
            <!-- Articles -->
            <div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
                <h2>Articles</h2>
                <!-- Bouton Ajouter -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addArticleModal">Ajouter Article</button>
                <!-- Tableau pour afficher les articles -->
                <table class="table">
                    <!-- Structure du tableau -->
                    <!-- Insérer les données dynamiquement ici -->
                </table>
            </div>
            <!-- Liens -->
            <div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links-tab">
                <h2>Liens</h2>
                <!-- Bouton Ajouter -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addLinkModal">Ajouter Lien</button>
                <!-- Tableau pour afficher les liens -->
                <table class="table">
                    <!-- Structure du tableau -->
                    <!-- Insérer les données dynamiquement ici -->
                </table>
            </div>
        </div>

    </div>
    <!-- Modals pour les formulaires d'ajout, de modification et de suppression -->

    <!-- Modal d'ajout de question -->
    <div class="modal fade" id="addQuestionModal" tabindex="-1" role="dialog" aria-labelledby="addQuestionModalLabel" aria-hidden="true">
        <!-- Contenu du modal -->
    </div>

    <!-- Modal d'ajout d'article -->
    <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
        <!-- Contenu du modal -->
    </div>

    <!-- Modal d'ajout de lien -->
    <div class="modal fade" id="addLinkModal" tabindex="-1" role="dialog" aria-labelledby="addLinkModalLabel" aria-hidden="true">
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