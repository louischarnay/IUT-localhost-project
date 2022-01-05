<?php
session_start();
include "class/Db.php";
$db = new Db();
$db->addRate($_SESSION["userID"], $_POST["rate"], $_POST["movie"]);
header("Location: ../lecture.php?title=".$_POST["movieId"]);
header("Location: ../index.php");
