<?php
require 'dbh.inc.php';
session_start();

if (!$conn) {
    die("baglanti saglanamadi" . mysqli_connect_error());
}

#formdan gelen post degerlerini sorgular icinde daha rahat kullanmak icin degiskenlere atadik
$newmail = $_POST['newmail'];
$newphone = $_POST['newphone'];
$newbdate = $_POST['newbdate'];
$newadres = $_POST['newadres'];
$newdetail=$_POST['newdetail'];
$newavatar = $_POST['newavatar'];
$newpassword = $_POST['newpwd'];

$uid = $_SESSION['userUid'];


# zorunlu alanlardan biri bos birakildiysa
if (empty($newmail) || empty($newphone) || empty($newbdate) ||empty($newpassword) || empty($newavatar) || empty($newavatar) || empty($newadres) ) {
    header("Location: ../edit.php?error=emptyfields");
    exit();
}
# email formatı dogru mu
else if (!filter_var($newmail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../edit.php?error=invalidmailuid&uid=");
    exit();
} else {
    $sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
    $stmt = mysqli_stmt_init($conn);

    $sql = "UPDATE users SET emailUsers='$newmail', phoneUsers='$newphone', bdateUsers='$newbdate',adresUsers='$newadres',detailUsers='$newdetail', avatarUsers='$newavatar', pwdUsers='$newpassword'  WHERE uidUsers='$uid'";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_query($conn, $sql)) {
        header("Location: ../edit.php?error=success");
        exit();
       } else {
        echo "Error updating record: " . mysqli_error($conn);
       }
}
mysqli_close($conn);
