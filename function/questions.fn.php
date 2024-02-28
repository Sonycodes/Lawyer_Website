<?php 
require_once '../config/conn.php';
require_once 'database.fn.php';


// Établir la connexion à la base de données
   $conn = getPDOlink($config);

//création fonction qui permet de récupérer les questions de la bdd pour la page ressouce

function findAllQuestions($conn){
    $sql= "SELECT * FROM `questions`";
    $requete = $conn->query($sql);
    $questions = $requete->fetchAll();
    return $questions;
}

//pour visualiser le contenu du tableau qui est récupéré (attention echo ne pourra pas afficher le tableau)
var_dump(findAllQuestions($conn));
