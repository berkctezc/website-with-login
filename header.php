<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">


<?php
if (isset($_SESSION['userId'])) {
    $uid = $_SESSION['userUid'];
    if ($_SESSION['active'] == 0) {
        header("Location: deactivated_account.php");
        exit();
    }
}

# Kullanıcı eğer profilini deaktif etmişse websayfasının içeriğini göstermeden
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programlama Proje</title>
    <link rel="shortcut icon" href="resources/fav.ico" type="image/x-icon">
    <style>
        /*
        TODO
        X php ile mysql kullanarak user ve adminli proje olustur
        X header, main, footer css/html tasarımları hazırla
        X query ile mysql databasei oluştur
        X ozellikleri:username,pass,dogumyili,resim url,detaylar vb.
        X Modal Signup Formu
        X Giris yapan kullanıcıya özel haberler içeriği
        X User info sayfasında profil düzenleme
        X User info sayfasında hesabı dondurma seçeneği
        X user list sadece admin modifikasyon yapabilir
        X admin paneli      
        X diger sayfalarin php dosyalari ve gecisler
        X fonksiyon bazlı dosyaları soyutlama
        X döküman hazırla
        */
    </style>
    <link rel="stylesheet" href="resources/css/icon.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/modal.css">

</head>

<body>
    <header>
        <div class="header">
            <div class="headercont">
                <div class="headercontL">
                    <a href="" id="logo"><i class="material-icons">account_circle</i> PHP & MySQL Login Application</a>
                    <a href="index.php"><i class="material-icons">home</i> Ana Sayfa</a>
                    <a href="news.php"><i class="material-icons">graphic_eq</i> Haberler</a>
                    <a href="user_info.php"><i class="material-icons">face</i> Profiliniz</a>
                    <?php if (isset($_SESSION['userId'])) {
            echo '<a href="allUsers.php"><i class="material-icons">format_list_bulleted</i> Bütün Kullanıcılar</a>';}
                    ?>
                </div>
                <div class="headercontR">
                    <?php if (isset($_SESSION['userId'])) : ?>
                        <?= ' <form action="inner/logout.in.php" method="post">
                     <button type="submit" name="logout-submit">Çıkış Yap</button>
                </form>'; ?>
                    <?php else : ?>
                        <a href="inner/login.in.php" onclick="signUp()"><i class="material-icons">vpn_key</i> Giriş Yap</a>
                        <a href="#SignUp" id="myBtn"><i class="material-icons">note_add</i> Kayıt Ol</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal">
            <!-- Modal içi -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <?php require "signup.php"; ?>
            </div>
        </div>

        <?php if (isset($_SESSION['userId'])) {
            echo ' ';
        } else {
            echo ' 
                <div class="container formContainer">
                     <div class="header-login">
                        <form action="inner/login.in.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/E-Mail Field">
                            <input type="password" name="pwd" placeholder="Password Field">
                            <button type="submit" name="login-submit"> Giriş Yap</button>
                        </form>
                     </div>
                </div>';
        }
        ?>
        <script src="resources/js/modallogin.js"></script>
    </header>