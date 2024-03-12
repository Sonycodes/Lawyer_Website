<?php
include_once './utilities/composant_general/header.php';
include_once './utilities/navigation/nav_accueil.php';

?>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-4 d-flex justify-content-md-end justify-content-center align-items-center"> 
      <img src="/assets/logo/logo_vierge.svg" class="img-fluid" alt="logo titre accueil" style="max-height: 180px; max-width: 250px">
    </div>
    <!-- il est en 6 sinon le avocate ne se met pas la ou je veux -->
    <div class="col-md-6">
      <div class="container">
        <h1 class="display-1 text-center text-md-start text-duck">Jane Becker</h1>
        <h2 class="h1 text-center text-gray">Avocate</h2>  
      </div>
    </div>  
  </div>
</div>

<?php
include './utilities/composants/section_about.php';
require_once ('utilities/composants/aboutCards/cards.php');
include './utilities/composants/section_cabinet.php';
include './utilities/composants/rendez-vous.php';
?>

</body>
<?php
include_once './utilities/composant_general/footer.php'
?>
