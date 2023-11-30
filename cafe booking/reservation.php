<!DOCTYPE html>
<?php
 

	include 'config.php';
	$id_user = '';
    $Nama = '';
    $Email = '';
    $Telp = '';
    $Hari = '';
    $AMPM = '';
    $Ruangan = '';

    if(isset($_GET['ubah'])){
		$id_user = $_GET['ubah'];

	$query = "SELECT * FROM reservasi WHERE id_user = '$id_user';";
	$sql = mysqli_query($conn, $query);

	$result = mysqli_fetch_assoc($sql);

    $Nama = $result ['Nama'];
    $Email = $result ['Email'];
    $Telp = $result ['Telp'];
    $Hari = $result ['Hari'];
    $AMPM = $result ['AMPM'];
    $Ruangan = $result ['Ruangan'];

	//var_dump($result);

	//die();
	}
 ?>



<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/x-icon" href="img/kopi.png" />
	<title>Reservation</title>
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link href="css/reservation.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  
		<![endif]-->
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container px-4 px-lg-5">
		<a class="nav-link" href="web.php">
                <i class="fa-solid fa-house"></i> Home</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>        
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="room.php"><i class="fa-solid fa-eye"></i> Room</a></li>
                        <li class="nav-item"><a class="nav-link" href="Photo.php"><i class="fa-solid fa-camera"></i> Photos</a></li>
                        <li class="nav-item"><a class="nav-link" href="list.php"><i class="fa-solid fa-table-list"></i> List Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="reservation.php"><i class="fa-solid fa-address-book"></i> Reservation</a></li>
				</ul>
			</div>
		</div>
	</nav>

<body>
	<div class ="masthead">
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="POST" action="proses.php">
							<input type="hidden" value="<?php echo $id_user; ?>" name="id_user">
						<div class="form-header">	
						<h1>
						<i class="fa-solid fa-mug-hot fa-bounce" style="color: #8c8c8c;"></i>
						Reservation</h1>
						</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nama Lengkap</span>
										<input type="text" class="form-control" name="Nama"  id="Nama" placeholder="Enter your name" value="<?php echo $Nama; ?>" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email to Contact</span>
										<input type="Email" class="form-control" name="Email"  id="Email" placeholder="Enter your email" value="<?php echo $Email; ?>" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Telp</span>
								<input type="telp" class="form-control" name= "Telp"  id="Telp" placeholder="Enter your phone number" value="<?php echo $Telp; ?>" required>
							</div>
							
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Hari</span>
										<input name="Hari" class="form-control"  type="date" id="Hari" value="<?php echo $Hari; ?>" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control" name="AMPM" id="AMPM" value="<?php echo $AMPM; ?>" required>
													<option <?php if($AMPM == 'AM'){ echo "Selected";} ?> value="AM"selected>AM</option>
													<option <?php if($AMPM == 'PM'){ echo "Selected";} ?> value="PM">PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Room</span>
												<select class="form-control" name="Ruangan" id="Ruangan" value="<?php echo $Ruangan; ?>" required>
													<option <?php if($Ruangan == 'Vip'){ echo "Selected";} ?> value="Vip"selected>Vip</option>
													<option <?php if($Ruangan == 'Vip+'){ echo "Selected";} ?> value="Vip+">Vip+</option>
													<option <?php if($Ruangan == 'Prince'){ echo "Selected";} ?> value="Prince">Prince</option>
													<option <?php if($Ruangan == 'King'){ echo "Selected";} ?> value="King">King</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
                				if(isset($_GET['ubah'])){
               			?>
			   				<button class ="submit-btn" name="aksi" value="edit" onClick="return confirm('Clik Ok Jika Yakin Ingin Edit')">
							   <i class="fa-solid fa-bookmark" style="color: #090a0c;"></i>	
							Simpan Perubahan</button>
              		     <?php
			  					 } else {
						?>
							<div class="form-btn">								
								<button class ="submit-btn" value="add" name="aksi" onClick="return confirm('Sukses Mendaftar Harap Ok Jika Ingin Melanjutkan Pembayaran')">
								<i class="fa-regular fa-credit-card" style="color: #0c0e13;"></i>	
								Continue To Payment</button>
								<?php
                					 }
               			?>  
							</div>
						
               				 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	</section>
	<section class="signup-section" id="signup">

