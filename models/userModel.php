<?php


class UserModel {

    public function __construct() {
        $this->db = $this->connectToDatabase();
    }

    private function connectToDatabase() {
        require_once('database_connection.php');
        return $mysqli;
    }




//methode pour recuperer toutel les utilisateur
public function getUsers(){
    $query = "SELECT * FROM utilisateur";
    $result = $this->db->query($query);

    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}

// Méthode pour récupérer les informations d'un utilisateur par son ID
public function getUserById($userId) {
    $userId = $this->db->real_escape_string($userId);
    $query = "SELECT * FROM utilisateur WHERE id = '$userId'";
    $result = $this->db->query($query);

    // Traitez les résultats et renvoyez les données nécessaires
    $userData = $result->fetch_assoc();

    return $userData;
}



// Méthode pour vérifier les informations d'identification de l'utilisateur
public function checkCredentials($username, $password) {
    $username = $this->db->real_escape_string($username);
    $password = $this->db->real_escape_string($password);

    // Hash du mot de passe dans une application réelle
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $this->db->query($query);

    // Retourne true si les informations d'identification sont valides, sinon false
    return $result->num_rows > 0;
}

// Autres méthodes liées aux utilisateurs peuvent être ajoutées ici
}

?>