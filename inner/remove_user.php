<?php
ob_start();
require "dbh.inc.php";
require "../allUsers.php";
$silinecekID = $_GET["idUsers"];

$sql = mysqli_query($conn, "DELETE FROM users WHERE idUsers = '$silinecekID' ");

header("Location: ../allUsers.php");
ob_flush();