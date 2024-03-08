<?php
// Définit le domaine de base pour les pages
$domain = 'lawyer-website';

// Tableau associatif contenant les titres des pages en fonction de leur URL
$titles = [
    'Conseils et ressources' => $domain . '/page_conseils.php',
    'Compétences' => $domain . '/competences.php',
    'Honoraires et Aide juridictionnelle' =>  $domain . '/honoraires.php',
    'Mentions légales' =>  $domain . '/mentions.php',
    'Contact' =>  $domain . '/page_contact.php'
];

// Obtient l'URL actuelle
$current_url = $domain . $_SERVER['SCRIPT_NAME'];

// Par défaut, le titre est vide
// $title = '';

// Parcours le tableau pour trouver le titre correspondant à l'URL actuelle
foreach ($titles as $pageTitle => $url) {
    if (strpos($current_url, $url) !== false) {
        // Si une correspondance est trouvée, définissez le titre correspondant
        $title = $pageTitle;
        // Sort de la boucle car on a trouvé le titre
        break;
    }
}

// Si aucun titre correspondant n'est trouvé, utilisez un titre par défaut
if (empty($title)) {
    $title = 'Jane Becker Avocate';
}


// var_dump($current_url);
?>

