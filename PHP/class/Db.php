<?php

class db
{
public $pdo;
function __construct(){
    try {
        $this->pdo = new PDO('sqlite:' . __DIR__ . '/../database/base.db');
    }
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}

 public function createAccount(string $email, string $password){
    try{
    $sth = $this->pdo->prepare("SELECT * FROM Accounts WHERE email= :email");
    if($sth->execute(["email" => $email])){
        return 1;
    }}catch (PDOException $e){
        echo $e->getMessage();
    }
    $sth = $this->pdo->prepare("INSERT INTO Users(email, password) VALUES(:email, :password)");
    if($sth->execute(["email" => $email, "password" => $password])){
        return 0;
    }
    return 2;
 }
}