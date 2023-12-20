<?php
// LogementModel.php
require_once('database_connection.php');

class LogementModel {

    public function __construct() {
        $this->db = $this->connectToDatabase();
    }

    private function connectToDatabase() {
        require_once('database_connection.php');
        return $mysqli;
    }


    public function getAllLogements() {
        $query = "SELECT * FROM logement";
        $result = $this->db->query($query);

        $logements = [];
        while ($row = $result->fetch_assoc()) {
            $logements[] = $row;
        }

        return $logements;
    }

    public function addLogement($adresse, $type_logement, $nombre_chambres, $prix, $image_path) {
        $query = "INSERT INTO logement (adresse, type_logement, nombre_chambres, prix, image_path) VALUES ($adresse, $type_logement, $nombre_chambres, $prix, $image_path)";
        $stmt = $this->db->prepare($query);
        $result = $this->db->query($query);
        return $result;
    }

    public function getLogementById($logementId) {
        $query = "SELECT * FROM logement WHERE id = $logementId";
        $result = $this->db->query($query)
        return $result;
    }
}
