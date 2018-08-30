<?php
include("koneksi.php");
// menyimpan data kedalam variabel
session_start();
echo $_SESSION['pilihbagian'];

$kode = $_GET["kode"];
$pilihbagian = $_SESSION['pilihbagian'];


// query SQL untuk insert data

$query= "delete from $pilihbagian where kode='$kode'";

mysqli_query($conn, $query);


header("location:$pilihbagian.php");// mengalihkan ke halaman index.php

?>