<?php
include_once './utilities/header.php';
include_once './utilities/nav_general.php';
?>

<section class="container ms-4 row w-75">
    <h2 class="text-md-start mx-4 my-4">Comment sont définis les honoraires ?</h2>
        <div class="text-md-start mx-4 my-4">
        <p>Première consultation : </p>
        <p>En principe, la première consultation reste payante.</p>
        <p>Tarif indicatif : entre 50 et 100 € HT pour un rendez-vous de 30 min à 1 h</p>
        <p>Lorsque la consultation est tarifée, le prix est toujours fixé à l'avance, sans surprise. 
        En cas de consultations répétées, une convention d'honoraires sera établie pour clarifier les frais 
        à prévoir. Cette convention définit, en accord avec le client, le coût des services tels que 
        l'assistance, le conseil juridique, la rédaction d'actes et les plaidoiries. Elle est rédigée avant 
        toute intervention, sauf en cas d'aide juridictionnelle ou d'urgence, où elle sera formalisée 
        ultérieurement.
        Les honoraires peuvent être ajustés selon vos revenus et la complexité de votre dossier. 
        Il est à noter que les honoraires sont ajustés en fonction de vos revenus, de la matière ainsi 
        que de la complexité du dossier ou de la procédure.</p>
        </div>
    <h2 class="text-md-start mx-4 my-4">Qu’est ce que l’assurance de protection juridique ?</h2>
    <p class="text-md-start mx-4 my-4">
        L'assurance de protection juridique est une forme d'assurance qui offre une couverture en cas 
        de litiges juridiques. Elle fournit une assistance financière et/ou une représentation légale pour 
        résoudre des différends ou des problèmes juridiques. Cela peut inclure des frais d'avocat, de médiation,
         de procédure judiciaire et d'autres coûts associés à la résolution de litiges. L'assurance de 
         protection juridique peut couvrir une variété de domaines juridiques tels que le droit du travail, 
         le droit de la famille, le droit des contrats, le droit immobilier, etc. Les détails de la couverture 
         et les exclusions spécifiques varient selon les contrats d'assurance et les compagnies d'assurance.<br>
        Lien d’information sur l’assurance:<a href="https://www.service-public.fr/particuliers/vosdroits/F3049"></a>
    </p>
    <h2 class="text-md-start mx-4 my-4">Qu’est ce que l’aide juridique ?</h2>
    <p class="text-md-start mx-4 my-4">
        L'aide juridique, également connue sous le nom d'aide juridictionnelle, est un dispositif mis en place 
        pour garantir l'accès à la justice pour tous, quel que soit le niveau de revenu. Si vous rencontrez des 
        difficultés financières pour couvrir les honoraires d'un avocat, je suis disposé à intervenir en 
        bénéficiant de ce dispositif afin de vous offrir une représentation juridique de qualité, tout en 
        veillant à ce que vos droits soient pleinement respectés. Ma mission est de vous fournir le soutien 
        juridique dont vous avez besoin pour résoudre vos problèmes en toute confiance et avec succès.<br>
        Lien vers le simulateur de l’aide :<a href="https://www.service-public.fr/particuliers/vosdroits/F18074"></a>
    </p>
    <h2 class="text-md-start mx-4 my-4">Comment je peux vous aider ?</h2>
    <p class="text-md-start mx-4 my-4">
        Je peux vous aider en vous fournissant une assistance juridique spécialisée dans tous les aspects du 
        droit du travail. Que vous soyez un employeur cherchant à garantir le respect des normes légales et 
        des droits des employés, ou un salarié confronté à un litige en milieu professionnel, je suis là pour 
        vous guider à travers les complexités de la législation du travail en France. En tant qu'avocat 
        expérimenté, mon objectif est de vous fournir des conseils juridiques clairs et pertinents, de vous 
        représenter devant les tribunaux si nécessaire, et de défendre vos intérêts avec détermination. 
    </p>
</section>



<?php
    // Parcourir le tableau de compétences
    foreach ($competences as $competence) {
    // Extraire les données de la compétence
        $titre = $competence[0];
        $desc = $competence[1];
?>
        <section class="container ms-4 row w-75">
            <div>
                <h2 class="text-md-start mx-4 my-4"><?php echo $titre; ?></h2>
            </div>
            <div>
                <!-- Affichage de la description -->
                <p class="text-md-start mx-4 my-4"><?php echo $desc; ?></p>
            </div>
        </section>
    <?php
    }
?>


<?php
include_once './utilities/footer_general.php'
?>
