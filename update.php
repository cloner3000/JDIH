<?php
ob_start();
session_start();
include("koneksi.php");
// menyimpan data kedalam variabel


$pilihbagian  =$_SESSION['pilihbagian'];
$kode = $_GET["kode"];
$noPeraturan = $_POST['noPeraturan'];
$tahun= $_POST['tahun'];
$tentang        = $_POST['tentang'];
$status  = $_POST['status'];
$updatedata =$_GET["data"];

if(!empty($_FILES['data']['name'])){
	$data = $_FILES['data']['name'];  // untuk upload
	$data_loc = $_FILES['data']['tmp_name'];// untuk upload
}

else{
	$data = $updatedata;
}




		

		if( $pilihbagian =="bagian_kepegawaian")
		{

			$bagian= "Bagian Kepegawaian";
			$folder="upload/bagian_kepegawaian/";
		}
		else if( $pilihbagian =="bagian_umum")
		{

			$bagian= "Bagian Umum";
				$folder="upload/bagian_umum/";
		}
		else if( $pilihbagian =="bagian_organisasidantatalaksana")
		{

			$bagian= "Bagian Organisasi dan Tata Laksana";
			$folder="upload/bagian_organisasidantatalaksana/";
		}
		else if( $pilihbagian =="bagian_perencanaandankeuangan")
		{

			$bagian= "Bagian Perencanaan dan Keuangan";
			$folder="upload/bagian_perencanaandankeuangan/";
		}

		else if( $pilihbagian =="subdit_mutasihakim")
		{

			$bagian= "Subdit Mutasi Hakim";
			$folder="upload/subdit_mutasihakim/";
		}
		else if( $pilihbagian =="subdit_mutasipaniteradanjurusita")
		{

			$bagian= "Subdit Mutasi Panitera dan Jurusita";
			$folder="upload/subdit_mutasipaniteradanjurusita/";
		}
		else if( $pilihbagian =="subdit_bimbingandanmonitoring")
		{

			$bagian= "Subdit Bimbingan dan Monitoring";
			$folder="upload/subdit_bimbingandanmonitoring/";
		}
		else if( $pilihbagian =="subdit_tatakelola")
		{

			$bagian= "Subdit Tata Kelola";
			$folder="upload/subdit_tatakelola/";
		}
		else if( $pilihbagian =="subdit_data")
		{

			$bagian= "Subdit Data";
			$folder="upload/subdit_data/";
		}	
		else if( $pilihbagian =="subdit_syariah")
		{

			$bagian= "Subdit Syariah";
			$folder="upload/subdit_syariah/";
		}
			else if( $pilihbagian =="subdit_kasasi")
		{

			$bagian= "Subdit Kasasi";
			$folder="upload/subdit_kasasi/";
		}
			else if( $pilihbagian =="subdit_pk")
		{

			$bagian= "Subdit PK";
			$folder="upload/subdit_pk/";
		}
			else if( $pilihbagian =="subdit_a")
		{

			$bagian= "Subdit A";
			$folder="upload/subdit_a/";
		}
			else if( $pilihbagian =="subdit_b")
		{

			$bagian= "Subdit B";
			$folder="upload/subdit_b/";
		}
		// query SQL untuk insert data

		if(isset($_POST['upload']))   //kodingan upload
		{	
			
				
			
			
			if(move_uploaded_file($data_loc,$folder.$data))
			{
				echo "berhasil";
			}
			else
			{
					echo "gagal";
			} 
			
			
		}


 $query = "UPDATE $pilihbagian SET  noPeraturan='$noPeraturan',tahun='$tahun',tentang='$tentang',status='$status' ,file='$data' WHERE kode= '$kode'" ;
mysqli_query($conn, $query);

header("location:$pilihbagian.php");// mengalihkan ke halaman index.php

?>