<?php

class LogementImagesModel
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



    public function getImages($logement_id)
    {
        $query = "SELECT * FROM logement_images WHERE logement_id='$logement_id'";
        $result = $this->db->query($query);
        if (!$result) {
            die($this->db->error);
        }
        $images = [];
        while ($row = $result->fetch_assoc()) {
            $images[] = $row;
        }
        return $images;
    }

    public function addImage($logement_id, $image_path)
    {
        $query = "INSERT INTO logement_images(id, logement_id, image_path) VALUES (NULL,'$logement_id','$image_path')";
        $result = $this->db->query($query);
        if (!$result) {
            die($this->db->error);
        }
        return $result;
    }

}

?>