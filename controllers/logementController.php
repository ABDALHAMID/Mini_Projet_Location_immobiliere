<?php
    require_once('models/logementModel.php');
  function lastLogement($number){
    $logementModel = new LogementModel();
    $data = $logementModel->getNumberOfLogement($number);
    return $data;
  }

  function allLogement(){
    $logementModel = new LogementModel();
    $data = $logementModel->getAllLogements();
    return $data;
  }








?>