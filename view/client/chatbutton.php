<script>
function showDialogue() {
        let Message = document.getElementById("dialogue");
        Message.classList.remove("d-none");
        let b = document.getElementById("dialoguef");
        b.classList.remove("d-none");

    }

    function closeDialogue() {
        let Message = document.getElementById("dialogue");
        Message.classList.add("d-none");
        let b = document.getElementById("dialoguef");
        b.classList.add("d-none");

    }
    </script>
<button class="cssbuttons-io-button" onclick="showDialogue()">
  Rent It Chat
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>
<div id="dialoguef" class="d-none">
    <h2>Chat Dialogue</h2>
    <!-- Ajoutez ici le contenu de votre dialogue -->
    <button onclick="closeDialogue()">Fermer</button>
</div>


<?php
include('Chat.php');
?>


