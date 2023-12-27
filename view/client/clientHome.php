
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
        
        default:
            # code...
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

