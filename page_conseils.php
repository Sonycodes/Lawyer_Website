<?php
include_once './utilities/header.php';
include_once './utilities/nav_general.php';
?>


<div class="container m-auto text-duck text-center my-5">
    <section class="container col-10">
        <p class="h6">Je vous accompagne, vous conseille et vous représente en cas de litige en droit du travail, mais également en droit de la sécurité sociale, en droit de la famille et en cas d’expulsions locatives. <br>Voici quelques exemples de mes domaines d’intervention.
            La liste est non exhaustive : <br>si vous avez un doute,<a href="page_contact.php"><u class="fw-bold">contactez-moi.</u> </a></p>
    </section>
    <section class="container">
        <?php
        include './utilities/questions_accordeon.php'
        ?>
    </section>
    <section class="container col-10">
        <h2 class="h2">Liens utiles</h2>
        <p class="h6">Découvrez des ressources fiables et complètes sur le droit du travail, conçues pour vous informer et vous guider efficacement dans vos démarches professionnelles.</p>
    </section>
    <section class="container  row m-auto">
        <?php
        include './utilities/link_card.php'
        ?>
    </section>
    <?php
include_once './utilities/footer_general.php'
?>











</div>

















<?php
include_once './utilities/footer_general.php'
?>

</html>