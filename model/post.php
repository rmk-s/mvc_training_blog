<?php

class Post{
    
    public function getPosts(){
        $db = new Database();
        $connection = $db->getConnection();
        $sql ="SELECT * FROM post";
        $result = $connection->query($sql);

        return $result;
    }

    public function getPost($postId){
        $db = new Database();
        $connection = $db->getConnection();
        var_dump($postId);
        $prep = $connection->prepare('SELECT * FROM post WHERE postID =:postId');
        $prep->execute([':postId'=>$postId]);
        $prep->fetch();
    }

}


?>