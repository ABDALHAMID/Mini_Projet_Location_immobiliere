<?php

// Informations de connexion à la base de données
$host = 'localhost'; // Adresse du serveur MySQL
$port = '3306'; // Port du serveur MySQL
$user = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL

// Connexion à la base de données avec MySQLi
$mysqli = new mysqli($host . ':' . $port, $user, $password);

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

// Création de la base de données
$requeteCreationDB = "CREATE DATABASE IF NOT EXISTS `location_immobiliere`;";
$dbCreation = $mysqli->query($requeteCreationDB);

if ($dbCreation) {
    echo "Base de données créée avec succès<br>";

    // Sélection de la base de données
    $mysqli->select_db('location_immobiliere');

    // Chargement du fichier SQL
    $sql = file_get_contents("location_immobiliere.sql");

    // Exécution des requêtes SQL depuis le fichier
    if ($mysqli->multi_query($sql)) {
        echo "Les requêtes SQL ont été exécutées avec succès";
    } else {
        echo "Erreur lors de l'exécution des requêtes SQL : " . $mysqli->error;
    }

    echo "<script>console.log('Base de données connectée')</script>";
} else {
    echo "La base de données n'a pas été créée : " . $mysqli->error;
}

// Fermeture de la connexion
$mysqli->close();
?>
