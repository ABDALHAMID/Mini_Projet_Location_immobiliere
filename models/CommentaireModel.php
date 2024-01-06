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


    public function getAllCommentaires()
    {
        $query = "SELECT * FROM commentaires";
        $result = $this->db->query($query);

        $commentaires = [];
        while ($row = $result->fetch_assoc()) {
            $commentaires[] = $row;
        }

        return $commentaires;
    }

    public function addCommentaire($userId, $commentaire)
    {
        $query = "INSERT INTO commentaires (Num, id, Commentaire, DateCommentaire) VALUES (NULL ,'$userId', '$commentaire', NOW())";
        $result = $this->db->query($query);
        if(!$result){
            die($this->db->error);
        }
        return $result;
    }
}


?>
