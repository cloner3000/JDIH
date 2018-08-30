<?php
ob_start();
session_start();
include("koneksi.php");
$fullname           = $_POST['fullname'];
$username          = $_POST['username'];
$email        = $_POST['email'];
$phone  = $_POST['phone'];
$password  = $_POST['password'];




// echo "<script> window.onload=confirmFunction(); </script>"; 
// query SQL untuk insert data

// if(isset($_POST['upload']))   //kodingan upload
// {
// 	$data = $_FILES['data']['name'];  //copykan ini atas
// 	$data_loc = $_FILES['data']['tmp_name'];
	
// 	if(move_uploaded_file($data_loc,$folder.$data))
// 	{
// 		echo "berhasil";
// 	}
// 	else
// 	{
// 			echo "gagal";
// 	} 
// }
// --------------------------------------------------------
$query="INSERT INTO member  SET  fullnamen='$fullnamen',username='$username',password='$password',email='$email',phone='$phone',password'$password'";

mysqli_query($conn, $query);
echo "fullname";
echo $fullname;
// header("location:home.php");// mengalihkan ke halaman index.php


?>