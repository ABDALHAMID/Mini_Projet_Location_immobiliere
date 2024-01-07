<?php

class LocationOrderModel {
    private $db;

    public function __construct() {
        $this->db = $this->connectToDatabase();
    }

    private function connectToDatabase() {
        return getDatabase();
    }

    public function addLocationOrder($user_id, $logement_id, $status) {
        $query = "INSERT INTO location_order(id, user_id,logement_id, date_order, status) VALUES (NULL, '$user_id','$logement_id', NOW(),'$status')";
        $result = $this->db->query($query);
        if(!$result) {die($this->db->error);
        }
        return $result;
    }

    public function UpdateLocationOrderStatus($user_id, $logement_id, $status) {
        $query = "UPDATE `location_order` SET status='$status' WHERE user_id='$user_id' AND logement_id='$logement_id'";
        $result = $this->db->query($query);
        if(!$result) {die($this->db->error);
        }
        return $result;
    }

    public function getLogementOrder($user_id, $logement_id, $status) {
        $query = "SELECT * FROM location_order WHERE logement_id='$logement_id' AND user_id='$user_id' AND status='$status';";
        $result = $this->db->query($query);
        if(!$result) {
            die($this->db->error);
        }
        return $result;
    }

}

?>