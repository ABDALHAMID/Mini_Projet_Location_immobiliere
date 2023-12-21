<?php

require_once('..\..\controllers\userController.php'); 
require_once('../../models\userModel.php');

$email = $_POST["email"];
$pwd = $_POST["password"];

if(userLogIn($email, $pwd)){

    
    if ($_SESSION["type"] === "administrator") {
        echo "lkfjas";
        header("location: ..\admin\dashboard.php"); // Adjust the URL accordingly
        exit();
    } else if ($_SESSION["type"] === "client") {
        header("location: ..\client\clientHome.php"); // Adjust the URL accordingly
        exit();
    }
}
else{
    echo "userNOtFound<br>";
    echo '<button type="button" href="login.php">return to login</button>';
}
?>