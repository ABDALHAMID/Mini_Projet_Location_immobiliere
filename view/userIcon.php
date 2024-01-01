<?php

if (isset($_SESSION["id"]) && isset($_SESSION["type"])) {
   $user = getUser();
   echo '<div class="user-fild">';
   echo '
         <div>
         <button id="active-user-btn-message" class="active-user-button-message">
            <div class="active-user-content-avatar">
               <div class="active-user-status-user"></div>
               <div class="active-user-avatar">
                  <img class="active-user-user-img" src="assets/img/UsersImages/'.$user['image_path'].'">
               </div>
            </div>
            <div class="active-user-notice-content">
               <div class="active-user-username">'.$user['nom'].' '.$user['prenom'].'</div>
               <div class="active-user-lable-message">profile</div>
               <div class="active-user-user-id">'.$user['email'].'</div>
            </div>
         </button>
         </div>';
   echo '<div>
         <a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?page=logout' . '" class="text-reset">
            <button class="logout-Btn">
         
               <div class="logout-sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
               
               <div class="logout-text">Logout</div>
            </button>
         </a>
         </div>';
   echo '</div>';

} else {
   echo '
    <a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?page=signup' . '" class="btn btn btn-success mr-2">
       signup
    </a>
    <a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?page=login' . '" class="btn btn-outline-success mr-2">
       login
    </a>';
}






?>
