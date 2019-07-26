<?php
require 'dbh.inc.php';
session_start();
$uid = $_SESSION['userUid'];


$sql = "UPDATE users SET activeUsers='1' WHERE uidUsers = '$uid' "; #kullanıcının aktiflik sütununu 1 yaptık
$stmt = mysqli_stmt_init($conn);

if (mysqli_query($conn, $sql)) {
    $_SESSION['active']=1;
    header("Location: ../index.php?error=profileactivated");
    exit();
   } else {
    echo "Error updating record: " . mysqli_error($conn);
   }
exit();
