<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $status;
  $name = $_POST["name"];
  $fname = $_POST["firstname"];
  $email = $_POST["email"];
  $pwd = $_POST["password"];
  if(addClient($fname, $name, $email, $pwd)){
        header("location: index.php");
        $status = true;
        exit();
      }
      else{
        $status = false;
      }
}
?>
<main id="main">

  
<!-- partial:index.partial.html --> 
<div style="display: flex;justify-content: center;align-items: center;min-height: 170vh;background: #fff;">
<section class="signup-section"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

<div class="signin" > 

 <div class="content" > 

  <h2>Sign Un</h2> 

  <?php
  if(isset($status) && $status === false){

      echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="display: flex;justify-content: space-between;" >
      <i class="bi bi-exclamation-triangle-fill"></i>
      <div>
        E-mail deja exest !!! Veuillez réessayer
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