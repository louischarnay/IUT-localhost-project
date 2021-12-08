<?php

class db
{
public $pdo;
function __construct(){
}

 public function createAccount(string $email, string $password){
    try {
        $pdo = new PDO('sqlite: ' . __DIR__ . '/../database/database.db');
    }
 catch (PDOException $e) {
         echo 'Connexion échouée : ' . $e->getMessage();
     }
    return 1;
 }
}