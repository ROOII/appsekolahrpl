<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
    <head>
        <title>Web Sekolah</title>
        <style>
            .header{
                width: 100%;
                height: 40px;
                background: linear-gradient(to right, #000066 0%, #0099ff 100%);
            }
            .sidebar{
                min-height: 400px;
                width: 20%;
                background: linear-gradient(to bottom, #000066 0%, #0099ff 100%);
                float: left;
            }
            .content{
                min-height: 400px;
                width: 79%;
                background: beige;
                float: right;
            }
            .sidebar ul{
                list-style-type: none;
                padding: 0;
            }
            .sidebar li{
                padding: 0px;
                text-align: center;
                border-bottom: 1px solid #0099cc;
            }
            .sidebar a{
                text-decoration: none;
                color: white;
                display: block;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: #0099cc;
            }
            .content a{
                padding: 3px;
                background-color: #278FDF;
                color: #FFF;
                text-decoration: none;
                border-radius: 2px;
            }
            .content table tr{
                height: 30px;
            }
        </style>
    </head>
    <body>
        <div class="header">

        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="?hal=tampil">Data Siswa</a>
                </li>
                <li>
                    <a href="?hal=tampilkelas">Data Kelas</a>
                </li>
                <li>
                    <a href="?hal=setkelas">Seting Kelas</a>
                </li>
                <li>
                    <a href="?hal=presensi">Cetak Presensi</a>
                </li>
                <li>
                    <a href="?hal=tampiluser">User</a>
                </li>
                <li>
                    <a href="?hal=logout">Logout</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <?php
             $hal = isset($_GET['hal'])?$_GET['hal']:"";
             if($hal!=""){
                 include_once("$hal".".php");
            }
            ?>
        </div>
    </body>
</html>