<?php
session_start();
include "class/Db.php";
$db = new Db();
if(isset($_SESSION["connectedId"])) {
    $db->addRate($_SESSION["connectedId"], $_POST["rate"], "Film COOL");
}
header("Location: ../index.php");
