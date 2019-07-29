<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/icon.css">
<main>
    <div class="container">
        <section class="signup">
            <a href="index.php"><i class="material-icons">arrow_back</i> Anasayfaya Geri Dön</a>
            <h1>Kayıt Ol</h1>
            <form class="signupForm" action="inner/signup.in.php" method="post">
                Kullanıcı Adı: <input type="text" name="uid" placeholder="Username">
                E-Mail: <input type="text" name="mail" placeholder="E-Mail">
                Doğum Tarihiniz: <input type="date" name="bdate">
                Avatar (url): <input type="text" name="avatar" placeholder="Avatar URL">
                Şifreniz: <input type="password" name="pwd" placeholder="Password">
                Şifrenizi Yeniden Giriniz: <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signup-submit">Gönder</button> <br>
            </form>
            <p style="color:gray;">İletişim bilgileri, Adres ve Detaylarınızı üyeliğinizi tamamladıktan sonra profilinizden ekleyebilir ve değiştirebilirsiniz.</p>
            <br>
        </section>
    </div>
</main>