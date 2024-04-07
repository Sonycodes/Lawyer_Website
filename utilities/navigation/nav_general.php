<nav class="bg-header navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Bouton pour basculer la navigation sur mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Contenu de la barre de navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex w-100 justify-content-center space-around">
                <div class="row w-100 text-center">
                    <!-- Chaque élément de la barre de navigation est placé dans une colonne pour l'alignement -->
                    <div class="col-md">
                        <!-- Lien vers la page d'accueil -->
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                        </li>
                    </div>
                    <div class="col-md">
                        <!-- Lien vers la page des compétences -->
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" href="../competences.php">Compétences</a>
                        </li>
                    </div>
                    <div class="col-md">
                        <!-- Lien vers la page des honoraires -->
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" href="../honoraires.php">Honoraires</a>
                        </li>
                    </div>
                    <div class="col-md">
                        <!-- Lien vers la page de conseils -->
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" aria-disabled="true" href="../page_conseils.php">Conseils</a>
                        </li>
                    </div>
                    <div class="col-md">
                        <!-- Lien vers la page de contact -->
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" aria-disabled="true" href="../page_contact.php">Contact</a>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>

<?php 
// Définition du domaine du site
$domaine = 'lawyer-website/';
// Récupération de l'URL actuelle de la page
$url_actuelle = $_SERVER['SCRIPT_NAME'];

// Vérification si l'URL actuelle n'est pas celle de la page d'accueil ou du domaine principal
if ($url_actuelle !== '/index.php' && $url_actuelle !== $domaine) {
    // Affichage du logo du site
    echo '<div class="container d-flex flex-column justify-content-center my-5">';
    echo '<img src="/assets/logo/logo_title.svg" class="img-fluid" style="height: 10em;">';

    // Vérification si l'URL actuelle n'est pas celle de la page de contact
    if ($url_actuelle !== '/page_contact.php') {
        // Affichage du titre de la page actuelle
        echo '<h1 class="text-center text-duck">' . $title . '</h1>';
    }

    echo '</div>';
}
?>
