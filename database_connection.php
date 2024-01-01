<?php

// Informations de connexion à la base de données

$dbhost = 'localhost'; // Adresse du serveur MySQL

$dbport = '3306'; // Port du serveur MySQL

$dbuser = 'root'; // Nom d'utilisateur MySQL

$dbpassword = ''; // Mot de passe MySQL

$dbdatabase = 'location_immobiliere'; // Nom de la base de données



// Connexion à la base de données avec MySQLi
function getDatabase() {
    $mysqli = new mysqli($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpassword'], $GLOBALS['dbdatabase']);
    return $mysqli;
}

// Vérification de la connexion

if (getDatabase()->connect_error) {
    die('Erreur de connexion à la base de données : ' . getDatabase()->connect_error);
}

echo "<script>console.log('base de donnee est connecte');</script>";


?>