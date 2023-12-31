<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $status;
  $name = $_POST["name"];
  $fname = $_POST["firstname"];
  $email = $_POST["email"];
  $pwd = $_POST["password"];
  $userStatus = addClient($fname, $name, $email, $pwd);
  if($userStatus["status"]){
        header("location: index.php");

        exit();
      }

}
?>
<main id="main">

  
<!-- partial:index.partial.html --> 
<div style="display: flex;justify-content: center;align-items: center;min-height: 150vh;background: #fff;">
<section class="signup-section"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

<div class="signin" > 

 <div class="content" > 

  <h2>Sign Un</h2> 

                <?php
                if(isset($userStatus["status"])){

                    echo '<div class="alert ';
                    if($userStatus["status"]) echo 'alert-success';
                    else echo 'alert-danger';
                    echo ' d-flex align-items-center justify-content-center" role="alert" style="display: flex;justify-content: space-between;" >
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <div><p>
                    '.$userStatus["message"].'</p>
                    </div>
                  </div>';
                  }
                ?>

  <form class="form" action="<?php echo $_SERVER['PHP_SELF'].'?page=signup'; ?>" method="post" enctype="multipart/form-data">

  

   <div class="inputBox"> 

    <input type="text" name="name" required> <i>Prénom</i> 

   </div> 

   <div class="inputBox"> 

    <input type="text" name="firstname" required> <i>Nom</i> 

   </div> 
   <div class="inputBox"> 

    <input type="email" name="email" required> <i>E-mail</i> 

   </div> 

   <div class="inputBox"> 

    <input type="password" name="password" required> <i>Password</i> 

   </div> 

   <div class="inputBox">
    <input type="file" name="profile_image" accept="image/*">
   </div>



   <div class="links">
     <a href="#">Forgot Password</a>
    <a href="<?php echo $_SERVER['PHP_SELF'].'?page=login'; ?>">Log In</a> 

   </div> 

   <div class="inputBox"> 

    <input type="submit" value="Login"> 

   </div> 

  
  </form>

 </div> 

</div> 

</section> 
</div><!-- partial -->
  </main>