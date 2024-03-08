<?php
require_once __DIR__.'/../function/articles.fn.php';
?>

<?php

// Établir la connexion à la base de données
$conn = getPDOlink($config);
$articles = findAllArticles($conn);
?>
<!-- Afficher les cartes en rangées de trois -->
<div class="container row m-auto py-5">
  <?php foreach ($articles as $article): ?>
  <div class="col-md-4">
    <div class="card m-auto" style="width: 20rem; height: 25rem;">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="container" style="height: 10em;  overflow: hidden;">
          <?php
        // Récupérer le contenu de la page Web
        $html = file_get_contents($article['lien']);

        // Analyser le contenu HTML pour extraire l'URL de l'image
        if (preg_match('/<meta\s+property="og:image"\s+content="([^"]+)"/i', $html, $matches)) {
            $image_url = $matches[1];
            // Afficher l'image dans votre page Web
            echo '<img src="' . $image_url . '" class="card-img-top mt-2 img-fluid" style="width: 100%; height: 100%; object-fit: cover;" alt="Image associée au lien">';
        } else {
            echo "Aucune image trouvée";
        }
      ?>
      </div>
      <div class="px-1">
        <h5 class="card-title"><?php echo $article['titre']; ?></h5>
        <a href="<?php echo $article['lien']; ?>" class="card-link"><?php echo $article['lien']; ?></a>
        <p class="card-text"><?php echo $article['description']; ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>



<?php

// URL de la page Web dont vous souhaitez récupérer les métadonnées Open Graph
$url = "https://travail-emploi.gouv.fr/";

// Votre clé d'API OpenGraph.io
$api_key = "9f78ccbe-d52d-49d1-b93f-2c684bf5db15";

// Construire l'URL de l'API OpenGraph.io
$api_url = "https://opengraph.io/api/1.1/site?url=" . urlencode($url) . "&app_id=" . $api_key;

// Initialiser cURL
$curl = curl_init();

// Configuration de cURL pour récupérer les données
curl_setopt($curl, CURLOPT_URL, $api_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Exécuter la requête cURL
$json_data = curl_exec($curl);

// Fermer la session cURL
curl_close($curl);

// Vérifier si les données ont été récupérées avec succès
if ($json_data !== false) {
    // Convertir les données JSON en tableau associatif
    $og_data = json_decode($json_data, true);

    // Vérifier si les métadonnées ont été récupérées avec succès
    if (isset($og_data['hybridGraph'])) {
        // Récupérer l'URL de l'image Open Graph
        $image_url = $og_data['hybridGraph']['image'];
        
        // Afficher l'image dans votre page Web
        echo '<img src="' . $image_url . '" alt="Image associée à la page">';
    } else {
        echo "Impossible de récupérer les métadonnées Open Graph pour cette URL.";
    }
} else {
    echo "Erreur lors de la récupération des données depuis l'API OpenGraph.io.";
}


?>




