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
</head>
<body>

<section class="menu menu3 cid-swTgLUegze" once="menu" id="menu3-0">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                        <a href="/"><img src="<?php echo base_url();?>/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein" style="height: 4rem;"></a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#gallery3-a"><strong>Tentang Kami</strong></a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#content2-b"><strong>Kelas Koding</strong></a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="/#features20-7"><strong>Tantangan Kode</strong></a>
                    </li></ul>
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

<section class="kodeinanim header11 cid-swTlNn1ixR" id="header11-9">
    <div class="container-fluid">
        <style>
        @media screen and (max-width: 700px) {
            div.anilogo {
                display: none;
                margin-top: 5%;
            }
            .kodeinanim {
                margin-top: 64%;
            }
        }
        </style>
        <div class="row justify-content-left">
            <div class="anilogo col-12 col-md-5 image-wrapper">
                <object type="image/svg+xml" data="<?php echo base_url();?>/assets/images/kodein-animate.svg">
                    <img src="<?php echo base_url();?>/assets/images/kodein-animate.svg" />
                </object>
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h2 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Kelas koding kodein!</strong></h2>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Kono bangumi wa goran no suponsaa no teikyou de okurishimasu. platform untuk belajar koding khusus untuk weebs di indonesia!&nbsp;</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-info display-7" href="index.html#features13-6">&nbsp;Lihat selengkapnya!</a></div>
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
                        <div class="mbr-section-btn"><a class="btn btn-info display-4" href="/#content2-b">Belajar koding sekarang!</a></div>
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

<section class="content2 cid-swTq3V5hrx" id="content2-b">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1"><strong>Kelas Koding Kodein</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Belajar Koding <strong>GRATIS!</strong> <br><br></h5>
        </div>
        <div class="row mt-4">
        <?php foreach($kelas as $data){?>
            <div class="item features-image сol-6 col-md-3 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url();?>/assets/images/<?php echo $data['icon_kelas']?>" alt="" title="" data-slide-to="0">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Kelas <?php echo ucfirst($data["level"]);?></strong>
                            <br>
                            <strong><?php echo ucfirst($data["nama_kelas"]);?></strong>
                            <strong>
                            <br>
                            </strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7 addReadMore showlesscontent fadeIn"><?php echo ucfirst($data["deskripsi_kelas"]); ?></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/kelas/<?php echo $data['id_kelas'];?>" class="btn item-btn btn-info display-7">Lihat Selengkapnya!</a></div>
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
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Kono bangumi wa goran no suponsaa no teikyou de okurishimasu.&nbsp;</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">2</span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>Ikuti Tantangan</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Kono bangumi wa goran no suponsaa no teikyou de okurishimasu. Kono bangumi wa goran no suponsaa no teikyou de okurishimasu.&nbsp;</h5>
                    </div>
                </div>
                <div class="item mbr-flex last">
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">3</span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>Tahap Penjurian</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Kono bangumi wa goran no suponsaa no teikyou de okurishimasu. Kono bangumi wa goran no suponsaa no teikyou de okurishimasu. Kono bangumi wa goran no suponsaa no teikyou de&nbsp;</h5>
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

<section class="gallery3 cid-swTnKrdX7j" id="gallery3-a">
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1"><strong>Meet Kodein Team!</strong><br><strong><br></strong></h4>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url();?>/assets/images/aku.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Rezsa</strong></h5>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                            Kono bangumi wa goran no suponsaa no teikyou de okurishimasu.  <a href="#" class="text-primary">Read more..</a></p>
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url();?>/assets/images/mika-melatika-portrait-1-350x451.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Mika</strong></h5>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                            Kono bangumi wa goran no suponsaa no teikyou de okurishimasu. <a href="#" class="text-primary">Read more..</a></p>
                    </div>
                </div>
            </div>
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
                            <a href="#" target="_blank" rel="noreferrer">
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
<script src="<?php echo base_url();?>/assets/web/assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/popper/popper.min.js"></script>
<script src="<?php echo base_url();?>/assets/tether/tether.min.js"></script>
<script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/smoothscroll/smooth-scroll.js"></script>
<script src="<?php echo base_url();?>/assets/dropdown/js/nav-dropdown.js"></script>
<script src="<?php echo base_url();?>/assets/dropdown/js/navbar-dropdown.js"></script>
<script src="<?php echo base_url();?>/assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="<?php echo base_url();?>/assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="<?php echo base_url();?>/assets/parallax/jarallax.min.js"></script>
<script src="<?php echo base_url();?>/assets/countdown/jquery.countdown.min.js"></script>
<script>
    function addReadMore(){
        let limit = 100
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