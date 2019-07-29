<?php require "header.php" ?>

<link rel="stylesheet" href="resources/css/user_info.css">
<div class="container">

  <?php if (isset($_SESSION['userId'])) : ?>
    <div class="center">

      <div class="card green">
        <div class="additional CardContainer">

          <img src="<?php echo $_SESSION['avatar']; ?>" alt="photo" class="avatarImg">
          <div class="bottom-right editProfile"><a href="edit.php"><i class="material-icons">edit</i>Düzenle</a></div>
          <br>
          <div class="bottom-left editProfile"><a href="inner/deactivate.php"><i class="material-icons">snooze</i>Dondur</a></div>

        </div>
        <div class="general">
          <h2><i class="material-icons">directions_walk</i> <?php echo $_SESSION['userUid'] ?></h2>
          <p><i class="material-icons">details</i><?php echo $_SESSION['detail'] ?></p>
          <div><i class="material-icons">cake</i><?php echo $_SESSION['bdate'] ?></div>
          <div><i class="material-icons">phone</i><?php echo $_SESSION['phone'] ?> </div>
          <div><i class="material-icons">email</i><?php echo $_SESSION['email'] ?> </div>
          <div><i class="material-icons">location_on</i><?php echo $_SESSION['adres'] ?> </div>
          <span class="more">id: <?php echo $_SESSION['userId'] ?></span>
        </div>
      </div>

    </div>
  <?php else :
  echo '<p style="color:red;">Bu Bölüme Giriş Yapmadan Erişemessiniz</p>';
endif;
?>

</div>

<?php require "footer.php" ?>