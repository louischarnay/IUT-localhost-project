<?php
session_start();
include_once "class/Db.php";
$db = new Db();
$db->deleteUser($_SESSION["connectedId"], $_POST["username"]);
header("Location: ../profil.php");
