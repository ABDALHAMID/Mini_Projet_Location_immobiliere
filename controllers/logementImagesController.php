<?php
require_once('models/logementImagesModel.php');
require_once('general.php');

function getLImages()
{
  $lAmenitiesModel = new LogementImagesModel();
  $logement_id = $_GET['id'];
  $result = $lAmenitiesModel->getImages($logement_id);
  return $result;

}

function addLImage()
{
  $logementModel = new LogementImagesModel();

  if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $uploadDir = 'assets/img/LogementImages/';

    // Generate a random string for the image name
    $randomString = generateRandomString();

    // Get the file extension from the original image name
    $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

    // Construct the new image name with the random string and original extension
    $imageName = $randomString . '.' . $fileExtension;

    // Construct the full upload path
    $uploadPath = $uploadDir . $imageName;


    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
      $image_path = $imageName;
    } else {
      
      return array("status" => false, "message" => "Image non valide!");
    }
  } else {

    $image_path = 'default.jpg';
  }

  $logement_id = $_GET['id'];
  $result = $logementModel->addImage($logement_id, $image_path);

  if ($result) {
    
    return array('status' => true, 'message' => 'l\'image est ajouter');
  } else {
    
    return array('status' => false, 'message' => 'l\'image n est pas ajouter');
  }


}





?>