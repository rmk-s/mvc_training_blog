<?php

class Database{
   
    const HOSTNAME = 'localhost';	
    const BASE = 'blogmvc';
    const LOGIN_BD = 'root';
    const pass_BD = 'root';

    public function getConnection() //:PDO
    {
        try{
            
            $connection = new PDO("mysql:server=HOSTNAME; dbname=BASE", "LOGIN_BD", "PASS_BD");
            $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $connection;
        }
        catch (\Exception $exception) {
            die  ("Echec de connexion : " . utf8_encode($exception->getMessage()) . "\n"); // comme un exit mais en plus un messages'affiche pour l'utilisateur
        }
    }
}


?>