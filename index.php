<!DOCTYPE html>
<html>
<head>
	<title>SISKOM ID</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Puguh Sulistyo Pambudi">
	<meta name="description" content="Tugas Aplikasi Mobile Program Studi Sistem Komputer Universitas Pembangunan Panca Budi">
	
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

	<!-- Css -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	  <div class="container">
	  	<a class="navbar-brand" href="#">SISKOM.ID</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#about">About Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#team">Team</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contact">Contact</a>
		      </li>
		      <li class="nav-item">
		        <a class="btn btn-primary tombol" href="#"> Join Us</a>
		      </li>
		    </ul>
		  </div>
	  </div>
	</nav>
	<!-- End Navbar -->

	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Belajar Aplikasi Mobile Menggunakan<br> <span>Android Studio 3.2</span></h1>
			<a href="#"><img src="img/store.png" alt="Play Store" class="google"></a>
		</div>
	</div>
	<!-- End Jumbotron -->



	<!-- Container -->
	<div class="container">
		
	<!-- Info Panel -->
	<div class="row justify-content-center">
		<div class="col-10 info-panel">
			<div class="row">
				<div class="col-lg">
					<img src="img/bootstrap.png" alt="Logo" class="float-left">
					<h4>BOOTSTRAP 4</h4>
					<p>Using Bootstrap v 4.1.3</p>
				</div>
				<div class="col-lg">
					<img src="img/android.png" alt="Hirest" class="float-left">
					<h4>ANDROID</h4>
					<p>Using Android Studio v 3.2</p>
				</div>
				<div class="col-lg">
					<img src="img/jquery.jpg" alt="Logo" class="float-left">
					<h4>JQUERY</h4>
					<p>Using Jquery v 3.1.1</p>
				</div>
			</div>
		</div>
	</div>
	<!-- eEnd Info PAnel -->
	

	<!-- Working Space -->
	<div class="row working-space" id="about">
		<div class="col-lg">
			<img src="img/img1.png" alt="WorkingSpace" class="img-fluid">
		</div>
		<div class="col-lg">
			<h3><span>About</span> Us</h3>
			<p>
				<strong>SISKOM ID</strong> - Adalah aplikasi mobile yan dibuat sebagai bahan belajar untuk menampilkan <strong>Profil, Visi Misi</strong> dengan menggunakan beberapa widget <strong>Android Studio</strong> yaitu Button, Scroll View, dan Web View.
			</p>
			<a href="" class="btn btn-primary tombol">Selengkapnya</a>
		</div>
	</div>
	<!-- Akhir Working Space -->

	
	<!-- Team -->
	<div class="team-header">
		<h3>Our <span>Team</span></h3>
	</div>
	<div class="row team" id="team">
		<div class="col-lg text-center team-data">
			<img src="img/user.jpg" alt="WorkingSpace" class="img-fluid rounded-circle">
			<h3>PUGUH SULISTYO PAMBUDI</h3>
			<p>
				Mahasiswa Program Studi Sistem Komputer Fakultas Sains dan Teknologi Universitas Pembangunan Panca Budi, dalam tugas ini sebagai fullstack developer.
			</p>
			<a href="" class="btn btn-primary tombol"><i class="fab fa-facebook"></i></a>
			<a href="" class="btn btn-info tombol"><i class="fab fa-twitter"></i></a>
			<a href="" class="btn btn-warning tombol"><i class="fab fa-instagram"></i></a>
			<a href="" class="btn btn-danger tombol"><i class="fab fa-youtube"></i></a>
		</div>
		<div class="col-lg text-center">
			<img src="img/team-1.jpg" alt="WorkingSpace" class="img-fluid rounded-circle">
			<h3>HASANATAN GANSIT TARIGAN</h3>
			<p>
				Mahasiswa Program Studi Sistem Komputer Fakultas Sains dan Teknologi Universitas Pembangunan Panca Budi, dalam tugas ini sebagai front-end developer.
			</p>
			<a href="" class="btn btn-primary tombol"><i class="fab fa-facebook"></i></a>
			<a href="" class="btn btn-info tombol"><i class="fab fa-twitter"></i></a>
			<a href="" class="btn btn-warning tombol"><i class="fab fa-instagram"></i></a>
			<a href="" class="btn btn-danger tombol"><i class="fab fa-youtube"></i></a>
		</div>
		

	</div>
	<!-- End Team -->


	<!-- Contact -->

	<div class="contact-header">
		<h3>Contact</h3>
	</div>

	<div class="row justify-content-center" id="contact">
		<div class="col-md-6">
			<form action="" class="form-horizontal">
				<div class="form-group">
					<label for="">Your Name :</label>
					<input type="text" class="form-control" placeholder="Your Name">
				</div>
				<div class="form-group">
					<label for="">Your Email :</label>
					<input type="email" class="form-control" placeholder="ex: name@domain.com">
				</div>
				<div class="form-group">
					<label for="">Your Mobile Phone :</label>
					<input type="tel" class="form-control" placeholder="Your Mobile Phone">
				</div>
				<div class="form-group">
					<label for="">Message :</label>
					<textarea class="form-control" placeholder="Message.." rows="4"></textarea>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-primary tombol">Send Message</button>
				</div>
			</form>
		</div>
	</div>


	<!-- End Contact -->

	</div>
	<!-- End Container -->


	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg">
					<p>Copyright &copy; 2018 - Build With <i class="fas fa-heart"></i> Application Mobile.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	

	<!-- Javascript / Jquery -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>