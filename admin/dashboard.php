<?php
require_once '../function/questions.fn.php';

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
                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Questions</a>
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
                                <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                                    <?php echo $question['question']; ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $index; ?>">
                                <div class="accordion-body">
                                    <?php echo $question['reponse']; ?>
                                </div>
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





    <div class="container">
        <h2>Tableau de bord FAQ</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="question">Question :</label>
                <input type="text" class="form-control" id="question" name="question">
            </div>
            <div class="form-group">
                <label for="reponse">Réponse :</label>
                <textarea class="form-control" id="reponse" name="reponse"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
        </form>

        <h3>Liste des questions :</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Réponse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["question"] . "</td>";
                        echo "<td>" . $row["reponse"] . "</td>";
                        echo "<td>
                                <a href='#'>Modifier</a> |
                                <a href='#'>Supprimer</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Aucune question trouvée.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <?php foreach ($questions as $question) { ?>
        <div class="accordion-item mb-4 shadow-sm">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <?php echo $question['question']; ?>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                <div class="accordion-body">
                    <?php echo $question['reponse']; ?>
                </div>
            </div>
        </div>
        </table>


    <?php } ?>

</body>

</html>