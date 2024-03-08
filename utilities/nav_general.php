<nav class="bg-header navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex w-100 justify-content-center space-around">
                <div class="row w-100 text-center">
                    <div class="col-md">
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                        </li>
                    </div>
                    <div class="col-md">
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" href="../competences.php">Compétences</a>
                        </li>
                    </div>
                    <div class="col-md">
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" href="../honoraires.php">Honoraires</a>
                        </li>
                    </div>
                    <div class="col-md">
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" aria-disabled="true" href="../page_conseils.php">Conseils</a>
                        </li>
                    </div>
                    <div class="col-md">
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
$domain = 'lawyer-website/';
// Obtient l'URL actuelle
$current_url = $_SERVER['SCRIPT_NAME'];

// Vérifie si l'URL actuelle n'est pas celle de la page index
if ($current_url !== '/index.php' && $current_url !== $domain) {
    echo '<div class="container d-flex flex-column justify-content-center my-5">';
    echo '<img src="/assets/logo/logo_title.svg" class="img-fluid" style="height: 10em;">';

    // Vérifie si l'URL actuelle n'est pas celle de la page de contact
    if ($current_url !== '/page_contact.php') {
        echo '<h1 class="text-center text-duck">' . $title . '</h1>';
    }

    echo '</div>';
}

?>
