<?php
session_start();
include "class/Db.php";
$db = new DB();
$result = $db->login($_POST["username"], $_POST["password"]);
if($result == false){
    header("Location: ../connexion.php");
}
else{
    $_SESSION["connectedId"] = $result;
    $result = $db->getUsersFromAccountId($_SESSION["connectedId"]);
    $_SESSION["userId"] = $result[0]["idUser"];
    header("Location: ../index.php");
}