<?php
include_once('config.php');
// proses select data
$id = isset($_GET['id'])?$_GET['id']:"";
if($id != ""){
    $se1 = mysqli_query($conn, "select * from tbkelas where idkelas=$id");
    $data = mysqli_fetch_array($se1);
}

// proses update data
if(isset($_POST['update'])){
    extract($_POST);
    $up = mysqli_query($conn, "update tbkelas set namakelas='$namakelas','jurusan='$jurusan' where idkelas=$id");
    if($up){
        ?>
        <script>
            alert('Update Berhasil');
            location.href='?hal=tampilkelas';
        </script>
        <?php
    }
}
?>
<a href="?hal=tampilkelas">kembali ke home</a>
    <br>
    <br>
    <form action="?hal=tambahkelas" method="post">
        <table>
            <tr>
                <td>kelas</td>
                <td><input type="text" name="nama_kelas" placeholder="kelas" maxlength="20"></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>
                    <select name="jurusan"> 
                        <option value="">==Pilih Jurusan==</option>
                        <option value="BD">bisnis digital</option>
                        <option value="MP">menejemen perkantoran</option>
                        <option value="DKV">desain komukasi visual</option>
                        <option value="AK">akutansi keuangan</option>
                        <option value="RPL">rekayasa perangkat lunak</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><button type="submit" name="simpan" value="simpan">simpan</button></td>
                    <td><button type="reset" name="reset">reset</button></td>
                </tr>
        </table>
    </form>