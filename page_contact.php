<?php
include_once './utilities/composant_general/header.php';
include_once './utilities/navigation/nav_general.php';
?>


<section class="container col-5 m-auto text-center text-muted">
    <p class="h6">Prêts à défendre vos droits? <br>
        Contactez-moi dès maintenant pour une assistance juridique fiable et personnalisée.</p>
</section>


<div class="container m-auto py-5 d-md-flex align-items-end">
    <div class="container bg-leaf rounded-3 shadow text-duck text-center mx-md-5 col-md-3 " style="z-index: 0 !important; background-color:#f5e4b8 !important;">
        <div class="row justify-content-center my-4 p-3 gap-3" style="z-index: 0 !important;">
            <div class="text-center">
                <h2 class="h4">Vous souhaitez prendre rendez-vous ?</h2>
            </div>

            <div class="col-md-10 row py-1 rounded-2 bg-light-beige shadow align-items-center">
                <div class="col">
                    <p class="text-center"> <small>227 Rue de Rome 13006 Marseille</small></p>
                </div>
            </div>
            <div class="col-md-10 row py-1 rounded-2 bg-light-beige shadow align-items-center">
                <div class="col">
                    <p class="text-center"> <small>Du lundi au vendredi de 09h à 17h</small></p>
                </div>
            </div>
            <div class="col-md-10 row p-2 rounded-2 bg-light-beige shadow align-items-center ">
                <div class="col-md-1">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="col">
                    <p class="text-md-end">07 72 06 23 77</p>
                </div>
            </div>
            <div class="col-md-10 row p-3 rounded-2 bg-light-beige shadow align-items-center">
                <div class="col-md-1">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="col">
                    <p class="text-md-end"> <small>contact@janebecker-avocat.fr</small></p>
                </div>
            </div>

            <div class="col-md-10 row p-3 rounded-2 bg-light-beige shadow align-items-center">
                <div class="col-md-1">
                    <i class="fas fa-calendar-days"></i>
                </div>
                <div class="col">
                    <a href="https://consultation.avocat.fr/avocat-marseille/jane-becker-46306.html">
                        <p class="text-md-end"><small>* Rendez-vous en ligne</small></p>
                    </a>
                </div>
            </div>

            <div class="mt-5 d-flex flex-column align-items-center justify-content-center text-center mt-4">
                <p><small class=" pb-2">* Redirection vers le site du Conseil National des Barreaux
                    </small></p>
                <p> <small>- payment sécurisé -</small></p>

            </div>
        </div>
    </div>


    <?php
    include './utilities/contact_form/form.php';
    ?>
</div>
<?php
include_once './utilities/composant_general/footer_general.php'
?>