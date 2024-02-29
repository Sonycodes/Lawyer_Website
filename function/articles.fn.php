<?php
require_once '../config/conn.php';
require_once 'database.fn.php';

// Établir la connexion à la base de données
$conn = getPDOlink($config);

function findAllArticles($conn){
    $sql= "SELECT * FROM `articles`";
    $requete = $conn->query($sql);
    $questions = $requete->fetchAll();
    return $articles;
}
