<?php
    require_once('models/logementAmenitiesModel.php');

  function getLAmenities(){
    $lAmenitiesModel = new LogementAmenitiesModel();
    $logement_id = $_GET['id'];
    $result = $lAmenitiesModel->getAmenities($logement_id);
    return $result;

  }

  function addLAmenities($aminotie){
    $lAmenitiesModel = new LogementAmenitiesModel();
    $logement_id = $_GET['id'];
    $result = $lAmenitiesModel->addAmenities($logement_id, $aminotie);
    if($result){
      return array('status'=> true,'message'=> 'Agréments est ajouter');
    }
    else{
      return array('status'=> false,'message'=> 'Agréments n est pas ajouter');
    }
  }



?>