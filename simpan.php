<?php
ob_start();
session_start();
include("koneksi.php");
$noPeraturan            = $_POST['noPeraturan'];
$tahun           = $_POST['tahun'];
$tentang        = $_POST['tentang'];
$status  = $_POST['status'];
$pilihbagian  = $_POST['pilihbagian'];
$data = $_FILES['data']['name']; //buat inisialisasi pada database 





// menyimpan data kedalam variabel

		if( $_POST['pilihbagian']=="bagian_kepegawaian")
		{

			$bagian= "Bagian Kepegawaian";
			$folder="upload/bagian_kepegawaian/";
		}
		else if( $_POST['pilihbagian']=="bagian_umum")
		{

			$bagian= "Bagian Umum";
			$folder="upload/bagian_umum/";
		}
		else if( $_POST['pilihbagian']=="bagian_organisasidantatalaksana")
		{

			$bagian= "Bagian Organisasi dan Tata Laksana";
			$folder="upload/bagian_organisasidantatalaksana/";
		}
		else if( $_POST['pilihbagian']=="bagian_perencanaandankeuangan")
		{

			$bagian= "Bagian Perencanaan dan Keuangan";
			$folder="upload/bagian_perencanaandankeuangan/";
		}
		else if( $_POST['pilihbagian']=="subdit_mutasihakim")
		{

			$bagian= "Subdit Mutasi Hakim";
			$folder="upload/subdit_mutasihakim/";
		}
		else if( $_POST['pilihbagian']=="subdit_mutasipaniteradanjurusita")
		{

			$bagian= "Subdit Mutasi Panitera dan Jurusita";
			$folder="upload/subdit_mutasipaniteradanjurusita/";
		}
		else if( $_POST['pilihbagian']=="subdit_bimbingandanmonitoring")
		{

			$bagian= "Subdit Bimbingan dan Monitoring";
			$folder="upload/subdit_bimbingandanmonitoring/";
		}
		else if( $_POST['pilihbagian']=="subdit_tatakelola")
		{

			$bagian= "Subdit Tata Kelola";
			$folder="upload/subdit_tatakelola/";
		}
		else if( $_POST['pilihbagian']=="subdit_data")
		{

			$bagian= "Subdit Data";
			$folder="upload/subdit_data/";
		}	
		else if( $_POST['pilihbagian']=="subdit_syariah")
		{

			$bagian= "Subdit Syariah";
			$folder="upload/subdit_syariah/";
		}
			else if( $_POST['pilihbagian']=="subdit_kasasi")
		{

			$bagian= "Subdit Kasasi";
			$folder="upload/subdit_kasasi/";
		}
			else if( $_POST['pilihbagian']=="subdit_pk")
		{

			$bagian= "Subdit PK";
			$folder="upload/subdit_pk/";
		}
			else if( $_POST['pilihbagian']=="subdit_a")
		{

			$bagian= "Subdit A";
			$folder="upload/subdit_a/";
		}
			else if( $_POST['pilihbagian']=="subdit_b")
		{

			$bagian= "Subdit B";
			$folder="upload/subdit_b/";
		}






echo "<script> window.onload=confirmFunction(); </script>"; 
// query SQL untuk insert data

if(isset($_POST['upload']))   //kodingan upload
{
	$data = $_FILES['data']['name'];  //copykan ini atas
	$data_loc = $_FILES['data']['tmp_name'];
	
	if(move_uploaded_file($data_loc,$folder.$data))
	{
		echo "berhasil";
	}
	else
	{
			echo "gagal";
	} 
}
// --------------------------------------------------------
$query="INSERT INTO $pilihbagian  SET  noPeraturan='$noPeraturan',tahun='$tahun',tentang='$tentang',status='$status',bagian='$bagian',file='$data'";

mysqli_query($conn, $query);

header("location:home.php");// mengalihkan ke halaman index.php


?>