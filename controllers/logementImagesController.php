<?php
    require_once('models/logementImagesModel.php');

  function getLImages(){
    $lAmenitiesModel = new LogementImagesModel();
    $logement_id = $_GET['id'];
    $result = $lAmenitiesModel->getImages($logement_id);
    return $result;

  }





?>