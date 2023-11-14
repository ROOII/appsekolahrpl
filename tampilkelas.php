<?php
include_once('config.php');
$sql = mysqli_query($conn, "SELECT * FROM tbkelas ORDER BY namakelas DESC, jurusan DESC");


?>
<!DOCTYPE html>
<html>

<body>
    <a class="link" href="?hal=tambahkelas" class="a">Tambah Data Kelas</a>
    <br><br>
    <table border="1" width="90%" cellpadding="8" cellspacing="0" class="table">
        <tr>
            <th>NO</th>
            <th>KELAS</th>
            <th>JURUSAN</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        <?php
        $no = 1;
        while ($baris = mysqli_fetch_array($sql)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $baris['namakelas'] ?></td>
                <td><?= $baris['jurusan'] ?></td>
                <td><a href="?hal=editkelas&id=<?= $baris['idkelas'] ?>">EDIT</a></td>
                <td><a href="?hal=hapuskelas&id=<?= $baris['idkelas'] ?>" onclick="return confirm('yakin akan dihapus?')">HAPUS</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>