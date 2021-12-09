<?php
session_start();
include_once "class/Db.php";
$db = new Db();
$result = $db->addUser($_SESSION["connectedId"], $_POST["newUser"]);
header("Location: ../profil.php");
