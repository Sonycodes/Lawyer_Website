<?php
include_once './utilities/composant_general/header.php';
include_once './utilities/navigation/nav_general.php';
?>


<div class="container m-auto text-duck text-center my-5 mt-4">
    <section class="container col-10">
        <p class="h6">Je vous accompagne, vous conseille et vous représente en cas de litige en droit du 
            travail, mais également en droit de la sécurité sociale, <br>en droit de la famille et en cas 
            d’expulsions locatives. <br><br>
            La liste est non exhaustive;  si vous avez un doute,<a href="page_contact.php"><br>
                <u class="fw-bold">contactez-moi.</u> </a></p> 
        <p>Voici quelques exemples de difficultés pour lesquelles vous pouvez me consulter et de
            conseils que je pourrais vous apporter.</p>
    </section>
    <section class="container">
        <?php
        include './utilities/composants/questions_accordeon.php'
        ?>
    </section>
    <section class="container col-10">
        <h2 class="h2 m-4 p-4">Liens utiles</h2>
        <p class="h6">Découvrez des ressources fiables et complètes sur le droit du travail, conçues pour vous
informer et vous guider efficacement dans vos démarches professionnelles.</p>
    </section>
    <section class="container  row m-auto">
        <?php
        include './utilities/composants/link_card.php'
        ?>
    </section>

</div>

</div>


<?php
include_once './utilities/composant_general/footer_general.php'
?>

</html>