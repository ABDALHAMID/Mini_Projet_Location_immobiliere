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

    function toggleCommentForm() {
        let form = document.getElementById("commentForm");
              form.classList.remove("d-none");
            }
</script>

<div style="z-index: 5000; top: 30px;" id="alertmessage"
    class="d-none alert  position-fixed start-50 translate-middle-x" role="alert">
    <!-- messag ayban hna -->
</div>


<?php 
  if (isset($_SESSION['id'])) {
    echo '<div class="addbutton-div" id="commentButtonRow">
            <button class="addbutton" onclick="toggleCommentForm()">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Commenter
              </span>
            </button>
          </div>';
          include ('commenterpage.php');
  } else {
    echo '<div class="addbutton-div">
            <button class="addbutton" onclick="showAlert(\'YOU NEED TO LOGIN\',\'?page=login\', \'click here to login\', \'alert-danger\')">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Commenter
              </span>
            </button>
          </div>';
    ;
  }
?>
