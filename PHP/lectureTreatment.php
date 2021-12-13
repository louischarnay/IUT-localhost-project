<?php
session_start();
include "class/Db.php";
$db = new Db();
$db->addRate($_SESSION["userID"], $_POST["rate"], "Film COOL");
header("Location: ../lecture.php");
