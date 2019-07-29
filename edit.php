<?php require 'header.php' ?>

<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/icon.css">

<main>
<div class="container">
<h1>Profili Düzenle</h1>
<form class="signupForm" action="inner/edit.in.php" method="post">
    Yeni E-postanız: <input type="text" name="newmail" placeholder="<?php echo $_SESSION['email']; ?>">
    Yeni Telefon Numaranız: <input type="text" name="newphone" placeholder="<?php echo $_SESSION['phone']; ?>">
    Yeni Doğum Tarihiniz: <input type="date" name="newbdate" placeholder="<?php echo $_SESSION['bdate']; ?>">
    Yeni Adresiniz: <input type="text" name="newadres" placeholder="<?php echo $_SESSION['adres']; ?>">
    Yeni Hakkınızda: <input type="text" name="newdetail" placeholder="<?php echo $_SESSION['detail']; ?>">
    <br>
    Yeni Avatar: <input type="text" name="newavatar" placeholder="Avatar URL">
    Yeni Şifreniz: <input type="password" name="newpwd" placeholder="Password">
    <br>
    <button type="submit" >Gönder</button> <br>
</form>

</div>

</main>
<br><br><br><br><br>

<?php require 'footer.php' ?>