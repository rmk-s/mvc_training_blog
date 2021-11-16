<?php

class Database{
   
    const HOST_BD = 'mysql:host=localhost;dbname=blogmvc;charset=utf8';	
    const LOGIN_BD = 'root';
    const PASS_BD = 'root';

    public function getConnection() //:PDO
    {
        try{
            
            $connection = new PDO(self::HOST_BD, self::LOGIN_BD, self::PASS_BD);
            $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $connection;
        }
        catch (\Exception $exception) {
            die  ("Echec de connexion : " . utf8_encode($exception->getMessage()) . "\n"); // comme un exit mais en plus un messages'affiche pour l'utilisateur
        }
    }
}


?>