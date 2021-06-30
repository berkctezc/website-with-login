<?php 
if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid)||empty($password)){
        #kullanıcı alanları boş bırakmış mı
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else{
        #databaseimizde kullanıcının idsi veya emaili var mı
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?error=sqlerror3");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
    
                if($password!=$row['pwdUsers']){
                    header("Location: ../index.php?error=".'yanlisGirilenSifreniz:'.$password);
                    exit();
                }
                else if($password==$row['pwdUsers']){

                    ##GIRIS BASARILI
                    #databasedeki bilgileri sessiona kaydediyoruz
                      session_start();
                      $_SESSION['userId']=$row['idUsers'];
                      $_SESSION['userUid']=$row['uidUsers'];

                      $_SESSION['email']=$row['emailUsers'];
                      $_SESSION['pwd']=$row['pwdUsers'];
                      $_SESSION['bdate']=$row['bdateUsers'];
                      $_SESSION['avatar']=$row['avatarUsers'];

                      $_SESSION['active']=$row['activeUsers'];

                      $_SESSION['phone']=$row['phoneUsers'];
                      $_SESSION['adres']=$row['adresUsers'];
                      $_SESSION['detail']=$row['detailUsers'];

                      header("Location: ../index.php?error=success");
                      exit();
                }
                else{
                    header("Location: ../index.php?error=somethinghappened");
                    exit();
                }
            }
            else{
                header("Location: ../index.php?error=usernotfound");
                exit(); 
            }
        }
    }

}else{
    header("Location: ../index.php");
    exit();
}
