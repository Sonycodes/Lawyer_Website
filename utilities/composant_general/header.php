<?php
// Inclusion du fichier de connexion à la base de données
require_once dirname(__DIR__, 2) . '/config/conn.php';
// Inclusion du fichier contenant les URLs de navigation
include '/wamp64/www/Lawyer_Website/utilities/navigation/url.php';
// Inclusion des fonctions liées aux questions
require_once dirname(__DIR__, 2) . '/function/questions.fn.php';
// Inclusion des fonctions liées aux articles
require_once dirname(__DIR__, 2) . '/function/articles.fn.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Lien vers le CSS -->
    <link rel="stylesheet" href="../style.css">

    <!-- Lien vers Font Awesome via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>

    <!-- Lien CDN Orejime -->
    <link rel="stylesheet" href="https://unpkg.com/orejime@latest/dist/orejime.css" />
    <script src="https://unpkg.com/orejime@latest/dist/orejime.js"></script>
    
    <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TW59RZ4Q');</script>
    <!-- End Google Tag Manager -->

    <!-- suite des cripts Orejime -->
    <script>
      <script
      type="opt-in"
      data-type="application/javascript"
      data-name="google-tag-manager"></script>
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    <script
      type="opt-in"
      data-type="application/javascript"
      data-name="google-maps"
      data-src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

  <!-- Autres balises meta, titre, etc. -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LegalService",
      "name": "Jane Becker Avocate",
      "description": "Jane Becker, Avocate, offre des services juridiques en droit du travail, de la sécurité sociale et de la famille. Contactez notre avocate spécialisée dès aujourd'hui.",
      "openingHours": "Lu-Ve 09:00-17:00",
      "paymentAccepted": "Espèces, Carte de crédit",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "127 Rue de Rome",
        "addressLocality": "Marseille",
        "postalCode": "13006",
        "addressCountry": "France"
      },
      "telephone": "+33 7 72 06 23 77",
      "email": "contact@becker-avocate.fr",
      "priceRange": "€"
    }
    </script>

    </head>
<body>
    <main style="overflow-x: hidden;">
    <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW59RZ4Q"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->










    <?php
// include '/navigation/url.php';
require_once dirname(__DIR__, 2) . '/config/conn.php';
require_once dirname(__DIR__, 2) . '/utilities/navigation/url.php';
require_once dirname(__DIR__, 2) . '/function/questions.fn.php';
require_once dirname(__DIR__, 2) . '/function/articles.fn.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- link Css -->
    <link rel="stylesheet" href="../style.css">

    <!-- link font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    
 <!-- Icône  -->
<link rel="shortcut icon" href="/assets/logo/logo_vierge.svg" type="image/x-icon">
<link rel="icon" type="image/png" href="/assets/logo/logo_vierge.svg">


<!-- Image représentative pour les moteurs de recherche -->
<meta itemprop="image" content="/assets/logo/logo_vierge.svg">

<!-- Image à utiliser sur les réseaux sociaux -->
<meta property="og:image" content="/assets/logo/logo_vierge.svg">

<!-- Lien vers CDN Oregime -->
<link rel="stylesheet" href="https://unpkg.com/orejime@latest/dist/orejime.css" />
<script src="https://unpkg.com/orejime@latest/dist/orejime.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TW59RZ4Q');</script>
<!-- End Google Tag Manager -->


    <!-- balise script pour le referencement avec json -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LegalService",
      "name": "Jane Becker Avocate",
      "description": "Jane Becker, Avocate, offre des services juridiques en droit du travail, de la sécurité sociale et de la famille. Contactez notre avocate spécialisée dès aujourd'hui.",
      "openingHours": "Mo-Fr 09:00-17:00",
      "paymentAccepted": "Cash, Credit Card",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "127 Rue de Rome",
        "addressLocality": "Marseille",
        "postalCode": "13006",
        "addressCountry": "France"
      },
      "telephone": "+33 7 72 06 23 77",
      "email": "contact@becker-avocate.fr",
  "logo": "https://www.votresite.com/assets/logo/logo_vierge.svg",
  "priceRange": "€"
    }
    </script>
    </head>
<body>
    <main style="overflow-x: hidden;">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW59RZ4Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    