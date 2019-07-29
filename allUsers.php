<?php require "header.php";
require "inner/dbh.inc.php";
?>
<style>
    .allUsers {font-family: 'Titillium Web', sans-serif;}
    table {border-collapse: collapse;
        width: 100%;}
    th,td {text-align: left;
        padding: 8px;}
    tr:nth-child(even) {background-color: gray;
        color: white; }
    th {background-color: rgba(13, 115, 216, 1);
        color: white;}
    a {text-decoration: none;
        color: rgba(13, 115, 216, 1); }
</style>
<?php
if (isset($uid)) {
    if ($uid == "admin") {
        $sql = mysqli_query($conn, "SELECT * FROM users");
        ?>
        <div class="container allUsers">
            <center>
                <h2>Kullanıcılar</h2>
            </center>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Kullanıcı Adı</th>
                    <th>E-Posta</th>
                    <th>Doğum Tarihi</th>
                    <th>Telefon Numarası</th>
                    <th>Adres</th>
                    <th>Kaldır</th>
                </tr>
                <?php while ($row = mysqli_fetch_array($sql)) {
                    $idUsers = $row['idUsers']; $uidUsers = $row['uidUsers'];$email = $row['emailUsers'];
                    $bdate = $row['bdateUsers'];$phone = $row['phoneUsers'];$address = $row['adresUsers']; ?>
                    <tr>
                        <td><?php echo "$idUsers" ?></td>
                        <td><?php echo "$uidUsers" ?></td>
                        <td><?php echo "$email" ?></td>
                        <td><?php echo "$bdate" ?></td>
                        <td><?php echo "$phone" ?></td>
                        <td><?php echo "$address" ?></td>
                        <td><?php echo '<a href="inner/remove_user.php?idUsers=' . $row['idUsers'] . '"><i class="material-icons">delete_forever</i></a>' ?></td>
                    </tr>
                <?php } ?>
            </table>
            <br><br>
        <?php
    } else if ($uid != 'admin') {
        echo '<script language="javascript">';
        echo 'alert("Yetkiniz Yeterli Değildir");';
        echo '</script>';
    }
} ?>
</div>
<?php require "footer.php" ?>