<!DOCTYPE html>
<html>
    <?php
        $session = session();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/kodein-logo-landing-128x128.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/kodein-logo-landing-128x128.png" type="image/png">
    <meta name="description" content="kodein is a website for learning">

    <title>Kodein | Home</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <script src="<?php echo base_url();?>/assets/tailwind/all.js"></script>
    <style>
    .addReadMore.showlesscontent .SecSec,
    .addReadMore.showlesscontent .readLess {
        display: none;
    }

    .addReadMore.showmorecontent .readMore {
        display: none;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
        font-weight: bold;
        margin-left: 2px;
        color: blue;
        cursor: pointer;
    }

    .addReadMoreWrapTxt.showmorecontent .SecSec,
    .addReadMoreWrapTxt.showmorecontent .readLess {
        display: block;
    }
    </style>
    <style>
        .dropdown-toggle::after {
            display: none !important;
        }
        .pointer{
            cursor: pointer;
        }
        .scroll{
            overflow-y: hidden;
            overflow-x: auto;
            width:50px;
        }
        .icon:hover{
            fill:black;
        }
    </style>
</head>
<body class="smooth-scroll">

<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0 z-50">
    <div class="container-fluid">
        <div class="navbar-brand">
            <span class="navbar-logo">
                <a href="/"><img class="ml-0 w-auto h-12" src="<?php echo base_url();?>/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein"></a>
            </span>
        </div>
        <button class="navbar-toggler dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-3" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#gallery3-a"><strong>Tentang Kami</strong></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#content2-b"><strong>Kelas Koding</strong></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#features20-7"><strong>Tantangan Kode</strong></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if(!$session->get("id_akun")){?>
                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn btn-info-outline display-4 font-bold mt-0 h-[48px]" href="/login">Masuk / Daftar</a>
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

