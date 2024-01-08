<?php

class LogementModel
{
    private $db;

    public function __construct()
    {
        $this->db = $this->connectToDatabase();
    }

    private function connectToDatabase()
    {

        return getDatabase();
    }


    public function getAllLogements()
    {
        $query = "SELECT * FROM logement";
        $result = $this->db->query($query);

        $logements = [];
        while ($row = $result->fetch_assoc()) {
            $logements[] = $row;
        }

        return $logements;
    }

    public function getNumberOfLogement($number)
    {
        $query = "SELECT * FROM `logement` LIMIT $number";
        $result = $this->db->query($query);

        $logements = [];
        while ($row = $result->fetch_assoc()) {
            $logements[] = $row;
        }
        return $logements;
    }

    public function addLogement($name, $adresse, $type_logement, $nombre_chambres, $prix, $image_path, $description, $status, $area, $beds, $baths, $garage, $city)
    {
        $query = "INSERT INTO logement(id, name, adresse, type_logement, nombre_chambres, prix, image_path, description, status, area, beds, baths, garage, city) VALUES (NULL,'$name', '$adresse', '$type_logement', '$nombre_chambres', '$prix', '$image_path', '$description', '$status', '$area', '$beds', '$baths', $garage, '$city')";
        $result = $this->db->query($query);
        return $result;
    }

    public function getLogementById($logementId)
    {
        $query = "SELECT * FROM logement WHERE id = '$logementId'";
        $result = $this->db->query($query)->fetch_assoc();
        return $result;
    }

    public function getLastone()
    {
        $query = "SELECT * FROM logement ORDER BY id DESC LIMIT 1;";
        $result = $this->db->query($query)->fetch_assoc();
        return $result;
    }


    public function updateStatuLogement($logement_id, $status)
    {
        $query = "UPDATE `logement` SET status='$status' WHERE id='$logement_id'";
        $result = $this->db->query($query);
        return $result;
    }

    public function dropLogement($logementId)
    {
        $query = "DROP * FROM logement WHERE id = $logementId";
        $result = $this->db->query($query);
        return $result;
    }
}
?>