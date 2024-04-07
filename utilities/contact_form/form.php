<div class="container bg-container p-5 text-center rounded-2 text-duck col z-index-0" style="z-index: 0 !important;">
    <h2 class="">Formulaire de contact</h2>
    <!-- Formulaire de contact -->
    <form id="contactForm" method="POST" action="/utilities/contact_form/send_email.php" class="mb-3">
      <!-- Champ pour le nom -->
      <div class="mb-3">
        <!-- <label for="name" class="form-label">Nom</label> -->
        <input type="text" class="form-control bg-light-beige shadow" id="name" name="name" placeholder="Votre nom">
      </div>
       <!-- Champ pour le prénom -->
       <div class="mb-3">
        <!-- <label for="first-name" class="form-label">Prénom</label> -->
        <input type="text" class="form-control bg-light-beige shadow" id="first-name" name="firstName" placeholder="Votre prénom">
      </div>
        <!-- Champ pour le sujet -->
        <div class="mb-3">
        <!-- <label for="first-name" class="form-label">Prénom</label> -->
        <input type="text" class="form-control bg-light-beige shadow" id="sujet" name="sujet" placeholder="Sujet">
      </div>
      <!-- Champ pour l'adresse email -->
      <div class="mb-3">
        <!-- <label for="email" class="form-label">Adresse Email</label> -->
        <input type="email" class="form-control bg-light-beige shadow" id="email" name="email" placeholder="Votre email">
      </div>
      <!-- Champ pour le message -->
      <div class="mb-3">
        <!-- <label for="message" class="form-label">Message</label> -->
        <textarea class="form-control bg-light-beige shadow" id="message" name="message" rows="5" maxlength="500" placeholder="Votre message"></textarea>
        <!-- Information sur la limite de caractères -->
      </div>
      <!-- Bouton d'envoi -->
      <button type="submit" class="btn bg-duck eggshell">Envoyer</button>
    </form> 
     <small class="form-text text-duck">@2024 Politique de confidentialité</small>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("contactForm");

        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Empêche la soumission du formulaire par défaut

            // Validation des champs du formulaire
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const message = document.getElementById("message").value;
            const sujet = document.getElementById("sujet").value;

            if (name === "" || email === "" || message === "" || sujet === "") {
                alert("Veuillez remplir tous les champs du formulaire.");
                return;
            }

            // Validation de l'adresse e-mail avec une regex simple
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Veuillez saisir une adresse e-mail valide.");
                return;
            }

            // Si la validation réussit, soumettez le formulaire
            form.submit();
        });
    });
    // penser à rajouter un rejex pour ne pas pouvoir mettre des chiffres, essayé mais ne marche pas, je réésayyerais plus tard
    
  </script>







<div class="container bg-container p-5 text-center rounded-2 text-duck col z-index-0" style="z-index: 0 !important;">
    <h2 class="">Formulaire de contact</h2>
    <!-- Formulaire de contact -->
    <form id="contactForm" method="POST" action="/utilities/contact_form/send_email.php" class="mb-3">
      <!-- Champ pour le nom -->
      <div class="mb-3">
        <!-- <label for="name" class="form-label">Nom</label> -->
        <input type="text" class="form-control bg-light-beige shadow" id="name" name="name" placeholder="Votre nom" required>
      </div>
       <!-- Champ pour le prénom -->
       <div class="mb-3">
        <!-- <label for="first-name" class="form-label">Prénom</label> -->
        <input type="text" class="form-control bg-light-beige shadow" id="first-name" name="firstName" placeholder="Votre prénom"  required>
      </div>
        <!-- Champ pour le sujet -->
        <div class="mb-3">
        <!-- <label for="first-name" class="form-label">Prénom</label> -->
        <input type="text" class="form-control bg-light-beige shadow" id="sujet" name="sujet" placeholder="Sujet"  required>
      </div>
      <!-- Champ pour l'adresse email -->
      <div class="mb-3">
        <!-- <label for="email" class="form-label">Adresse Email</label> -->
        <input type="email" class="form-control bg-light-beige shadow" id="email" name="email" placeholder="Votre email" required>
      </div>
      <!-- Champ pour le message -->
      <div class="mb-3">
        <!-- <label for="message" class="form-label">Message</label> -->
        <textarea class="form-control bg-light-beige shadow" id="message" name="message" rows="5" maxlength="500" placeholder="Votre message"  required></textarea>
        <!-- Information sur la limite de caractères -->
      </div>
      <!-- Bouton d'envoi -->
      <button type="submit" class="btn bg-duck eggshell">Envoyer</button>
    </form> 
     <small class="form-text text-duck">@2024 Politique de confidentialité</small>
  </div>
