<?php
require 'dbh.inc.php';
session_start();
$uid = $_SESSION['userUid'];


$sql = "UPDATE users SET activeUsers='0' WHERE  uidUsers = '$uid' "; #kullanıcının aktiflik sütununu 0 yaptık
$stmt = mysqli_stmt_init($conn);
if (mysqli_query($conn, $sql)) {
    $_SESSION['active'] = 0;
    session_unset();
    session_destroy();
    header("Location: ../index.php?error=profiledeactivated");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
exit();
