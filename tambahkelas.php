<?php
    require_once('config.php');
    if(isset($_POST{'simpan'})){
        extract($_POST);
        $insert = mysqli_query($conn,"insert into tbkelas value(null,'$nama_kelas','$jurusan')");
        if($insert){
            ?>
                <script>
                    alert('simpan berhasil');
                    location.href='?hal=tampilkelas';
                </script>
            <?php
        }
    }
?>
<html>
    <head>
        <title>tambah data</title>
</head>
<body>
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
  </body>
</html>