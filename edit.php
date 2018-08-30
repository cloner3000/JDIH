<?php 
session_start();
error_reporting(0);
include("koneksi.php");
$kode= $_GET['kode'];
$pilihbagian = $_SESSION['pilihbagian'];
$noPeraturan = $_GET['noPeraturan'];
$tahun= $_GET['tahun'];
$tentang = $_GET['tentang'];
$status = $_GET['status'];
$data= $_GET['data'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		JDIH
	</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="datatable/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatable/media/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<script>

			function validateForm() 
			{
			   
			    alert("Berhasil  Update data.");
			}

</script>
</head>
<body>
<div class="container">
	<div class="gambar img-responsive">
		<img src="images/gambar1.jpg"  	width=100%
		height=300px >
	</div>


	<nav class="navbar navbar-default">

	  	<div class="container-fluid">

	 

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class=""><a href="home.php">Home <span class="sr-only">(current)</span></a></li>

		      
		      


		       <!-- ambil sini -->
		         
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle btn-group  " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sekretariat <span class="caret"></span></a>
		          <ul class="dropdown-menu ">


		           <li ><a href="bagian_perencanaandankeuangan.php">Bagian Perencanaan dan Keuangan</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="bagian_organisasidantatalaksana.php">Bagian Organisasi dan Tata Laksana</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="bagian_umum.php">Bagian Umum</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="bagian_kepegawaian.php">Bagian Kepegawaian</a></li>

		          </ul>
		        </li>


		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DITBINGANIS <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li ><a href="subdit_mutasihakim.php">Subdit Mutasi Hakim</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="subdit_mutasipaniteradanjurusita.php">Subdit Mutasi Panitera dan Jurusita</a></li>
		         
		          </ul>
		        </li>

		            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DITBINADMIN <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		         <li ><a href="subdit_bimbingandanmonitoring	.php">Subdit Bimbingan dan Monitoring</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="subdit_tatakelola.php">Subdit Tata Kelola</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="subdit_data.php">Subdit Data</a></li>
		             
		          </ul>
		        </li>

		            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DITPRANATA <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		           <li ><a href="subdit_syariah.php">Subdit Syariah</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="subdit_kasasi.php">Subdit Kasasi</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="subdit_pk.php">Subdit PK</a></li>
		             
		          </ul>
		        </li>

		            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EKONOMI SYARIAH<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li ><a href="subdit_a.php">Subdit A</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="subdit_b.php">Subdit B</a></li>
		        
		      	 </ul>

		        </li>
		        <!-- sampai sini -->
		     
			     <li style="background-color:transparent">
	 				<form method="POST" action="cari.php" class="navbar-form navbar-right">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search" name="search" >
				        </div>
				
			    	 
			      		<button class="btn btn-default"><span class="glyphicon glyphicon-search" type="submit" value=" Cari "></span></button>
			    	  
				      </form>
			     </li>
			     
			      
 			  </ul>

		    </div>
	  	</div>
	</nav>
				<!-- content -->

	<div class="content" >

		

			<div class="judul label-success" style=" color:black;  border-style: initial;  border-radius: 0px 0px 0px 10px; width:100%; text-align:center;" > 
				<font face="verdana"><font size="5">Edit</font></font>
				
			</div>

			<div align="right" >
			<a href="index.php">
				<button class="btn btn-warning"style=" border-style: solid;  border-radius: 0px 0px 0px 20px;">
				<span class="glyphicon glyphicon-log-out" type="submit" value=" Cari " style="padding-:20px;"> Logout</span></button></a>
			</div><br><br>

			<div class="container-fluid"align="center" >
				
				<form action="update.php?kode=<?php echo "$kode" ;?> & data=<?php echo "$data"; ?>" method="POST" name="myForm" enctype="multipart/form-data" >

										
										
								

								<label >Nomor Peraturan:</label>
								<input  class="form-control" style="width:350px; height:30px;" type="text"  name="noPeraturan" value="<?php echo $noPeraturan;?>" >
									<br>

								<label>Tahun</label>
								<input class="form-control" style="width:350px; height:30px;" type="text"  name="tahun"  value="<?php echo $tahun; ?>">
									<br>

								<label>Tentang</label>
								<textarea  class="form-control"style="width:350px; height:100px;" name="tentang"><?php echo $tentang ?></textarea>
									<br>

								<label>Status</label>
								<select class="form-control" style="width:350px;  text-align:center" name="status">
									
									<option style="visibility:hidden" ><?php echo $status; ?></option>
									<option>Dicabut</option>
									<option>Mencabut</option>
									<option>Diubah</option>
									<option>Mengubah</option>
									<option>Tidak Berlaku</option>
								</select>
									<br>
								<input type="file" name="data" value="">
								<br>
								<button class="btn btn-success" value="Upload" onclick="return validateForm()" style="width:150px" type="submit " name="upload" > Upload </button> 

								<br><br>

				</form>



					
				  
		</div>    
						
	</div>           
				<!-- penutup content -->


			<!-- footer -->
	<div class=" footer">
						Copyright : <b style="color:grey;">Anak Magang Binus</b> Mahkamah Agung Republik Indonesia.
	</div>

 </div>
	 
</body>
</html>


