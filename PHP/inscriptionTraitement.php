<?php
session_start();
include "class/Db.php";
$db = new Db();
if($_POST["password"] == $_POST["passwordConfirm"]) {
    $passwordHash = password_hash($_POST["password"]);
    $result = $db->createAccount($_POST["username"], $passwordHash);
    if($result == 0){
        $_SESSION["testIncription"] = "good";
        header("Location: ../index.php");
    }
    else if($result == 1){
        $_SESSION["testIncription"] = "badEmail";
        header("Location: ../inscription.php");
    }
}
else{
    $_SESSION["testIncription"] = "badPassword";
    header("Location: ../inscription/php");
}