<?php
session_start();
$_SESSION["userID"] = $_POST["userId"];
header("Location: ../index.php");