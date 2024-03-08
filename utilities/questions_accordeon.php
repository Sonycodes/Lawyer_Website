 <?php
 include __DIR__.'/../function/questions.fn.php'; 
 ?>
 <div class="container py-5">  
        <div class="row">
          <div class="col">
            <!-- Accordion -->
            <div id="accordionExample" class="accordion shadow">
      
              <!-- Accordion item 3 -->
              <?php
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
      