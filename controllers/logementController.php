<?php
    require_once('models/logementModel.php');
  function lastLogment($number){
    $logementModel = new LogementModel();
    $data = $logementModel->getNumberOfLogement($number);
    return $data;
  }








?>