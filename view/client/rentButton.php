<script>
    function showAlert(message, link, linkText, type) {
        let alertMessage = document.getElementById("alertmessage");
        alertMessage.innerHTML = message + ' <a href="'+link+'" class="alert-link">' + linkText + '</a> <button type="button" class="btn-close" onclick="closeAlert()"></button>';
        alertMessage.classList.remove("d-none");
        alertMessage.classList.add(type);

        // Automatically close the alert after 5000 milliseconds (5 seconds)
        setTimeout(function () {
            closeAlert();
        }, 5000);
    }

    function closeAlert() {
        let alertMessage = document.getElementById("alertmessage");
        alertMessage.classList.add("d-none");
    }
</script>

<div style="z-index: 5000; top: 30px;" id="alertmessage"
    class="d-none alert  position-fixed start-50 translate-middle-x" role="alert">
    <!-- messag ayban hna -->
</div>


<?php

if (isset($_GET['rentnow'])) {
    $rentStatus = createPendingOrder();
    echo '<script> showAlert(\'vous  avez louez cette propriété avec succès\',\'?page=all_properties\', \'click ici pour voir\', \'alert-success\') </script>';
}

if (isset($_GET['derent'])) {
    $rentStatus = createPendingOrder();
    echo '<script> showAlert(\'vous avez louez cette propriété avec succès\',\'?page=all_properties\', \'click ici pour voir\', \'alert-success\') </script>';
}



if (isset($_SESSION["id"])) {
    $isTheOrderExest = checkIfOrderExist();

    $isItRented = getLogement($_GET['id']);
    
    if ($isItRented['status'] == 'available') {
         if (!$isTheOrderExest) {
            echo '<div class="rent-it-button-contaner">
                    <a href="' . $_SERVER['PHP_SELF'] . '?page=logement&id=' . $logement['id'] . '&rentnow">
                    <span>
                    <i class="bi bi-credit-card"></i>
                    </span>
                    <div class=" rentitButton ">
                    rent it now
                    </div>
                    </a>
                    </div>';
        }
        else{
            echo '<button class="notAllowedButton" onClick="showAlert(\'vous avez deja envoyer une demande, si vous vouler annuler la demande\', \'' . $_SERVER['PHP_SELF'] . '?page=logement&id=' . $logement['id'] . '&derent\', \'click ici\', \'alert-info\')">
                   <span>attent</span>
               <span>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-miterlimit="2" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd"><path fill-rule="nonzero" d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"></path></svg>
               </span>
           </button>';
        }
    } else if ($isItRented['status'] == 'rented') {
        echo '<button class="notAllowedButton" onClick="showAlert(\'ce logement est deja loué pour revenir \',\'?page=all_properties\', \'click ici\', \'alert-danger\')">
                   <span>déja loué</span>
               <span>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-miterlimit="2" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd"><path fill-rule="nonzero" d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"></path></svg>
               </span>
           </button>';
    } else if ($isItRented['status'] == 'unavailable') {
        echo '<button class="notAllowedButton" onClick="showAlert(\'ce logement est Indisponible pour le moment\', \'?page=all_properties\', \'vour tout les logements\', \'alert-danger\')">
                <span>Indisponible</span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-miterlimit="2" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd"><path fill-rule="nonzero" d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"></path></svg>
            </span>
        </button>';
    }


} else {
    echo '<button class="notAllowedButton" onClick="showAlert(\'vous devez d\\\'abord vous connecter pour louer ceci:\', \'?page=login\', \'click ici pour se connecter\', \'alert-danger\')">
                    <span>Not allowed!</span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-miterlimit="2" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd"><path fill-rule="nonzero" d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"></path></svg>
                </span>
            </button>';
}
?>