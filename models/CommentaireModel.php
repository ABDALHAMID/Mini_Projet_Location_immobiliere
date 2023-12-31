<?php

class CommentaireModel {
    

    public function __construct() {
        $this->db = $this->connectToDatabase();
    }

    private function connectToDatabase() {
        require_once('database_connection.php');
        return $mysqli;
    }
    }

    public function getAllCommentaires() {
        $query = "SELECT * FROM commentaires";
        $result = $this->db->query($query);

        $commentaires = [];
        while ($row = $result->fetch_assoc()) {
            $commentaires[] = $row;
        }

        return $commentaires;
    }

    public function addCommentaire($commentaire) {
        $query = "INSERT INTO commentaires (`Commentaire`, `DateCommentaire`) VALUES (?, current_timestamp())";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $commentaire);

        // Exécution de la requête préparée
        $result = $stmt->execute();

        // Fermeture de la requête préparée
        $stmt->close();

        return $result;
    }

    // Autres méthodes...

}

?>
