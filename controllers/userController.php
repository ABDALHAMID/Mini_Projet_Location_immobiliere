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

    function addClient($userFirstName, $userLastName, $userEmail, $userPassword){
        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($userEmail);
        if($user == null){
            $userFirstName = trim($userFirstName);
            $userFirstName = htmlspecialchars($userFirstName);
            $userFirstName = stripslashes($userFirstName);
            $userLastName = trim($userLastName);
            $userLastName = htmlspecialchars($userLastName);
            $userLastName = stripslashes($userLastName);
            $uploadDir = 'assets/img/UsersImages/'; // Specify the directory where you want to store the uploaded files
            $uploadPath = $uploadDir . basename($_FILES['profile_image']['name']);
            if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadPath)) {
                //echo "<script>alert('File is valid, and was successfully uploaded.$uploadPath')</script>";
                $addUser = $userModel->addUser($userFirstName, $userLastName, $userEmail, $userPassword, 'client',$_FILES['profile_image']['name']);
                return true;
            } else {
                echo "<script>console.log('Upload failed')</script>";
            }        
        }
        else{

            return false;
        }
    }
    
    function dropUser($userId){
        
    }
    


    ?>

