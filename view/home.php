<?php



require_once('controllers/userController.php');

require_once('controllers/logementController.php');

if (isset($_GET['page'])) {
    if($_GET['page']=='logout'){
        
session_unset();


session_destroy();


header("location:index.php");
    }

}


if (isset($_SESSION["type"])) {
    if($_SESSION["type"]==="administrator"){
        echo '<script src="assets\js\dashboardStyle.js"></script>';
        
        include('view\admin\dashboard.php');
    }
    if($_SESSION["type"]==="client"){
        
        include('view\client\clientHome.php');
    }
} else {
    include('view\client\clientHome.php');
}








?>

<script>
    function getSession() {
        <?php if (isset($_SESSION["type"])) echo 'console.log("'.$_SESSION["type"].'");';
            else echo 'console.log("pas de sission");';?>
    }
</script>