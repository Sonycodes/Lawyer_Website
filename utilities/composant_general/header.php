<?php
// include '/navigation/url.php';
require_once dirname(__DIR__, 2) . '/config/conn.php';
include '/wamp64/www/Lawyer_Website/utilities/navigation/url.php';
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

    <!-- Autres balises meta, titre, etc. -->
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
      "priceRange": "€"
    }
    </script>

    </head>
<body>
    <main style="overflow-x: hidden;">
    