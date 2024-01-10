<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $adresse = $_POST["adresse"];
    $type_logement = $_POST["type"];
    $nombre_chambres = $_POST["nombre_chambres"];
    $prix = $_POST["prix"];
    $description = $_POST["description"];
    $status = $_POST["status"];
    $area = $_POST["area"];
    $beds = $_POST["beds"];
    $baths = $_POST["baths"];
    $garage = $_POST["garage"];
    $city = $_POST["city"];
  $userStatus = addLogement($name, $adresse, $type_logement, $nombre_chambres, $prix, $description, $status, $area, $beds, $baths, $garage, $city);

}
?>
<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <?php include('view\backButton.php') ?>
            <div class="col-lg-7 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>ajouter un logement</h4>
                <?php
                if(isset($userStatus["status"])){

                    echo '<div class="alert ';
                    if($userStatus["status"]) echo 'alert-success';
                    else echo 'alert-danger';
                    echo ' d-flex align-items-center justify-content-center" role="alert" style="display: flex;justify-content: space-between;" >
                    <i class="bi bi-exclamation-triangle-fill"></i>&emsp;
                    <div>
                    '.$userStatus["message"].'
                    </div>
                  </div>';
                  }
                ?>
                <form class="pt-3" action="<?php echo $_SERVER['PHP_SELF'].'?page=addlogement'; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="name" placeholder="nom de logement" name="name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="adresse" placeholder="adresse de logement" name="adresse">
                  </div>
                  <div class="form-group">
                    <select name="type" id="type">
                        <option value="apartement" default>apartement</option>
                        <option value="house">house</option>
                        <option value="condo">condo</option>
                        <option value="villa">villa</option>
                        <option value="townhouse">townhouse</option>
                        <option value="other">other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="nombre_chambres" placeholder="nombre chambres" name="nombre_chambres">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="prix" placeholder="prix" name="prix">
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control form-control-lg" id="image" placeholder="image" name="image">
                  </div>
                  <div class="form-group">
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="description"></textarea>  
                  </div>
                  <div class="form-group">
                    <select name="status" id="status">
                        <option value="available" default>available</option>
                        <option value="rented">rented</option>
                        <option value="unavailable">unavailable</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="area" placeholder="zone" name="area">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="beds" placeholder="lits" name="beds">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="baths" placeholder="bains" name="baths">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="garage" placeholder="garage" name="garage">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="city" placeholder="villes" name="city">
                  </div>
                  
                  
                  <div class="form-group">
                    <button type="submit" class="save-button">
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg class="icon" height="30" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22,15.04C22,17.23 20.24,19 18.07,19H5.93C3.76,19 2,17.23 2,15.04C2,13.07 3.43,11.44 5.31,11.14C5.28,11 5.27,10.86 5.27,10.71C5.27,9.33 6.38,8.2 7.76,8.2C8.37,8.2 8.94,8.43 9.37,8.8C10.14,7.05 11.13,5.44 13.91,5.44C17.28,5.44 18.87,8.06 18.87,10.83C18.87,10.94 18.87,11.06 18.86,11.17C20.65,11.54 22,13.13 22,15.04Z"></path>
                                </svg>
                            </div>
                        </div>
                        <span>Save</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>