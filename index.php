
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
				var username = document.forms["myForm"]["username"].value;
				var password = document.forms["myForm"]["password"].value;
				
				
			    
			     
			    if (username == "") {
			        alert("Username Tidak Boleh Kosong");
			        return false;
			    } 
			 
			    else if (password == "") {
			        alert("Password Tidak Boleh Kosong");
			        return false;
			    } 
			    else if (username != "admin" || password!= "admin") {
			        alert("Username atau Password Salah");
			        return false;
			    } 
		
			 
			
			    else {
			    	alert("Anda Berhasil Login");
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
		        <li class=""><a href="index.php">Home <span class="sr-only">(current)</span></a></li>

		        
		      


		       <!-- ambil sini -->
		         
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle btn-group  " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sekretariat <span class="caret"></span></a>
		          <ul class="dropdown-menu ">


		           <li ><a href="public/bagian_perencanaandankeuangan.php">Bagian Perencanaan dan Keuangan</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/bagian_organisasidantatalaksana.php">Bagian Organisasi dan Tata Laksana</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/bagian_umum.php">Bagian Umum</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/bagian_kepegawaian.php">Bagian Kepegawaian</a></li>

		          </ul>
		        </li>


		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DITBINGANIS <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li ><a href="public/subdit_mutasihakim.php">Subdit Mutasi Hakim</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/subdit_mutasipaniteradanjurusita.php">Subdit Mutasi Panitera dan Jurusita</a></li>
		         
		          </ul>
		        </li>

		            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DITBINADMIN <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		         <li ><a href="public/subdit_bimbingandanmonitoring.php">Subdit Bimbingan dan Monitoring</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/subdit_tatakelola.php">Subdit Tata Kelola</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/subdit_data.php">Subdit Data</a></li>
		             
		          </ul>
		        </li>

		            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DITPRANATA <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		           <li ><a href="public/subdit_syariah.php">Subdit Syariah</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/subdit_kasasi.php">Subdit Kasasi</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/subdit_pk.php">Subdit PK</a></li>
		             
		          </ul>
		        </li>

		            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EKONOMI SYARIAH<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li ><a href="public/subdit_a.php">Subdit A</a></li>
		               <li role="separator" class="divider"></li>
		           <li><a href="public/subdit_b.php">Subdit B</a></li>
		        
		      	 </ul>

		        </li>
		        <!-- sampai sini -->
		     
			     <li style="background-color:transparent">
	 				<form method="POST" action="public/cari.php" class="navbar-form navbar-right">
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

	<div class="content" style="background-color:#bfbfbf"  > 
<!-- <h1 class="judul label-success" style="background-color:#999999;  border-style: initial;  border-radius: 10px;"><label>Home</label></h1> -->
			<label class="judul label-success" style="background-color:#999999;  border-style: initial;  border-radius: 0px 0px 10px 10px; width:100%; text-align:center;" > 
				<font face="Arial Black"><font size="5">Home</font></font>
			</label><br><br><br>

		<div class="container-fluid" align="center">

				<div  class="container-fluid" align="center" style="width:40%;   background-color: #cccccc; border-style: inline;  border-radius: 20px 20px 0px 0px;">
					<h1 style="padding:0%;"><span class="glyphicon glyphicon-user " > </span> Sign In </h1>
				</div>
				
				<div class="container-fluid" align="center" style="width:40%;  background-color:#b3b3b3; border-style: inline; border-color: grey; border-radius: 0px 0px 20px 20px; ">

					<br>
					<form action="home.php" method="POST" name="myForm" enctype="multipart/form-data" >

						 <input  class="form-control" style="width:100%; height:30px; background-color:#e6e6e6; " type="text" placeholder="Username" name="username"><br>
						 <input  class="form-control" style="width:100%; height:30px; background-color:#e6e6e6;"type="password" placeholder="Password" name="password"><br><br>
						 <button class="btn btn-default btn-lg" value="submit" onclick="return validateForm()" style="width:150px ;background-color:#e6e6e6;" type="submit " name="submit" >
						 <font face="Tahoma"><font size="4">Login</font></font>
						 </button>   
						 <br><br>

					</form>
					
				</div><br><br>
	  
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


