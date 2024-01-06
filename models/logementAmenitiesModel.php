<?php

class LogementAmenitiesModel
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



    public function getAmenities($logement_id)
    {
        $query = "SELECT * FROM logement_amenities WHERE logement_id='$logement_id'";
        $result = $this->db->query($query);
        if (!$result) {
            die($this->db->error);
        }
        $amenities = [];
        while ($row = $result->fetch_assoc()) {
            $amenities[] = $row;
        }
            return $amenities;
    }

    public function addAmenities($logement_id,$aminotie){
        $query = "INSERT INTO logement_amenities(id, logement_id, amenity) VALUES (NULL,'$logement_id','$aminotie')";
        $result = $this->db->query($query);
        if (!$result) {
            die($this->db->error);
        }
        return $result;
    }

}

?>