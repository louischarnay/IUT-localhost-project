<?php

class db
{
public $pdo;
function __construct(){
    try {
        $this->pdo = new PDO('sqlite:' . __DIR__ . '/../database/base');
    }
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}

 public function createAccount(string $email, string $password){
    $sth = $this->pdo->prepare("SELECT * FROM Accounts WHERE email= :email");
     $sth->execute(["email" => $email]);
    $result = $sth->fetch();
    if($result){
        return 1;
    }
    $sth = $this->pdo->prepare("INSERT INTO Accounts(email, password) VALUES(:email, :password)");
    if($sth->execute(["email" => $email, "password" => $password])){
        return 0;
    }
 }
}