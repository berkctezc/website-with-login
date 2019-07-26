<?php require "header.php" ?>

<main>
    <div class="container">
        <section>
            <?php
            if (isset($_SESSION['userId'])) {
                echo '<p style="color:green;"> Giriş Yapıldı! Hosgeldiniz ' . $_SESSION['userUid'] . '</p>';
            } else {
                echo '<p style="color:red;">Giriş Yapmadınız!</p>';
            }
            ?>
        </section>
    </div>
</main>

<?php require "footer.php" ?>