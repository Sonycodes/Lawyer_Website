<?php 
require_once dirname(__DIR__) . '/config/conn.php';
require_once dirname(__DIR__) . '/function/questions.fn.php';

// $item = $_POST['id'];
// $name = $_POST['name'];
// $description = $_POST['description'];
// $price = $_POST['price'];
// $capacity = $_POST['ml'];
$givenData = $_POST; // les données envoyées lors de la modification
$currentID = $_POST['id'];
$currentData = findQuestionById($conn, $currentID); // la fonction qui récupère les données 
// actuelles de la base de données
$differences = array_diff_assoc($givenData, $currentData); 

var_dump($givenData);
var_dump($currentData);
var_dump($differences);
// la prochaine étape sera de faire un UPDATE sur les tables SQL items_cards, pictures et 
// capacities

// $sql = "UPDATE items_cards SET price WHERE id"; 
// for each catégorie du tableau $differences, je veux que tu 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="dashboard.php" method="get">
    <button type="submit" class="btn btn-green">Revenir au dashboard</button>
</form>
    
</body>
</html>