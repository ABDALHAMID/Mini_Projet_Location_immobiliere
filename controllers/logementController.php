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

  function getLogement($id){
    $logementModel = new LogementModel();
    $data = $logementModel->getLogementById($id);
    return $data;
  }
  function numberoflogment(){
    $logementModel = new LogementModel();
    $data = $logementModel->getAllLogements();
    $number = 0;
        foreach ($data as $row) {
            $number++;
        }
        return $number;


  }








?>