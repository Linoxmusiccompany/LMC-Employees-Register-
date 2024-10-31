<?php
// db_connect.php

$servername = "127.0.0.1"; // ou l'adresse de votre serveur
$username = "root"; // votre nom d'utilisateur MySQL
$password = "MSQL"; // votre mot de passe MySQL
$dbname = "employees_db"; // remplacez par le nom de votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
