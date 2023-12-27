<?php


class UserModel {

    public function __construct() {
        $this->db = $this->connectToDatabase();
    }

    private function connectToDatabase() {
        require_once('database_connection.php');
        return $mysqli;
    }

    public function getUsers(){
        $query = "SELECT * FROM utilisateur";
        $result = $this->db->query($query);

        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    public function getUserById($userId) {
        $userId = $this->db->real_escape_string($userId);
        $query = "SELECT * FROM utilisateur WHERE id = '$userId'";
        $result = $this->db->query($query);

        $userData = $result->fetch_assoc();

        return $userData;
    }

    public function getUserByEmail($userEmail) {
        $userEmail = $this->db->real_escape_string($userEmail);
        $query = "SELECT * FROM utilisateur WHERE email = '$userEmail'";
        $result = $this->db->query($query);

        $userData = $result->fetch_assoc();
        

        return $userData;
    }

    public function addUser($FirstName, $LastName, $Type, $img){
        
        $query = "INSERT INTO `utilisateur`(`id`, `prenom`, `nom`, `email`, `password`, `type`, `image`) VALUES ('NULL','$FirstName','$LastName','$Type','$img')";
        $result = $this->db->query($query);

        if ($result) {
            
            return true;
        } else {
            
            echo "<script> console.log(Error adding user: " . $this->db->error. ")</script>";
            return false;
        }

    }

    public function dropUser($userId){
        $userId = $this->db->real_escape_string($userId);
        $query = "DELETE FROM `utilisateur` WHERE `id`='$userId'";
        $result = $this->db->query($query);
        if ($result) {
            return true;
        } else {
            echo "<script> console.log(Error deleting user: " . $this->db->error. ")</script>";
            return false;
        }
    }
}

?>