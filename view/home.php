<?php



require_once('controllers/userController.php');

require_once('controllers/logementController.php');

if (isset($_GET['page'])) {
    if($_GET['page']=='logout'){
        // remove all session variables
session_unset();

// destroy the session
session_destroy();


header("location:index.php");
    }

}


if (isset($_SESSION["type"])) {
    if($_SESSION["type"]==="administrator"){

        
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