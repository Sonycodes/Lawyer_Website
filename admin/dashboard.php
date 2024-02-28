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

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Questions -->
            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                <h2>Questions</h2>
                <!-- Tableau pour afficher les questions -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Insérer les données dynamiquement ici -->
                    </tbody>
                </table>
            </div>
            <!-- Articles -->
            <div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
                <h2>Articles</h2>
                <!-- Tableau pour afficher les articles -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Insérer les données dynamiquement ici -->
                    </tbody>
                </table>
            </div>
            <!-- Liens -->
            <div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links-tab">
                <h2>Liens</h2>
                <!-- Tableau pour afficher les liens -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>URL</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Insérer les données dynamiquement ici -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
