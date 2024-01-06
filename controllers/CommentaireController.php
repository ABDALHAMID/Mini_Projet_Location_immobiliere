<?php

require_once('models/CommentaireModel.php');

// function getAllCommentairesController()
// {
//     $commentaireModel = new CommentaireModel();
//     $commentaires = $commentaireModel->getAllCommentaires();

//     // Vous pouvez traiter les commentaires ici, par exemple les afficher dans une vue.
    
//     return $commentaires;
// }
// Assuming $conn is your database connection object
// $commentaireModel = new CommentaireModel($conn);

function addCommentaireController($commentaire)
{
    $commentaireModel = new CommentaireModel();

    // Vérifiez si le commentaire n'est pas vide avant d'ajouter
    if (!empty($commentaire)) {
        $userid = $_SESSION['id'];
        $result = $commentaireModel->addCommentaire($userid, $commentaire);

        // Vous pouvez gérer le résultat de l'ajout, par exemple rediriger l'utilisateur vers une page spécifique.
         if ($result) {
             return array("status" => true);
         } else {
             return array("status" => false, "message" => 'Erreur lors de l\'ajout du commentaire.');
        }
    } else {
        // Gérez le cas où le commentaire est vide
        return array("status" => false, "message" => "Le commentaire ne peut pas être vide.");
    }
}


?>
