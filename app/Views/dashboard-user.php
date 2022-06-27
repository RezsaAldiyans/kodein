<html lang="en">
<?php $session = session();?>
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/kodein-logo-landing-128x128.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/kodein-logo-landing-128x128.png" type="image/png">
    <meta name="description" content="kodein is a website for learning">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/tether/tether.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/animatecss/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/css/style.css">
    <link rel="preload" as="style" href="<?php echo base_url();?>/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/mobirise/css/mbr-additional.css" type="text/css">

	<!-- Style Font nya guys -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">

	<!-- CSS Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<!-- CSS AKU -->
	<!-- <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/dashboard.css"> -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/fullcalendar-5.7.0/lib/main.css">

	<!-- JS -->
	<script src="<?php echo base_url();?>/assets/js/dashboard_user.js" defer></script>
	<script src="<?php echo base_url();?>/assets/fullcalendar-5.7.0/lib/main.js" defer></script>
	<!-- <script src="<?php echo base_url();?>/assets/tailwind/all.js"></script> -->

	<title>Profile <?php echo $nama_lengkap; ?></title>
</head>

<body>
	<!-- Start Navbar -->
	<section class="menu menu3" once="menu" id="menu3-0">
    <nav class="navbar navbar-light bg-light navbar-dropdown navbar-fixed-top navbar-expand-lg mb-5">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                        <a href="/"><img class="pl-0" src="<?php echo base_url();?>/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein"></a>
                </span>
            </div>
            <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
				<path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
			</svg>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#gallery3-a"><strong>Tentang Kami</strong></a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#content2-b"><strong>Kelas Koding</strong></a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#features20-7"><strong>Tantangan Kode</strong></a></li>
                </ul>
                <?php if(!$session->get("id_akun")){?>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-info-outline display-4" href="/login">Masuk / Daftar</a>
                </div>
                <?php }else{?>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-info-outline display-4" href="/dashboard">Dashboard</a>
                </div>
                <?php }?>
            </div>
        </div>
    </nav>
