<?php
session_start();
include "class/Db.php";
$db = new Db();
$db->createAccount($_POST["username"], $_POST["password"]);
