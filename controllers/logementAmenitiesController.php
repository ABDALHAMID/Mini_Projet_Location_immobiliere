<?php
    require_once('models/logementAmenitiesModel.php');

  function getLAmenities(){
    $lAmenitiesModel = new LogementAmenitiesModel();
    $logement_id = $_GET['id'];
    $result = $lAmenitiesModel->getAmenities($logement_id);
    return $result;

  }





?>