<section class="kodeinanim header11 bg-[#fafafa]" id="header11-9">
    <div class="container-fluid">
        <div class="row flex items-center">
            <div class="col-7">
                <object type="image/svg+xml" data="<?php echo base_url();?>/assets/images/kodein-animated-repeat.svg" class="p-0 m-0 w-[390px] h-[390px] xl:w-[600px] xl:h-[600px] lg:w-[500px] lg:h-[500px] md:w-[500px] md:h-[500px]" alt="kodein animasi">
                    <img src="<?php echo base_url();?>/assets/images/kodein-animated-repeat.svg" alt="kodein animasi"/>
                </object>
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h2 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Kelas koding kodein!</strong></h2>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Belajar koding bagi pemula atau asah skill koding kamu di<br>Kelas Koding Kodein!</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-info display-7" href="#content2-b">&nbsp;Lihat selengkapnya!</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features12 cid-swTjBTkX2v" id="features13-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mb-4 display-2">Apa itu<strong> Kodein?</strong>
                        </h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7"><strong>Kodein</strong> adalah sebuah platform untuk belajar pemrograman secara online dari tingkat pemula sampai tingkat lanjut.<br><br>Ikuti <strong>Kelas Koding Kodein </strong>sekarang <strong>GRATIS </strong>semua<strong>&nbsp;</strong>kelas tingkat <em>Beginner</em>!</p>
                        <div class="mbr-section-btn"><a class="btn btn-info display-4" href="#content2-b">Belajar koding sekarang!</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-5"><strong>Belajar Koding Online</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-7">Fitur-fitur di <strong>Kelas Koding Kodein&nbsp;</strong>yang sangat mendukung bagi pemula sampai pro, untuk belajar koding dengan mudah secara online.</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-upload-2 mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-5"><strong>Materi ter-Up-To-Date</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-7">Materi <strong>Kelas Koding Kodein</strong> yang ringan untuk di pahami dan <em>up-to-date </em>dengan perkembangan teknologi saat ini!</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-idea mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-5"><strong>Ikuti Tantangan Kode!</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-7">Bagi yang ingin mengasah logika dan mengetahui sudah sampai mana pemahaman dalam logika pemrograman dapat mengikuti <strong>Tantangan Kode!</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content2 bg-[#BED3F9] pt-5" id="content2-b">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1 pt-5 pb-5"><strong>Kelas Koding Kodein</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Belajar Koding <strong>GRATIS!</strong> <br><br></h5>
        </div>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-3 gap-5">
        <?php foreach($kelas as $data){?>
            <div class="card bg-light m-3 pt-4 pl-4 pr-4 w-[100%]">
                <img src="<?php echo base_url();?>/assets/images/<?php echo $data['icon_kelas']?>" class="card-img-top" aalt="icon kelas" title="Kelas <?php echo ucfirst($data["nama_kelas"]);?>">
                <div class="card-body">
                    <h5 class="card-title text-[25px]">
                        <strong>Kelas <?php echo ucfirst($data["nama_kelas"]);?></strong>
                        <!-- <br> -->
                        <!-- <strong><?php echo ucfirst($data["nama_kelas"]);?></strong> -->
                    </h5>
                    <p class="mbr-text mbr-fonts-style mt-3 display-7 text-[17px] addReadMore showlesscontent fadeIn"><?php echo ucfirst($data["deskripsi_kelas"]); ?></p>
                    <div class="mbr-section-btn mt-5"><a href="/kelas/<?php echo $data['id_kelas'];?>" class="btn item-btn btn-info display-7">Lihat Selengkapnya!</a></div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
</section>

<section class="info1 cid-sDBh2AOwiV mbr-parallax-background" id="info1-u">
    <div class="mbr-overlay" style="opacity: 1; background-color: rgb(190, 211, 249);"></div>
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-2"><strong>Gratis kelas <em>beginner</em></strong><br><strong>coba sekarang!</strong></h3>
                <div class="mbr-section-btn"><a class="btn btn-info display-7" href="/#content2-b">Lihat semua kelas!</a></div>
            </div>
        </div>
    </div>
</section>

<section class="features19 cid-swTjCLy8Sz" id="features20-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <div class="card-wrapper pb-4">
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style mb-4 display-2">
                            <strong>Step-To-Step Tantangan Kode</strong></h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">Bagi yang ingin mengasah logika dan mengetahui sudah sampai mana pemahaman dalam logika pemrograman dapat mengikuti <strong>Tantangan Kode!</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">1</span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>Daftar Tantangan</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Daftarkan diri kamu ke tantangan kode.&nbsp;</h5>
                    </div>
                </div><br>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">2</span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>Ikuti Tantangan</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Ikuti tantangan kode bersama teman kamu.&nbsp;</h5>
                    </div>
                </div><br>
                <div class="item mbr-flex last">
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">3</span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>Tahap Penjurian</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Kode kamu akan di cek oleh juri professional.&nbsp;</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="countdown3 cid-swTub6G8gX" id="countdown3-d">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mbr-section-title mb-5 align-center mbr-fonts-style display-1"><strong>Kami Segera Hadir!</strong><strong><br></strong></h3>
                <div class="countdown-cont align-center mb-5">
                    <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Days"></div>
                    <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Hours"></div>
                    <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div>
                    <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Seconds"></div>
                    <div class="countdown" data-due-date="2024/01/01"></div>
                </div>
                <p class="mbr-text mb-5 align-center mbr-fonts-style display-7">Ikuti media sosial <strong>Kodein </strong>untuk update informasi selengkapnya!</p>
                <div class="icons-menu row justify-content-center display-7">
                <div class="soc-item col-auto">
                        <a href="#" target="_blank" rel="noreferrer" class="social__link">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div><div class="soc-item col-auto">
                        <a href="#" target="_blank" rel="noreferrer" class="social__link">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div><div class="soc-item col-auto">
                        <a href="#" target="_blank" rel="noreferrer" class="social__link">
                            <span class="mbr-iconfont socicon socicon-facebook"></span>
                        </a>
                    </div><div class="soc-item col-auto">
                        <a href="#" target="_blank" rel="noreferrer" class="social__link">
                            <span class="mbr-iconfont socicon socicon-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery3 cid-swTnKrdX7j bg-gradient-to-r from-cyan-500 to-blue-500" id="gallery3-a">
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-fonts-style align-center mb-0 display-1 text-[#fff]"><strong>Meet Kodein Team!</strong><br><strong><br></strong></h4>
        </div>
        <div class="row mt-4 flex justify-center">
            <div class="item features-image col-12 col-md-6 col-lg-3 ">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url();?>/assets/images/rezsa.jpg" alt="founder">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5 text-center"><strong>Rezsa</strong></h5>
                        <div class="founder text-[17px] font-bold text-center text-center">FOUNDER</div>
                            <a href="https://www.linkedin.com/in/rezsaaldiyans/" class="hover flex justify-center mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0077b5" class="bi bi-linkedin icon" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url();?>/assets/images/mikhael.jpg" alt="founder">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5 text-center"><strong>Mikhael</strong></h5>
                        <div class="founder text-[17px] font-bold text-center">FOUNDER</div>
                        <a href="https://www.linkedin.com/in/mikhaelhosea/" class="hover flex justify-center mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0077b5" class="bi bi-linkedin icon" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url();?>/assets/images/askar.jpg" alt="founder">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5 text-center"><strong>Askar</strong></h5>
                        <div class="founder text-[17px] font-bold text-center">FOUNDER</div>
                        <a href="https://www.linkedin.com/in/muhammad-askar-ghany-irawan-a287291a2/" class="hover flex justify-center mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0077b5" class="bi bi-linkedin icon" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                    </div>
                </div>
            </div>
            <!-- <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url();?>/assets/images/askar.jpg" alt="founder">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Askar</strong></h5>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                            Kono bangumi wa goran no suponsaa no teikyou de okurishimasu. <a href="#" class="text-primary">Read more..</a></p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="footer5 cid-swTu8oSquH" once="footers" id="footer5-c">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-2 col-6">
                <div class="media-wrap">
                    <img src="assets/images/kodein-logo-309x162.png" alt="Kodein">
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
                            <a href="#" target="_blank" rel="noreferrer">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank" rel="noreferrer">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank" rel="noreferrer">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/kodein.indonesia/" target="_blank" rel="noreferrer">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank" rel="noreferrer">
                                <span class="mbr-iconfont mbr-iconfont-social mobi-mbri-github mobi-mbri"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank" rel="noreferrer">
                                <span class="mbr-iconfont mbr-iconfont-social mobi-mbri-paper-plane mobi-mbri"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    function addReadMore(){
        let limit = 120
        var readMoreTxt = " ... Read More";
        var readLessTxt = " Read Less";
        $(".addReadMore").each(function(){
            let allstr = $(this).text();
            if(allstr.length > limit){
                let first = allstr.substring(0,limit);
                let sec = allstr.substring(limit,allstr.length);
                let strtoadd = first + "<span class='SecSec'>" + sec + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }
        })
        $(document).on("click",".readMore,.readLess",function(){
            $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        })
    }
    $(function(){
        addReadMore();
    })
</script>
<!-- <script src="/assets/theme/js/script.js"></script> -->
</body>
</html>