<?php
session_start();
$_SESSION["userID"] = $_POST["username"];
header("Location: ../index.php");