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

    <div class="container">
      
      
        <div class="row">
          <div class="col-lg-9 mx-auto">
            <!-- Accordion -->
            <div id="accordionExample" class="accordion shadow">
      
              <!-- Accordion item 1 -->
              <div class="card">
                <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                  <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">Collapsible Group Item #1</a></h6>
                </div>
                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                  <div class="card-body p-5">
                    <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                  </div>
                </div>
              </div>
      
              <!-- Accordion item 2 -->
              <div class="card">
                <div id="headingTwo" class="card-header bg-white shadow-sm border-0">



                  <h6 class="mb-0">
                    
                  <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark collapsible-link py-2">Collapsible Group Item #2</a>
                
                  <button class="collapsible-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
                  Collapsible Group Item #
                    </button>
                
                </h6>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                  <div class="card-body p-5">
                    <p class="font-weight-light m-0">hi</p>
                  </div>
                </div>
              </div>
      
              <!-- Accordion item 3 -->
              <?php
            require_once dirname(__DIR__) . '/config/conn.php';
            require_once dirname(__DIR__) . '/function/questions.fn.php';
            $conn = getPDOlink($config);
            $questions = findAllQuestions($conn); 
            foreach ($questions as $question) {
        ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $question['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $question['id'] ?>">
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
          </div>
        </div>
      </div>
      
</body>
</html>
