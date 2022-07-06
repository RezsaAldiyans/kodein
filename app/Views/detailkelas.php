<!DOCTYPE html>
<?php $session = session();?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/kodein-logo-landing-128x128.png" type="image/x-icon">
    <meta name="description" content="Detail kelas">

    <title>Kelas <?php echo $kelas['nama_kelas'];?></title>
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
    <script src="<?php echo base_url();?>/assets/tailwind/all.js"></script>
</head>
<body class="scroll smooth">
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0 z-50">
    <div class="container-fluid">
        <div class="navbar-brand">
            <span class="navbar-logo">
                <a href="/"><img class="ml-4 w-auto h-12" src="<?php echo base_url();?>/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein"></a>
            </span>
        </div>
        <button class="navbar-toggler dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-3" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#gallery3-a"><strong>Tentang Kami</strong></a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#content2-b"><strong>Kelas Koding</strong></a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#features20-7"><strong>Tantangan Kode</strong></a></li>
                    <?php if(!$session->get("id_akun")){?>
                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn btn-info-outline display-4 font-bold pt-1 h-[48px]" href="/login">Masuk / Daftar</a>
                    </div>
                    <?php }else{?>
                    <div class="nav-item dropdown relative mt-2 mr-3">
                        <a class="nav-link dropdown-toggle flex pt-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/<?php echo $profile_user;?>" alt="foto profile" class="rounded-circle w-auto h-9 pt-0">&nbsp;
                            <span class="full-name display-4 font-bold text-[#125488]"><?= ucfirst($nama_lengkap);?></span>
                        </a>
                        <ul class="dropdown-menu absolute float-left z-50 text-left text-base list-none py-2 rounded-lg bg-clip-padding mt-2" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard">Profile Saya</a></li>
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                            <hr class="h-0 my-2 border border-solid border-t-0 border-gray-700 opacity-25" />
                            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                        </ul>
                    </div>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<section class="header11 cid-sDBohKsmP7" id="header11-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 image-wrapper">
                <img class="w-100" src="<?php echo base_url();?>/assets/images/<?php echo $kelas['icon_kelas'];?>" alt="kelas ikon">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong><?php echo $kelas['nama_kelas'];?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7"><?php echo $kelas['deskripsi_kelas']; ?></p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-info display-7" href="/materi/<?php echo $kelas['id_kelas']; ?>/<?php echo $mulai_materi; ?>">Mulai Kelas!</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content15 cid-sDBqGpL2uO" id="content15-15">
	<?php
		if(isset($status["id_kelas"]) == $kelas["id_kelas"]){
            $progressing = round(($progress/$kelas["total_materi"])*100);
            // print_r($kelas["total_materi"]);
	?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mbr-white mb-3 display-5"><strong>Progress kelas</strong></h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $progressing;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progressing;?>%"><?php echo $progressing;?>%</div>
                        </div>
                        <p class="mbr-text mbr-fonts-style display-7"><br><strong><?php echo $progress;?>/<?php echo $kelas['total_materi']; ?> </strong>materi telah diselesaikan, estimasi selesai kelas <?php echo gmdate("H:i:s", $kelas["estimasi_belajar"]); ?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php }else{?>
	<div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-left">
						<h5 class="card-title mbr-fonts-style mbr-white mb-3 display-5"><strong>Belum Memulai Kelas</strong></h5>
                        <h4 class="card-title mbr-fonts-style mbr-white mb-3 display-5"><strong>Progress kelas</strong></h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                        </div>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <br>
                            <strong><?php echo $kelas['total_materi']; ?></strong>
                            Total materi, estimasi selesai kelas <?php echo gmdate("H:i:s", $kelas["estimasi_belajar"]); ?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php }?>
</section>

<section class="tabs content18 cid-sDBp5m1un6" id="tabs1-13">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>Materi Pembelajaran</strong></h3>
                
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
                <ul class="nav nav-tabs mb-4" role="tablist">
                    <li class="nav-item first mbr-fonts-style"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs1-13_tab0" aria-selected="true"><strong>Slides</strong></a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs1-13_tab1" aria-selected="true"><strong>Code in site</strong></a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs1-13_tab2" aria-selected="true"><strong>Puzzle</strong></a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs1-13_tab3" aria-selected="true"><strong>Flashcards</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs1-13_tab4" aria-selected="true"><strong>Quiz</strong></a></li>
                    
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">Pembukaan Materi, Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">Praktek, Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">Penalaran, Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">Pemahaman, Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">Penentuan, Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials2 cid-sDBoWDQS4f" id="testimonials2-12">
    
    
    <div class="container">
        <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
            <strong>Testimoni Siswa</strong><strong><br></strong></h3>
        <div class="row justify-content-center">
            <div class="card col-12 col-md-6">
                <p class="mbr-text mbr-fonts-style mb-4 display-7">" Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu. Kono bangumi wa goran no suponsaa no teikyou de okurishimasu.teikyou de okurishimasu.
Kono bangumi wa goran no suponsaa no teikyou de okurishimasu.teikyou de okurishimasu. "</p>
                <div class="d-flex mb-md-0 mb-4">
                    <div class="image-wrapper">
                        <img src="<?php echo base_url();?>/assets/images/moon-100x83.png" alt="Mobirise">
                    </div>
                    <div class="text-wrapper">
                        <p class="name mbr-fonts-style mb-1 display-4"><strong>Moona Hoshinova</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        <p class="position mbr-fonts-style display-4"><em>Lulusan kelas Android Dev.</em></p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <p class="mbr-text mbr-fonts-style mb-4 display-7">" Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu. Kono bangumi wa goran no suponsaa no teikyou de okurishimasu.teikyou de&nbsp;<br>Kono bangumi wa goran no suponsaa no teikyou de 
<br>okurishimasu.teikyou de okurishimasu."</p>
                <div class="d-flex mb-md-0 mb-4">
                    <div class="image-wrapper">
                        <img src="<?php echo base_url();?>/assets/images/mika-melatika-portrait-100x129.png" alt="Mobirise">
                    </div>
                    <div class="text-wrapper">
                        <p class="name mbr-fonts-style mb-1 display-4"><strong>Mika Melatika</strong></p>
                        <p class="position mbr-fonts-style display-4"><em>Lulusan kelas Android Dev.</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer5 cid-swTu8oSquH" once="footers" id="footer5-10">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-2 col-6">
                <div class="media-wrap">
                    
                        <img src="<?php echo base_url();?>/assets/images/kodein-logo-309x162.png" alt="Kodein">
                    
                </div>
            </div>
            <div class="col-10 col-6">
                <p class="mbr-text align-right links mbr-fonts-style display-7"><strong>Tentang Kami</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Kelas Koding</strong>&nbsp; &nbsp; &nbsp;<strong>&nbsp;Code Challenge</strong></p>
            </div>
        </div>
        <!-- <div class="media-container-row">
            <div class="col-md-12"> -->
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2021 Kodein - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social mobi-mbri-github mobi-mbri"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://vimeo.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social mobi-mbri-paper-plane mobi-mbri"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div>
            </div> -->
        </div>

    </div>
</section>
<script src="<?php echo base_url();?>/assets/web/assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="<?php echo base_url();?>/assets/popper/popper.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/tether/tether.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/smoothscroll/smooth-scroll.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/dropdown/js/nav-dropdown.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/dropdown/js/navbar-dropdown.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/touchswipe/jquery.touch-swipe.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/viewportchecker/jquery.viewportchecker.js"></script> -->
<!-- <script src="<?php echo base_url();?>/assets/mbr-tabs/mbr-tabs.js"></script> -->
<!-- <script src="/assets/theme/js/script.js"></script> -->
    <input name="animation" type="hidden">
    </body>
</html>