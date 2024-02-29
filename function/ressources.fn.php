<?php 
require_once '../config/conn.php';
require_once 'database.fn.php';


// Établir la connexion à la base de données
   $conn = getPDOlink($config);

//création fonction qui permet de récupérer les questions de la bdd pour la page ressouce

function findAllRessources($conn){
    $sql= "SELECT * FROM `ressources`";
    $requete = $conn->query($sql);
    $ressources = $requete->fetchAll();
    return $ressources;
}

//pour visualiser le contenu du tableau qui est récupéré (attention echo ne pourra pas afficher le tableau)
// var_dump(findAllRessources($conn));
