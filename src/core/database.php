<?php

require_once __DIR__ . '/../../config.php';

class Database {
    public static function connect() {

    try{

    return new PDO(
            "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

    }catch(PDOException $e){

    
    printf('Erro ao conectar a base de dados');
    sleep(10);
    header('Location:../../public/index.php?page=home');

    }
        
    }
}


?>