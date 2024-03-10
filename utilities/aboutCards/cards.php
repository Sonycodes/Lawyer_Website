<?php
// Données
$competences = array(
    array("Droit du travail", "fa-solid fa-briefcase", "Rupture abusive du contrat de travail <br> Heures de travail non payées<br>Harcèlement moral<br>Discrimination"),
    array("Droit de la sécurité sociale", "fa-solid fa-notes-medical", "Refus de remboursement des frais médicaux<br>Contestation de l'évaluation du taux d'incapacité <br> Refus d'attribution d'une pension d'invalidité; <br> Contestation des droits aux prestations sociales"),
    array("Droit de la famille ","fa-solid fa-people-roof", "Divorce par consentement mutuel; <br> Garde et droits de visite des enfants <br> Pension alimentaire pour les enfants ou le conjoint; <br> Succession et héritage"),
    array("Expulsion locative","fa-solid fa-explosion", "Non-respect de la trêve hivernale;<br> Non-respect des conditions du bail de location par le propriétaire")
);

?>
<!-- cards compétences -->
<div class="container rounded-3 pt-5 " id="competences">
    <div class="row justify-content-center">
        <?php
        // Parcourir le tableau de compétences
        foreach ($competences as $competence) {
            // Extraire les données de la compétence
            $title = $competence[0];
            $icon = $competence[1];
            $description = $competence[2];
        ?>
            <div class="col-xl-3  col-lg-4 col-md-6 mt-3 p-4"> 
                <div class="flip-card container ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <!-- Affichage de l'icône et du titre -->
                            <i class='<?php echo $icon; ?> compImg'></i>
                            <h3 class="pt-5"><?php echo $title; ?></h3>
                        </div>
                        <div class="flip-card-back d-flex flex-column justify-center align-items-center py-5 container">
                            <!-- Affichage de la description -->
                            <p class="h6"><?php echo $description; ?></p>
                            <div>
                                <p class="pt-3">Si vous souhaitez en savoir plus,
                                    <br> <a href="competences.php">cliquez-ici</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>