</section>
	<!-- End Navbar -->

	<!-- Main content -->
	<main>
		<section class="section-details-content mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-7 pl-lg-0 mb-lg-3">
					<div class="card card-details d-flex shadow">
					<div class="row mx-auto ">
						<!-- BAGIAN PROFILE -->
						<div class="col-sm">
							<img src="<?php echo $profile_user;?>" width="130" height="130" alt="foto profile" class="foto-user rounded-circle mx-auto d-block ">
						</div>

						<div class="col-sm-7 px-auto">
							<h3 class="text-dark font-weight-bold text-lg-left text-center"><?php echo $nama_lengkap?></h3>
							<p class="h5 text-lg-left text-center"><?php if($badges == "rookie"){echo '🗿'.$badges;}else if($badges == "beginner"){echo '<i style="color: bronze;" class="fas fa-medal pr-1"></i>'.$badges;}else if($badges == "intermediate"){echo '<i style="color: silver;" class="fas fa-medal pr-1"></i>'.$badges;}else if($badges == "professional"){echo '<i style="color: gold;" class="fas fa-medal pr-1"></i>'.$badges;} ?></p>
							<p class="h5 text-lg-left text-center"><?php echo $exp ?> XP</p>
							<p class="h5 text-lg-left text-center">Bergabung : <?php echo substr($tgl_gabung,0,11); ?></p>
						</div>

					</div>
					<?php
					if($sosmed){
					?>
					<div class="col-sm d-flex justify-content-center align-content-center">
						<?php
							if($sosmed["linkedin"]){
						?>
						<a href="<?php echo $sosmed['linkedin'];?>" target="_blank" class="mt-2 ">
							<i class="fab fa-linkedin fa-2x"></i>
						</a>
						<?php }
							if($sosmed["instagram"]){
						?>
						<a href="<?php echo $sosmed['instagram'];?>" target="_blank" class="mt-2 pl-3">
							<i style="color: rgb(235, 155, 168);" class="fab fa-instagram fa-2x"></i>
						</a>
						<?php }
							if($sosmed["twitter"]){
						?>
						<a href="<?php echo $sosmed['twitter'];?>" target="_blank" class="mt-2 pl-3">
							<i class="fab fa-twitter fa-2x"></i>
						</a>
						<?php }?>
					</div>
					<?php }?>
				</div>
			</div>

			<!-- KALENDER -->
			<div class="col-md-5">
				<div class="card card-details mt-md-5 mt-lg-0 mt-3 shadow">
					<div class="calender" id="calender"></div>
				</div>
			</div>
			</div>
		</div>

		<!-- Bagian tab -->
		<div class=" my-5">
			<div class="row  mx-1">
			<div class="col-sm-4">
				<div class="nav nav-tabs nav-justified mb-1 shadow-none" id="pills-tab" role="tablist">
				<div class="col-12 nav-item mb-3">
					<a class="text-decoration-none" href="#tab1Content" id="tab" onClick="JavaScript:selectTab(1);"
					role="tab" aria-selected="true">
					<div class="card  border-info mx-sm-4 ">
						<div class="border border-info shadow text-info p-2 my-card"><span class="fa fa-code fa-2x"
							aria-hidden="true"></span></div>
						<div class="text-info text-center mt-3">
						<h4>Kelas Koding</h4>
						</div>
						<div class="text-info text-center mt-2">
						<h1><?php echo count($kelas_user); ?></h1>
						</div>
					</div>
					</a>
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-12 nav-item mb-3">
				<a class="text-decoration-none" href="#tab2Content" id="tab" onClick="JavaScript:selectTab(2);"
					role="tab">
					<div class="card border border-success mx-sm-4">
					<div class="border border-success shadow text-success p-2 my-card text-center">
						<span class="fa fa-rocket fa-2x" aria-hidden="true"></span>
					</div>
					<div class="text-success text-center mt-3">
						<h4>Code Challenge</h4>
					</div>
					<div class="text-success text-center mt-2">
						<h1>0</h1>
					</div>
					</div>
				</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-12 nav-item mb-3">
				<a class="text-decoration-none" href="#tab3Content" id="tab" onClick="JavaScript:selectTab(3);" role="tab"
					aria-controls="pills-contact" aria-selected="false">
					<div class="card border border-danger mx-sm-4 ">
					<div class="border border-danger shadow text-danger p-2 my-card text-center">
						<span class="fa fa-lightbulb fa-2x" aria-hidden="true"></span>
					</div>
					<div class="text-danger text-center mt-3">
						<h4>Code Events</h4>
					</div>
					<div class="text-danger text-center mt-2">
						<h1>0</h1>
					</div>
					</div>
				</a>
				</div>
			</div>
			</div>
		</div>
		</div>

		<!-- TAB CONTENT -->

		<div class="container tab-content d-flex justify-content-center  my-5" id="pills-tabContent">

			<div class="tab-pane fade show active" id="tab1Content" role="tabpanel">

			<div class="card-deck mx-4">
				<?php
				foreach($kelas_user as $kelas){
				?>
				<div class="card border-0 rounded shadow">
					<img src="assets/images/<?php echo $kelas['icon_kelas']?>" class="card-img-top" alt="kelas koding">
					<div class="card-body p-3">
						<h5 class="card-title"><strong><?php echo $kelas["nama_kelas"];?></strong></h5>
						<p class="card-text">Status : <?php echo $kelas["status_kelas"] ?></p>
						<a href="kelas/<?php echo $kelas['id_kelas'];?>" class="more btn btn-primary">Lihat Selengkapnya!</a>
					</div>
				</div>
				<?php }?>
			</div>

			</div>
		</div>

		<div class="tab-pane fade show mb-2" id="tab2Content" role="tabpanel" aria-labelledby="pills-profile-tab">

			<div class="col d-flex justify-content-center" id="tab2Content">
			<a class="text-center text-decoration-none">Membuat web</a>
			</div>
			<div class="col d-flex justify-content-center" id="tab2Content">
			<p>Juara membuat web</p>
			</div>

		</div>

		<div class="tab-pane fade show mb-2" id="tab3Content" role="tabpanel" aria-labelledby="pills-contact-tab">
			<div class="col d-flex justify-content-center">
			<p>Juara membuat web</p>
			</div>
		</div>

		</div>

		</div>
		</section>

	</main>



	<!-- Optional JavaScript; choose one of the two! -->

	<script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/assets/web/assets/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/popper/popper.min.js"></script>
	<script src="<?php echo base_url();?>/assets/tether/tether.min.js"></script>
	<script src="<?php echo base_url();?>/assets/smoothscroll/smooth-scroll.js"></script>
	<script src="<?php echo base_url();?>/assets/dropdown/js/nav-dropdown.js"></script>
	<script src="<?php echo base_url();?>/assets/dropdown/js/navbar-dropdown.js"></script>
	<script src="<?php echo base_url();?>/assets/touchswipe/jquery.touch-swipe.min.js"></script>
	<script src="<?php echo base_url();?>/assets/viewportchecker/jquery.viewportchecker.js"></script>
	<script src="<?php echo base_url();?>/assets/parallax/jarallax.min.js"></script>
	<script src="<?php echo base_url();?>/assets/countdown/jquery.countdown.min.js"></script>
	<script>
		function selectTab(tabIndex) {
		//Hide All Tabs
		document.getElementById('tab1Content').style.display = "none";
		document.getElementById('tab2Content').style.display = "none";
		document.getElementById('tab3Content').style.display = "none";

		//Show the Selected Tab
		document.getElementById('tab' + tabIndex + 'Content').style.display = "block";
		}
	</script>

	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		-->
	</body>

</html>