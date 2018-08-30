
<!DOCTYPE html>
<html>
<head>
	<title>
		JDIH
	</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<script>

			function validateForm() 
			{
				var pilihbagian = document.forms["myForm"]["pilihbagian"].value;
				var noPeraturan = document.forms["myForm"]["noPeraturan"].value;
			    var tahun = document.forms["myForm"]["tahun"].value;
			    var tentang = document.forms["myForm"]["tentang"].value;
			    var status = document.forms["myForm"]["status"].value;
			     
			    if (pilihbagian == "---") {
			        alert("Direktorat Tidak Boleh Kosong");
			        return false;
			    } 
			    else if (noPeraturan == "") {
			        alert("No Peraturan Tidak Boleh Kosong");
			        return false;
			    }
			    else if (tahun == "") {
			        alert("Tahun Tidak Boleh Kosong");
			        return false;
			    }
			    else if (tentang == "") {
			        alert("Tentang Tidak Boleh Kosong");
			        return false;
			    }
			    else if (status == "---") {
			        alert("Status Tidak Boleh Kosong");
			        return false;
			    }
			    else {
			    	alert("Berhasil memasukan data.");
			    }
			    
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
		         <li ><a href="subdit_bimbingandanmonitoring.php">Subdit Bimbingan dan Monitoring</a></li>
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
				          <input type="text" class="form-control" placeholder="Search" name="search">
				        </div>
				
			    	 
			      		<button class="btn btn-default"><span class="glyphicon glyphicon-search" type="submit" value=" Cari "></span></button>
			    	 
			
				      </form>
			     </li>
			     
			      
 			  </ul>

		    </div>
	  	</div>
	</nav>
				<!-- content -->
			
	
	


<div class="content"  > 



			<div class="judul label-success" style=" color:black;  border-style: initial;  border-radius: 0px 0px 0px 10px; width:100%; text-align:center;" > 
				<font face="verdana"><font size="5">Home</font></font>
				
			</div>

			<div align="right" >
			<a href="index.php">
				<button class="btn btn-warning"style=" border-style: solid;  border-radius: 0px 0px 0px 20px;">
				<span class="glyphicon glyphicon-log-out" type="submit" value=" Cari " style="padding-:20px;"> Logout</span></button></a>
			</div><br><br>



		
				<div  class="container-fluid" align="center" style="width:40%;   background-color:#d9d9d9; border-style: inline;  border-radius: 20px 20px 0px 0px;">
					<h1 style="padding:0%;"><span class="glyphicon glyphicon-upload" > </span> Upload Data </h1>
				</div>

				<div class="container-fluid" align="center" style="width:40%; background-color:#f2f2f2; border-style: initial;  border-radius: 0px 0px 20px 20px; ">
				<form action="simpan.php" method="POST" name="myForm" enctype="multipart/form-data">

							
										<br>
										
								<label>Direktorat</label>
										
								<select  class="form-control" style="width:100%;  text-align:center "name="pilihbagian" >
									<option style="visibility:hidden" >---</option>

									<optgroup  label="Sekretariat">
										<option value="bagian_perencanaandankeuangan">Bagian Perencanaan dan Keuangan</option>
										<option value="bagian_organisasidantatalaksana">Bagian Organisasi dan Tata Laksana</option>
										<option value="bagian_umum">Bagian Umum</option>
										<option value="bagian_kepegawaian">Bagian Kepegawaian</option>

									</optgroup>
											  
									<optgroup label="DITBINGANIS">

										<option  value="subdit_mutasihakim">Subdit Mutasi Hakim</option>
										<option value="subdit_mutasipaniteradanjurusita" >Subdit Mutasi Panitera dan Jurusita</option>

								    </optgroup>

								    
									<optgroup label="DITBINGADMIN">

										<option value="subdit_bimbingandanmonitoring">Subdit Bimbingan dan Monitoring</option>
										<option value="subdit_tatakelola">Subdit Tata Kelola</option>
										<option value="subdit_data">Subdit Data </option>

									</optgroup>


									<optgroup label="DITPRANATA">

										<option value="subdit_syariah">Subdit Syariah</option>
										<option value="subdit_kasasi">Subdit Kasasi</option>
										<option value="subdit_pk">Subdit PK </option>

									</optgroup>

									<optgroup label="Ekonomi Syariah">

										<option value="subdit_a">Subdit A</option>
										<option value="subdit_b">Subdit B</option>
									</optgroup>

								 </select>
								<br>
								

								<label >Nomor Peraturan</label>
								<input  class="form-control" style="width:100%; height:30px;" type="text"  name="noPeraturan"   >
									<br>

								<label>Tahun</label>
								<input class="form-control " style="width:100%; height:30px;" type="text"  name="tahun" id="tahun"   >
									<br>

								<label>Tentang</label>
								<textarea  class="form-control"style="width:100%; height:100px;" name="tentang"></textarea>
									<br>

								<label>Status</label>
								<select class="form-control" style="width:100%;  text-align:center" name="status">
									<option style="visibility:hidden" >---</option>
									<option>Dicabut</option>
									<option>Mencabut</option>
									<option>Diubah</option>
									<option>Mengubah</option>
									<option>Tidak Berlaku</option>
								</select>
									<br>

					
								<input type="file" name="data" >
						
						
						<br>
								<button class="btn btn-info" value="Upload" onclick="return validateForm()" style="width:40%" type="submit " name="upload" > Upload </button>   

	
								<br><br>
				

				</form>



					</div>
				  <br><br>
		</div>    
						
	           
				<!-- penutup content -->


			<!-- footer -->
	<div class=" footer">
						Copyright : <b style="color:grey;">Anak Magang <a style="text-decoration:none; color:grey;" href="images/premanmagang.jpg">Binus</a></b> Mahkamah Agung Republik Indonesia.
	</div>

 </div>
	 

	
</body>
</html>


