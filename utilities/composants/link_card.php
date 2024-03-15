<?php

// Établir la connexion à la base de données
$conn = getPDOlink($config);
$articles = findAllArticles($conn);
?>
<!-- Afficher les cartes en rangées de trois -->

<div class="container">
  <div class="row">
      <?php foreach ($articles as $article): ?>
      <div class="card w-md-75 col-md-10 mb-3 m-4 p-md-3 mx-auto bg-container">
        <div class="card-body">
          <h5 class="card-title"><?php echo $article['titre']; ?></h5>
          <p class="card-text"><?php echo $article['description']; ?> : </p>
          <a href="<?php echo $article['lien']; ?>" class="card-link small"><?php echo $article['lien']; ?></a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
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