<div class="container px-4 px-lg-5">
<div class="row gx-4 gx-lg-5">
<div class="col-md-10 col-lg-8 mx-auto text-center">
	<i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
	<h2 class="text-white mb-5">Cafe Email</h2>
	<!-- * * * * * * * * * * * * * * *-->
	<!-- * * SB Forms Contact Form * *-->
	<!-- * * * * * * * * * * * * * * *-->
	<!-- This form is pre-integrated with SB Forms.-->
	<!-- To make this form functional, sign up at-->
	<!-- https://startbootstrap.com/solution/contact-forms-->
	<!-- to get an API token!-->
	<form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
		<!-- Email address input-->
		<div class="row input-group-newsletter">
			<div class="col">
				<input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
			<div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Submit</button></div>
		</div>
		<div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">Perlu Email.</div>
		<div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Salah Emailnya Bray</div>
		<!-- Submit success message-->
		<!---->
		<!-- This is what your users will see when the form-->
		<!-- has successfully submitted-->
		<div class="d-none" id="submitSuccessMessage">
			<div class="text-center mb-3 mt-2 text-white">
				<div class="fw-bolder">Sukses Brayy!!!</div>
				Mau isi?,Daftar dulu ngab
				<br />
				<a href="https://mail.google.com/mail/u/0/#inbox">https://mail.google.com/mail/u/0/#inbox</a>
			</div>
		</div>
		<!-- Submit error message-->
		<!---->
		<!-- This is what your users will see when there is-->
		<!-- an error submitting the form-->
		<div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Gagal ngirim pesan ngab</div></div>
	</form>
</div>
</div>
</div>

</section>
<!-- Contact-->
<section class="contact-section bg-black">
<div class="container px-4 px-lg-5">
<div class="row gx-4 gx-lg-5">
<div class="col-md-4 mb-3 mb-md-0">
	<div class="card py-4 h-100">
		<div class="card-body text-center">
			<i class="fas fa-map-marked-alt text-primary mb-2"></i>
			<h4 class="text-uppercase m-0">Address</h4>
			<hr class="my-4 mx-auto" />
			<div class="small text-black-50">40223 Bandung Barat,Cimareme</div>
		</div>
	</div>
</div>
<div class="col-md-4 mb-3 mb-md-0">
	<div class="card py-4 h-100">
		<div class="card-body text-center">
			<i class="fas fa-envelope text-primary mb-2"></i>
			<h4 class="text-uppercase m-0">Email</h4>
			<hr class="my-4 mx-auto" />
			<div class="small text-black-50"><a href="#!">Razzkyz@gmail.com</a></div>
		</div>
	</div>
</div>
<div class="col-md-4 mb-3 mb-md-0">
	<div class="card py-4 h-100">
		<div class="card-body text-center">
			<i class="fas fa-mobile-alt text-primary mb-2"></i>
			<h4 class="text-uppercase m-0">Phone</h4>
			<hr class="my-4 mx-auto" />
			<div class="small text-black-50">+62 (082) 121-497448</div>
		</div>
	</div>
</div>
</div>
<div class="social d-flex justify-content-center">
<a class="mx-2" href="https://twitter.com/RazzkyZ"><i class="fab fa-twitter"></i></a>
<a class="mx-2" href="https://www.facebook.com/moch.r.nurrizky/"><i class="fab fa-facebook-f"></i></a>
<a class="mx-2" href=""><i class="fab fa-github"></i></a>
</div>
</div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Cafe 2023</div></footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://mail.google.com/mail/u/0/#inbox * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>