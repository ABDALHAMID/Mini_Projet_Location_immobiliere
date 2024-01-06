
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $commentaire = $_POST["Commentaire"];
        addCommentaireController($commentaire);
    }
?>
<div id="commentForm" class="d-none commenterpage" >
        <div class="overlay"></div>
        
        <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
            <div class="commenter">
            <h3 style="color: white;">Ajouter un commentaire</h3>

            </div>
            <div class="commenter">
                <input type="text" class="input" name="Commentaire" required="" placeholder="commentaire">
</input>
                
            </div>
            <button type='Submit' >
                Envoyer
                <span></span>
</button>
        </form>
    
</div>