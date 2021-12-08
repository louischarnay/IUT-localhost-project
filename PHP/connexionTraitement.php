<?php
session_start();
include "class/Db.php";
$db = new DB();
$result = $db->login($_POST["username"], $_POST["password"]);
if($result == false){
    $_SESSION["connected"] = "unconnected";
    header("Location: ../connexion.php");
}
else{
    $_SESSION["connected"] = $result;
    header("Location: ../index.php");
}