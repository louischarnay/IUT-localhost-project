<?php
session_start();
include "class/Db.php";
$db = new Db();
header("Location: ../lecture.php");
