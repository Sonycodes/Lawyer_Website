<?php
require_once __DIR__ . '/cookiesFunctions/setCookie.php';
require_once __DIR__ . '/cookiesFunctions/setCookie.js';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>test orejime</title>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600&family=Barlow+Condensed:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://unpkg.com/orejime@latest/dist/orejime.css" />
  <script src="https://unpkg.com/orejime@latest/dist/orejime.js"></script>
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
</head>
<body>
  <div id="app">
    <div class="Container">
      <main role="main">
        <h2 class="Inset-title">Politique de confidencialité</h2>
        <div class="Inset" id="privacyPolicy">
          <p>
          Bienvenue sur notre site web. Nous utilisons des cookies pour assurer le bon fonctionnement du site 
          et pour permettre la gestion des demandes que vous nous envoyez via notre formulaire de contact.<br>
          En continuant à naviguer sur notre site, vous consentez à l'utilisation de ces cookies.
          Pour plus d'informations sur la manière dont nous utilisons les cookies et sur vos options de 
          contrôle, veuillez consulter notre politique en matière de cookies.
          </p>
          <div class="ButtonGroup" id = #app>
            <button type="button" class="Button consent-modal-button blue-button">Ouvrir la fenêtre des détails</button>
            <button type="button" class="Button reset-button">Reset les modifications</button>
            <button type="button" class="Button green-button">Accepter les cookies</button>
          </div>
        </div>
      </main>
    </div>
    <footer class="Footer" role="contentinfo"></footer>
  </div>

  <script>
    window.orejimeConfig = {
      appElement: "#app",
      privacyPolicy: "http://lawyer-website/mentions.php",
      translations: {
        en: {
          consentModal: {
            description: "Nous utilisons des cookies pour améliorer votre expérience sur notre site et pour assurer sa sécurité. Voici une explication des cookies que nous utilisons :",
          },
          "inline-tracker": {
            description: "Ce cookie nous aide à comprendre comment les visiteurs interagissent avec notre site afin d'améliorer son contenu et sa convivialité. Ce cookie n'est pas essentiel au fonctionnement de base du site, mais il contribue à son amélioration.",
          },
          "external-tracker": {
            description: "Ce cookie nous permet de surveiller l'activité sur notre site pour détecter et prévenir les menaces potentielles à la sécurité. Bien que sa finalité principale soit l'analyse, il joue également un rôle dans la sécurité de notre site.",
          },
          "always-on": {
            description: 'Dans le cas de prise de rdv sur internet, la redirection se fera vers le site du Barreau de Marseille.',
          },
          purposes: {
            analytics: "Analytics",
            security: "Security",
          },
          categories: {
            example: {
              description: "En acceptant ces cookies, vous consentez à l'utilisation de ces cookies à des fins d'analyse et de sécurité.",
            },
            "third-party": {
              description: "Nous utilisons une plateforme de paiement externe pour sécuriser vos transactions. Cette plateforme peut installer des cookies tiers pour assurer le bon fonctionnement du processus de paiement et pour des raisons de sécurité. En donnant votre consentement ci-dessous, vous acceptez l'installation de ces cookies tiers sur votre appareil.",
            },
          },
        },
      },
      apps: [
        {
          name: "inline-tracker",
          title: "Inline Tracker",
          purposes: ["analytics"],
          cookies: ["inline-tracker"],
        },
        {
          name: "external-tracker",
          title: "External Tracker",
          purposes: ["analytics", "security"],
          cookies: ["external-tracker"],
        },
        {
          name: "always-on",
          title: "J'accepte l'utilisation des cookies tiers de la plateforme de paiement.",
          purposes: [],
          required: false,
        },
      ],
      categories: [
        {
          name: "example",
          title: "Example category",
          apps: ["inline-tracker", "external-tracker"],
        },
        {
          name: "third-party",
          title: "Third-party applications",
          apps: ["always-on"],
        },
      ],
    };
  </script>

  <script type="opt-in" data-src="example-assets/external-tracker.js" data-type="application/javascript" data-name="external-tracker"></script>
  <script type="opt-in" data-type="application/javascript" data-name="inline-tracker"></script>

  <script>
    document.querySelector(".consent-modal-button").addEventListener(
      "click",
      function () {
        orejime.show();
      },
      false
    );

    document.querySelector(".reset-button").addEventListener(
      "click",
      function () {
        orejime.internals.manager.resetConsent();
        location.reload();
      },
      false
    );
  </script>
</body>
</html>
