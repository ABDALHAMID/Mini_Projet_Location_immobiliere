<?php
require_once('models/logementModel.php');
function lastLogement($number)
{
  $logementModel = new LogementModel();
  $data = $logementModel->getNumberOfLogement($number);
  return $data;
}

function allLogement()
{
  $logementModel = new LogementModel();
  $data = $logementModel->getAllLogements();
  return $data;
}

function getLogement($id)
{
  $logementModel = new LogementModel();
  $data = $logementModel->getLogementById($id);
  return $data;
}
function numberoflogment()
{
  $logementModel = new LogementModel();
  $data = $logementModel->getAllLogements();
  $number = 0;
  foreach ($data as $row) {
    $number++;
  }
  return $number;


}

function getIdOfLastLogement(){
  $logementModel = new LogementModel();
  $id = $logementModel->getLastone()['id'];
  return $id;
}

function addLogement($name, $adresse, $type_logement, $nombre_chambres, $prix, $description, $status, $area, $beds, $baths, $garage, $city)
{
  $logementModel = new LogementModel();

  if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $uploadDir = 'assets/img/LogementImages/';
    $uploadPath = $uploadDir . basename(trim(htmlspecialchars(stripslashes($_FILES['image']['name']))));

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
      $image_path = $_FILES['image']['name'];
    } else {
      return array("status" => false, "message" => "Image non valide!");
    }
  } else {

    $image_path = 'default.jpg';
  }

  $result = $logementModel->addLogement($name, $adresse, $type_logement, $nombre_chambres, $prix, $image_path, $description, $status, $area, $beds, $baths, $garage, $city);
  return $result;
}








?>