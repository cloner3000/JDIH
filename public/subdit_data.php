<?php 
session_start();
error_reporting(0);
include("koneksi.php");
$_SESSION['pilihbagian'] = "subdit_data"; 

$pilihbagian =$_SESSION['pilihbagian'];
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
		        <li class=""><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>

		        
		      


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

	<div class="content" style="background-color:#bfbfbf">
		<label class="judul label-success" style="background-color:#999999;  border-style: initial;  border-radius: 0px 0px 10px 10px; width:100%; text-align:center;" > 
					<font face="Arial Black"><font size="5">Subdit Data</font></font>
				</label><br><br>
		<div class="container-fluid"align="center" >
				<?php 

					$count=1;
					$query= mysqli_query($conn,"SELECT * FROM  $pilihbagian" ); //untuk memproses query 
					if(mysqli_num_rows($query))
					{
				?>
					<table  id="table1"  class=" table table-bordered table-striped   " >

					  	<thead style="background-color:#cccccc;">
					        <th >No</th>
					        <th >No Peraturan</th>
					        <th >Tahun</th>
					        <th >Tentang</th>					 
					        <th >Status</th>
					        <th></th>
					    </thead>
					    <?php
						while ($hasil= mysqli_fetch_array($query))  // looping untuk mencetak semua isi dari tabel
						{

						?>
							<tr  align="center">
								<td ><?php echo $count  ?> </td>  
								<td><?php echo $hasil["noPeraturan"]; ?></td>
								<td><?php echo $hasil["tahun"]; ?></td>
								<td><?php echo $hasil["tentang"]; ?></td>
								<td><?php echo $hasil["status"]; ?></td>
							
								<td><a href='../upload/subdit_data/<?php echo $hasil["file"]; ?>'>
								<button class="btn btn-default glyphicon glyphicon-download-alt"> </button></a></td>

								<?php $count++; ?>
							</tr>


						<?php 

						}  
					}
						?>
					</table><br><br>
					
				  
		</div>    
						
	</div>           
				<!-- penutup content -->


			<!-- footer -->
	<div class=" footer">
						Copyright : <b style="color:grey;">Anak Magang Binus</b> Mahkamah Agung Republik Indonesia.
	</div>

 </div>
	   <script type="text/javascript">
        $(document).ready(function(){
          
             $("#table1").DataTable(

             {

             	"dom":'<"wrapper"lftip>'
             }
             	);

                
        });
    </script>
</body>
</html>
