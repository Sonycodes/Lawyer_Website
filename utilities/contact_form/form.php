<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Add custom styles here if needed */
  </style>
</head>
<body>
  <div class="container mt-5">
    <h2>Contactez-nous</h2>
    <!-- Formulaire de contact -->
    <form id="contactForm" method="POST" action="send_email.php">
      <!-- Champ pour le nom -->
      <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <!-- Champ pour l'adresse email -->
      <div class="mb-3">
        <label for="email" class="form-label">Adresse Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <!-- Champ pour le message -->
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" maxlength="500" required></textarea>
        <!-- Information sur la limite de caractères -->
        <small class="form-text text-muted">Maximum 500 caractères.</small>
      </div>
      <!-- Bouton d'envoi -->
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>

  <!-- Bootstrap JS (optional, if you need any JavaScript components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-EYv8hcuh5fr3Vziu3qZ/qNZfW6qRxhhXb4A8N5+Y2rS4Wz1bxFCa4Bx1ZjO0O+hz" crossorigin="anonymous"></script>
</body>
</html>