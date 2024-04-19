<?php include_once 'header.php'; ?>

</main>
<!-- mettre le overflow en bootstrap -->
<div class="container-fluid" >
    <footer class="pt-5" style="overflow-x: hidden;">
        <div class="row justify-content-center">
            <div class="col-md-2 mb-3 p-0  d-flex justify-content-center">
                <img src="/assets/logo/logo_footer1.svg" class="img-fluid mb-2 col-4 col-md-12" alt="logo footer"   >
            </div>
            <div class="col-md-2 mb-3 d-md-flex align-items-center justify-content-center ">
                <div class="vr d-none d-md-block"></div>
                <div class="border-top d-md-none "></div>
            </div>
            <div class="col-md-2 mb-3  text-center">
                <h5 class="mb-5">Mentions légales</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="../mentions.php" class="nav-link p-0" style="color: #FBCEB1 !important;">Voir plus</a></li>
                </ul>
                <h5 class="mb-5">Politique des cookies</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a id="cookiesModal" href="#" class="nav-link p-0" style="color: #FBCEB1 !important">Voir plus</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-3 d-md-flex align-items-center justify-content-center">
                <div class="vr d-none d-md-block"></div>
                <hr class="d-md-none flex-grow-1">
            </div>
            <div class="col-md-2 mb-3  text-center">
                <h5 class="mb-5">Contact</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">127 rue de Rome, Marseille, France</li>
                    <li class="nav-item mb-2">Tél. : + 33 (0)7 72 06 23 77</li>
                    <li class="nav-item mb-2">www.becker-avocate.fr/</li>
                    <li class="nav-item mb-2">contact@janebecker-avocat.fr</li>
                </ul>
            </div>
        </div>
    <div class="container-fluid">
        <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top">
            <p class="text-center" style="color: #F5ECD4;">© 2024 Sonia Tavares et Ligia Aranda, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div id="cookiesModal"></div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var voirPlusCookiesLink = document.querySelector("#cookiesModal");
    voirPlusCookiesLink.addEventListener("click", function(event) {
        event.preventDefault();
        $('#cookiesModal').modal('show'); // Affiche la modale des cookies
    });
});
</script>
</body>
</html>
