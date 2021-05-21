<?php require "header.php"; ?>
<style>
    .news {
        font-family: 'Titillium Web', sans-serif;
        columns: 1;
    }
</style>

<div class="container news">
    <?php if (isset($_SESSION['userId'])) : ?>

        <br>
        <br>
        <br>

        <iframe src="https://www.cnnturk.com/news/embed_v2/haberler/650x550?p=bilim-teknoloji" width="100%" height="360" frameborder="0"></iframe>

        <br>
        <br>
        <br>

    <?php else :
    echo '<p style="color:red;">Bu Bölüme Giriş Yapmadan Erişemessiniz</p>';
    echo '<h1> test heading </h1>'
endif;
?>

</div>
<?php require "footer.php"; ?>