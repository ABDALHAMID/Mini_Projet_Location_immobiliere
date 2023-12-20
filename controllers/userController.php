<?php

require_once("models\userModel.php");

    
    function usersList(){
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        foreach ($users as $user) {
            echo "nom: ".$user["nom"]."<br>";
            echo "prenom: ".$user["prenom"]."<br>";
            echo "<br><br>";
        }
        
    }

    function addUser($userFirstName, $userLastName, $userType){
        
        $userFirstName = trim($userFirstName);
        $userFirstName = htmlspecialchars($userFirstName);
        $userFirstName = stripslashes($userFirstName);
        $userLastName = trim($userLastName);
        $userLastName = htmlspecialchars($userLastName);
        $userLastName = stripslashes($userLastName);


        $userModel = new UserModel();
        $userModel->addUser($userFirstName, $userLastName, $userType);
    }
    
    function dropUser($userId){
        
    }
    

    ?>


