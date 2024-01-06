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
        $user = addUser($userFirstName, $userLastName, $userEmail, $userPassword, 'client');
        if($user['status']==true){
            $userModel = new UserModel();
            $thisUser = $userModel->getUserByEmail($userEmail);
            $_SESSION["id"] = $thisUser["id"];
            $_SESSION["type"] = $thisUser["type"];
        }
        return $user;
    }
    function addAdmin($userFirstName, $userLastName, $userEmail, $userPassword){
        return addUser($userFirstName, $userLastName, $userEmail, $userPassword, 'administrator');
    }


    function addUser($userFirstName, $userLastName, $userEmail, $userPassword, $type){
        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($userEmail);
        
        if ($user == null) {
            $userFirstName = trim($userFirstName);
            $userFirstName = htmlspecialchars($userFirstName);
            $userFirstName = stripslashes($userFirstName);
            $userLastName = trim($userLastName);
            $userLastName = htmlspecialchars($userLastName);
            $userLastName = stripslashes($userLastName);
    
            
            if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == UPLOAD_ERR_OK) {
                $uploadDir = 'assets/img/UsersImages/';
                $uploadPath = $uploadDir . basename(trim(htmlspecialchars(stripslashes($_FILES['profile_image']['name']))));
    
                if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadPath)) {
                    $imageName = $_FILES['profile_image']['name'];
                } else {
                    return array("status" => false, "message" => "Image non valide!");
                }
            } else {
                
                $imageName = 'default.jpg';
            }
    
            $addUser = $userModel->addUser($userFirstName, $userLastName, $userEmail, $userPassword, $type, $imageName);
    
            return array("status" => true, "message" => "Utilisateur a été ajouté!");
        } else {
            return array("status" => false, "message" => "Utilisateur déjà trouvé!");
        }
    }
    

    function getUser(){
        $userId = $_SESSION['id'];
        $userModel = new UserModel();
        $user = $userModel->getUserById($userId);

        return $user;

    }
    function getUserById($userId){
        $userModel = new UserModel();
        $user = $userModel->getUserById($userId);

        return $user;

    }
    function getAdmins(){
        $userModel = new UserModel();
        $admins = $userModel->getUsers();
        $users = [];
        foreach($admins as $admin){
            if($admin['type']=='administrator')$users[] = $admin;
        }
        return $users;

    }
    function getClient(){
        $userModel = new UserModel();
        $admins = $userModel->getUsers();
        $users = [];
        foreach($admins as $admin){
            if($admin['type']=='client')
            $admins[] = $admin;
        }
        return $users;

    }
    function numberofadmins(){
        $userModel = new UserModel();
        $user = $userModel->getUsers();
        $number = 0;
        foreach ($user as $row) {
            if ($row['type']=='administrator')
            $number++;
        }
        return $number;
    }
    function numberofclients(){
        $userModel = new UserModel();
        $user = $userModel->getUsers();
        $number = 0;
        foreach ($user as $row) {
            if ($row['type']=='client')
            $number++;
        }
        return $number;
    }
    function dropUser($userId){
        
    }
    


    ?>

