<?php
if (isset($_POST['signup-submit'])) { //kullanici formu tamamlayıp mı gelmis
    require "dbh.inc.php";

    #formdan gelen post degerlerini sorgular icinde daha rahat kullanmak icin degiskenlere atadik
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    $bdate = $_POST['bdate'];
    $avatar = $_POST['avatar'];

    #avatar urlsi girilmemisse default avatar resmi atama
    if (empty($avatar)) {
        $avatar = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png";
    }

    # zorunlu alanlardan biri bos birakildiysa
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
        exit();
    }
    # email formatı dogru mu && regexle istenmeyen karakterlerin alınmasını engelliyoruz
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid&uid=");
        exit();
    }
    #herhangi bir alan yanlis girildiginde kullanıcının dogru girdigi alanları tekrar girmeye ugrasmamasi icin forma geri döndürüyoruz
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        # eposta adresi yanlis girilmisse
        header("Location: ../signup.php?error=invaliduid&mail=" . $email);
        exit();
    }
    # username formati dogru mu
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=" . $email);
        exit();
    }
    #password iki kez dogru girildi mi
    else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    }
    #kullanicinin sectigi username daha önce üye olmus birinin username'i ile cakisiyor mu?

    else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, avatarUsers,bdateUsers) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror2");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $password,$avatar,$bdate);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);  #resource israfı olmaması için baglantiyi sonlandiriyoruz
    mysqli_close($conn);
} else {
    header("Location: ../signup.php");
    exit();
}
