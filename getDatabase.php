<?php

// Informations de connexion à la base de données

$host = 'localhost'; // Adresse du serveur MySQL

$port = '3306'; // Port du serveur MySQL

$user = 'root'; // Nom d'utilisateur MySQL

$password = ''; // Mot de passe MySQL


// Connexion à la base de données avec MySQLi
$mysqli = new mysqli($host.':'.$port, $user, $password);


// Vérification de la connexion

if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

$sql = file_get_contents("location_immobiliere.sql");

$result = $this->$mysqli->query($sql);


echo "<script>console.log('base de donnee est connecte')</script>";