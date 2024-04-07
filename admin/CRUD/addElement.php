<?php

require_once dirname(__DIR__, 2) . '/config/conn.php';
require_once dirname(__DIR__, 2) . '/function/questions.fn.php';

// Vérification du type avant de récupérer les données du formulaire
if (isset($_POST['type']) && ($_POST['type'] === 'question' || $_POST['type'] === 'article')) {
    $type = $_POST['type'];
} else {
    // Redirection en cas de type non valide (créer une page erreur qui redirige ensuite vers dashboard)
    header("Location: ../dashboard.php");
    exit();
}

// Récupération des données du formulaire en fonction du type
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($type === 'question') {
        $question = htmlspecialchars($_POST['question']);
        $reponse = htmlspecialchars($_POST['reponse']);

        try {
            $stmt = $conn->prepare("INSERT INTO `questions` (`question`, `reponse`) VALUES (?, ?)");
            $stmt->execute([$question, $reponse]);
           
            // Message de réussite
            echo "Question ajoutée avec succès";

            // Redirection après un court délai
            header("Refresh: 3; url=/admin/dashboard.php");
            exit; // Sortir du script après la redirection
        } catch (PDOException $e) {
            //annuler tous les changements de la transaction en cours
            echo "Erreur : " . $e->getMessage();
        }
    } elseif ($type === 'article') {
        $titre = htmlspecialchars($_POST['titre']);
        $lien = htmlspecialchars($_POST['lien']);
        $description = htmlspecialchars($_POST['description']);

        try {
            $stmt = $conn->prepare("INSERT INTO `articles` (`titre`, `lien`, `description`) VALUES (?, ?, ?)");
            $stmt->execute([$titre, $lien, $description]);
           
            // Message de réussite
            echo "
            <h1> Article ajouté avec succès</h1>
        ";

            // Redirection après un court délai
            header("Refresh: 3; url=/admin/dashboard.php");
            exit; // Sortir du script après la redirection
        } catch (PDOException $e) {
            //annuler tous les changements de la transaction en cours
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        // Redirection en cas de type invalide
        header("Location: ../dashboard.php");
        exit;
    }
} else {
    // Redirection si le formulaire n'a pas été soumis via POST
    header("Location: ../dashboard.php");
    exit;
}
?>
