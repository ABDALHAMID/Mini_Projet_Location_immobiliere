<?php

require_once('models/userModel.php');
    function userLogIn($email, $pwd){
        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email);
        if($user != null){
            $userPwd = $user['password'];
            if($pwd == $userPwd){
                $_SESSION["id"] = $user["id"];
                $_SESSION["type"] = $user["type"];
                return true;
            }
        }
        else {
            return false;
        }
    }
    
    function usersList(){
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        return $users;
        
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

