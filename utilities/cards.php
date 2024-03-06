<?php
include 'competence_table.php';
include_once 'header.php';
require_once '../config/conn.php'; 
require_once '../function/questions.fn.php';

?>


<!-- cards compétences -->
    <div class="container">
        <div class="row justify-content-center flex-wrap">
            <?php
            // Parcourir le tableau de compétences
            foreach ($competences as $competence) {
                // Extraire les données de la compétence
                $title = $competence[0];
                $icon = $competence[1];
                $description = $competence[2];
            ?>
                <div class="col-lg-3 mt-3"> 
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <!-- Affichage de l'icône et du titre -->
                                <i class='<?php echo $icon; ?> compImg'></i>
                                <h1><?php echo $title; ?></h1>
                            </div>
                            <div class="flip-card-back d-flex justify-center align-items-center p-3">
                                <!-- Affichage de la description -->
                                <p><?php echo $description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


