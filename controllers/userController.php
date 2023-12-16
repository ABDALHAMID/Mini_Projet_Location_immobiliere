<?php

require_once("models\userModel.php");

    
    
    function userList(){
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        foreach ($users as $user) {
            echo "nom: ".$user["nom"]."<br>";
            echo "prenom: ".$user["prenom"]."<br>";
            echo "<br><br>";
        }

    }



