<?php
    require_once('models/locationOrderModel.php');
    require_once('logementController.php');
    require_once('userController.php');

  function createPendingOrder(){
    $lOrderModel = new LocationOrderModel();
    $user_id = getUser()['id'];
    $logement_id = getLogement($_GET['id'])['id'];
    $status = $lOrderModel->addLocationOrder($user_id, $logement_id, 'pending');
    if($status ){
        return array("status" => true);
    }
    else{ return array("status" => true); 
    }

  }

  function checkIfOrderExist(){
    $lOrderModel = new LocationOrderModel();
    $user_id = getUser()['id'];
    $logement_id = getLogement($_GET['id'])['id'];
    $result = $lOrderModel->getLogementOrder($user_id, $logement_id, 'pending');
    $count = [];
    while ($row = $result->fetch_assoc()) {
      $count[] = $row;
    }
    if(count($count) > 0)return true;
    else return false;
  }




?>