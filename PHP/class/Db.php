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
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $sth = $this->pdo->prepare("INSERT INTO Accounts(email, password) VALUES(:email, :password)");
    if($sth->execute(["email" => $email, "password" => $passwordHash])){
        return 0;
    }
 }

 public function login(string $email, string $password){
    $sth = $this->pdo->prepare("SELECT * FROM Accounts WHERE email= :email");
    $sth->execute(["email" => $email]);
    $result = $sth->fetch();
    if(password_verify($password, $result["password"])){
        return $result["idAccount"];
    }
    return false;
 }

 public function getUsersFromAccountId(string $accountId){
    $sth = $this->pdo->prepare("SELECT * FROM Users WHERE accountId= :accountId");
    $sth->execute(["accountId" => $accountId]);
    $result = $sth->fetchAll();
    return $result;
 }

 public function addUser(string $accountId, string $username){
    $sth = $this->pdo->prepare("SELECT * FROM Users WHERE accountId= :accountId AND username= :username");
    $sth->execute(["accountId" => $accountId, "username" => $username]);
    if($sth->fetch() != null){
        return 1;
    }
    $sth = $this->pdo->prepare("INSERT INTO Users(username, accountId) VALUES(:username, :accountId)");
    $sth->execute(["username" => $username, "accountId" => $accountId]);
    return 0;
 }

 public function deleteUser(string $accountId, string $username){
    $sth = $this->pdo->prepare("DELETE FROM Users WHERE accountId= :accountId AND username= :username");
    $sth->execute(["accountId" => $accountId, "username" => $username]);
 }

 public function addRate(string $userId, int $rate, string $movieName){
    $sth = $this->pdo->prepare("INSERT INTO Rates(mark, userId, movieName) VALUES(:mark, :userId, :movieId)");
    $sth->execute(["mark" => $rate, "userId" => $userId, "movieName" => $movieName]);
 }
}