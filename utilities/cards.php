<!-- cards compétences -->
<div class="container rounded-3 pt-5 ">
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
                                    <br> <a href="#">cliquez-ici</a></p>
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



