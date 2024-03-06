<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS ( dropdowns or other interactive features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Honoraires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Conseils</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container col-11  mt-5 accordion accordion-flush" id="accordionExample">

        <?php
            require_once dirname(__DIR__) . '/config/conn.php';
            require_once dirname(__DIR__) . '/function/questions.fn.php';
            $conn = getPDOlink($config);
            $questions = findAllQuestions($conn); 
            foreach ($questions as $question) {
        ?>
            <div class="accordion-item  ">
                <h2 class="accordion-header ">
                    <button class=" accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $question['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $question['id'] ?>">
                        <?= $question['question'] ?>
                    
                    </button>
                </h2>
                <div id="collapse<?= $question['id'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?= $question['reponse'] ?>
                    </div>
                </div>
            </div>
        <?php 
            } 
        ?>

    </div>

  

</body>
</html>
