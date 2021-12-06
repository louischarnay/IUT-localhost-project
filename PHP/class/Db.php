<?php

class db
{
public $pdo;
function __construct(){
    $this->pdo = new PDO('sqlite: '.__DIR__ . '/../database/base.db');
}

 public function createAccount(string $email, string $password){
    $sth = $this->pdo->prepare("SELECT * FROM Users WHERE username= :email");
    $sth->execute([

    ])
 }
}