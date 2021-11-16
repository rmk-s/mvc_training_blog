<?php

class Auteur{
    
    public function getAuteurs(){
        $db = new Database();
        $connection = $db->getConnection();
        $sql ="SELECT * FROM auteur";
        $result = $connection->query($sql);

        return $result;
    }

    public function getAuteur($autId){
        $db = new Database();
        $connection = $db->getConnection();
        var_dump($connection);
        $prep = $connection->prepare('SELECT * FROM auteur WHERE auteurId = :autId');
        $prep->execute([':autId'=>$autId]);
        $prep->fetch();
        var_dump($prep->fetchAll(), $autId);

        return $prep;
    }
}


?>