<?php
function findAllArticles($conn){
    $sql= "SELECT * FROM `articles`";
    $requete = $conn->query($sql);
    $questions = $requete->fetchAll();
    return $questions;
}
