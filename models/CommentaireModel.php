<?php

class CommentaireModel
{
    private $db;

    public function __construct() {
        $this->db = $this->connectToDatabase();
    }

    private function connectToDatabase() {
        return getDatabase();
    }


    // public function getAllCommentaires()
    // {
    //     $query = "SELECT * FROM commentaires";
    //     $result = $this->db->query($query);

    //     $commentaires = [];
    //     while ($row = $result->fetch_assoc()) {
    //         $commentaires[] = $row;
    //     }

    //     return $commentaires;
    // }

    public function addCommentaire($userId, $commentaire)
    {
        $query = "INSERT INTO commentaires (Num, id, Commentaire, DateCommentaire) VALUES (NULL ,'$userId', '$commentaire', NOW())";
        $result = $this->db->query($query);
        if(!$result){
            die($this->db->error);
        }
        return $result;
    }

    // Other methods...

    public function closeDatabaseConnection()
    {
        // Close the database connection
        // Note: This assumes that the connection is managed externally
        // and this method is just an example for demonstration purposes.
        // You may handle connection closure as needed in your application.
    }
}

// Do not instantiate CommentaireModel here
// Instead, instantiate it in the file where you need to interact with the database

// Example of how to use CommentaireModel in another file:
// $conn = new CommentaireModel($databaseConnection);
// $commentaireModel = $conn;

?>
