<?php
$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $istatus = addLImage();
    }
    if (isset($_POST["amenitie"]) && !empty(trim($_POST["amenitie"]))) {
        $aminotie = $_POST["amenitie"];
        $astatus = addLAmenities($aminotie) ;

    }
   
}
?>
<div class="content-wrapper d-flex align-items-center auth">
    <div class="row flex-grow">
        <?php include('view\backButton.php') ?>
        <div class="col-lg-7 mx-auto">
            <div class="auth-form-light text-left p-5">
                <h4>ajouter une image a ce logement</h4>
                <?php
                if (isset($istatus)) {

                    echo '<div class="alert ';
                    if ($istatus["status"])
                        echo 'alert-success';
                    else
                        echo 'alert-danger';
                    echo ' d-flex align-items-center justify-content-center" role="alert" style="display: flex;justify-content: space-between;" >
                    <i class="bi bi-exclamation-triangle-fill"></i>&emsp;
                    <div>
                    ' . $istatus["message"] . '
                    </div>
                  </div>';
                }
                if (isset($astatus)) {

                    echo '<div class="alert ';
                    if ($astatus["status"])
                        echo 'alert-success';
                    else
                        echo 'alert-danger';
                    echo ' d-flex align-items-center justify-content-center" role="alert" style="display: flex;justify-content: space-between;" >
                    <i class="bi bi-exclamation-triangle-fill"></i>&emsp;
                    <div>
                    ' . $astatus["message"] . '
                    </div>
                  </div>';
                }
                ?>
                <form class="pt-3" action="<?php echo $_SERVER['PHP_SELF'] . '?page=modifier&id='.$id; ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="amenitie" placeholder="Agréments" name="amenitie">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-lg" id="image" placeholder="image" name="image" >
                    </div>

                    <div class="form-group">
                        <button type="submit" class="save-button">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg class="icon" height="30" width="30" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22,15.04C22,17.23 20.24,19 18.07,19H5.93C3.76,19 2,17.23 2,15.04C2,13.07 3.43,11.44 5.31,11.14C5.28,11 5.27,10.86 5.27,10.71C5.27,9.33 6.38,8.2 7.76,8.2C8.37,8.2 8.94,8.43 9.37,8.8C10.14,7.05 11.13,5.44 13.91,5.44C17.28,5.44 18.87,8.06 18.87,10.83C18.87,10.94 18.87,11.06 18.86,11.17C20.65,11.54 22,13.13 22,15.04Z">
                                        </path>
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