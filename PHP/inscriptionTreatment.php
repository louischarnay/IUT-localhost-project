<?php
session_start();
include "class/Db.php";
$db = new Db();
if($_POST["password"] == $_POST["passwordConfirm"]) {
    $result = $db->createAccount($_POST["username"], $_POST["password"]);
    if($result == 0){
        $_SESSION["testIncription"] = "good";
        $result = $db->login($_POST["username"], $_POST["password"]);
        $_SESSION["connectedId"] = $result;
        $db->addUser($_POST["username"], $result);
        $result = $db->getUserId($_POST["username"]);
        $_SESSION["connectedUser"] = $_POST["username"];
        $result = $db->getUser($_POST["username"], $_POST["username"]);
        $_SESSION["userId"] = $result;
        header("Location: ../index.php");
    }
    else if($result == 1){
        $_SESSION["testIncription"] = "badEmail";
        header("Location: ../inscription.php");
    }
}
else{
    $_SESSION["testIncription"] = "badPassword";
    header("Location: ../inscription.php");
}