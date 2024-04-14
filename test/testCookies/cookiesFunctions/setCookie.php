<?php
// Définition des paramètres du cookie
$cookie_name = "user_id"; // Nom du cookie
$cookie_value = generateUniqueUserID(); // Fonction pour générer un identifiant unique pour l'utilisateur
$expiry = time() + (86400 * 30); // Expire dans 30 jours
$path = "/"; // Chemin où le cookie est accessible
$domain = "becker-avocate.fr"; // Domaine du site
$secure = true; // Cookie sécurisé, ne sera envoyé que sur une connexion HTTPS
$http_only = true; // Empêche l'accès au cookie via JavaScript

// Création du cookie sécurisé
setcookie($cookie_name, $cookie_value, $expiry, $path, $domain, $secure, $http_only);

// echo "Cookie créé avec succès!" ;
// Fonction pour générer un identifiant unique pour l'utilisateur
function generateUniqueUserID() {
    // Vous pouvez utiliser différentes méthodes pour générer un identifiant unique, par exemple :
    return uniqid(); // Utilisation de la fonction uniqid pour générer un identifiant unique
}
?>