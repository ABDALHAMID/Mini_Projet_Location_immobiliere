
<?php
include('view/header.php');

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'all_properties':
            include('all_properties.php');
            break;
        case 'login':
            include('view\login\login.php');
            break;
        case 'signup':
            include('view\login\signup.php');
            break;
        case 'about':
            include('about.php');
         break;
        case 'contactUs':
            include('contactus.php');
        break; 
        case 'logement':
            include('logement.php');
        break;
        case 'logout':
        break;  
        
        default:
            header('location:?404');
            break;
    }
}
else{
    

    include("introSection.php");
    
    echo '<main id="main">';
    
    
    include("nosService.php");
    
    include("latestProperties.php");
    
    
    include("Testimonials.php");


    echo '</main>';

}

include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
