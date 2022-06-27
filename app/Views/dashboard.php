<html lang="en">
<?php
$session = session();
$badges = $badges;
$exp = $exp;
$tgl_gabung = $tgl_gabung;
?>
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/kodein-logo-landing-128x128.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/kodein-logo-landing-128x128.png" type="image/png">
    <meta name="description" content="kodein is a website for learning">

    <!-- all css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap-reboot.min.css">
    <!-- <link rel="preload" as="style" href="<?php echo base_url();?>/assets/mobirise/css/mbr-additional.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/css/style.css">

    <!-- CSS Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- JS -->
	<script src="<?php echo base_url();?>/assets/js/dashboard_user.js" defer></script>
	<!-- <script src="<?php echo base_url();?>/assets/fullcalendar-5.7.0/lib/main.js" defer></script> -->
    <script src="<?php echo base_url();?>/assets/tailwind/all.js"></script>
    <script src="<?php echo base_url();?>/assets/web/assets/jquery/jquery.min.js"></script>
    <!-- calender -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets/calender/loader.js"></script>
    <!-- <script type="text/javascript">
        google.charts.load("current", { packages: ["calendar"] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var dataTable = new google.visualization.DataTable();
            dataTable.addColumn({ type: 'date', id: 'Date' });
            dataTable.addColumn({ type: 'number', id: 'Laporan' });
            dataTable.addRows([
                // Many rows omitted for brevity.
                [new Date(2022, 5, 4), 0],
                [new Date(2022, 5, 5), 2],
                [new Date(2022, 5, 2), 3],
                [new Date(2022, 5, 22), 5],
                [new Date(2022, 5, 9), 3],
                [new Date(2022, 5, 23), 4],
                [new Date(2022, 5, 24), 5],
                [new Date(2022, 5, 29), 10]
            ]);

            var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

            var options = {
                title: "Aktivitas",
                height: 150,
                calendar: {
                    // cell sizing
                    cellSize: 10,
                    focusedCellColor: {
                        stroke: '#00ff00',
                        strokeOpacity: 1,
                        strokeWidth: 1,
                    },
                    monthLabel: {
                        fontName: 'Jost',
                        fontSize: 12,
                        color: '#135388',
                        bold: true,
                        italic: true
                    },
                    monthOutlineColor: {
                        stroke: '#3cd9d6',
                        strokeOpacity: 0.8,
                        strokeWidth: 2
                    },
                    unusedMonthOutlineColor: {
                        stroke: '#fff',
                        strokeOpacity: 0.8,
                        strokeWidth: 1
                    },
                    yearLabel: {
                        fontName: 'Jost',
                        fontSize: 32,
                        color: '#3cd9d6',
                        bold: true,
                        italic: true
                    },
                    // color of the month name
                    dayOfWeekLabel: {
                        fontName: 'Jost',
                        fontSize: 8,
                        color: '#1a8763',
                        bold: true,
                        italic: true,
                    },
                },
                // mengubah tema background dan warna box
                // noDataPattern: {
                //     backgroundColor: '#76a7fa',
                //     color: '#fff'
                // }
            };

            chart.draw(dataTable, options);
        } -->
    </script>
    <script>
        $(document).ready(function(){
            $("section.kek").hide()
            $("section.coc").hide()
            $("section.coe").hide()
            $("div.kek").click(function(){
                $("section.kek").toggle(500);
                // $('html, body').animate({
                //     scrollTop: $("section.kek").offset().top - 5
                // }, 1000);
                if($("section.coc").is(':visible')){
                    $("section.coc").hide(1000);
                }
                if($("section.coe").is(':visible')){
                    $("section.coe").hide(1000);
                }
            });
            $("div.coc").click(function(){
                $("section.coc").toggle(1000);
                if($("section.kek").is(':visible')){
                    $("section.kek").hide(1000);
                }
                if($("section.coe").is(':visible')){
                    $("section.coe").hide(1000);
                }
            });
            $("div.coe").click(function(){
                $("section.coe").toggle(1000);
                if($("section.coc").is(':visible')){
                    $("section.coc").hide(1000);
                }
                if($("section.kek").is(':visible')){
                    $("section.kek").hide(1000);
                }
            });
        });
    </script>
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
    </style>
    <title>Profile <?php echo $nama_lengkap; ?></title>
</head>
<body>
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
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
                            <span class="full-name display-4 font-bold"><?= ucfirst($nama_lengkap);?></span>
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

<main>
    <section class="mt-5">
        <div class="container">
            <div class="row mx-auto">
                <!-- <div class="flex"> -->
                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 md:gap-x-10 xl-grid-cols-2 gap-y-10 gap-x-6">
                        <div class="profile">
                            <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow shadow-[#E8E8E8] pl-0 text-center w-[600px] font-bold">
                                <div class="p-6 flex flex-col">
                                    <img class="w-[130] h-[130] rounded-full ml-3 mt-2 mx-auto" src="/<?php echo $profile_user;?>" alt="foto profile" />
                                </div>
                                <div class="p-6 flex flex-col">
                                    <p class="text-gray-700 text-base mb-3 text-[22px] font-bold"><?= ucfirst($nama_lengkap);?></p>
                                    <p class="text-gray-700 text-base italic mb-3 text-[22px]"><?php if($badges == "rookie"){echo '🗿'.$badges;}else if($badges == "beginner"){echo '<i style="color: #967444;" class="fas fa-medal pr-1"></i>'.$badges;}else if($badges == "intermediate"){echo '<i style="color: #A9A9A9;" class="fas fa-medal pr-1"></i>'.$badges;}else if($badges == "professional"){echo '<i style="color: gold;" class="fas fa-medal pr-1"></i>'.$badges;} ?></p>
                                    <p class="text-gray-700 text-base mb-3 text-[22px] text-[#3cd9d7] font-bold"><?php echo $exp ?> XP</p>
                                    <p class="text-gray-700 text-base mb-3 text-[22px]">Bergabung : <?php echo substr($tgl_gabung,0,11); ?></p>
                                    <div class="icon">
                                        <a href="<?php echo $sosmed['linkedin'];?>" target="_blank" class="mt-2 ">
                                            <i class="fab fa-linkedin fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col flex-wrap md:w-[600px] rounded-lg bg-white shadow shadow-[#E8E8E8] w-[600px] font-bold pt-2">
                                <!-- <div class="calender w-1/2 m-5" id="calender"></div> -->
                                <div class="w-100" id="calendar_basic"></div>
                                <!-- <p>Pencapaian</p>
                                <ul>
                                    <li>1. Menyelesaikan HTML</li>
                                </ul> -->
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- section 3 column -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6">
                    <div class="flex justify-center gap-5 kek">
                        <div class="block rounded-lg shadow bg-white max-w-sm text-center w-[500px]">
                            <div class="py-3 px-6 border-2 border-blue-300 text-[24px] font-bold pointer">
                            Kelas Koding
                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-[32px] mb-2"><?php echo count($kelas_user); ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center gap-5 coc">
                        <div class="block rounded-lg shadow bg-white max-w-sm text-center w-[500px]">
                            <div class="py-3 px-6 border-2 border-blue-300 text-[24px] font-bold pointer">
                            Code Challenge
                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-[32px] mb-2">1</h5>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center coe">
                        <div class="block rounded-lg shadow bg-white max-w-sm text-center w-[500px]">
                            <div class="py-3 px-6 border-2 border-blue-300 text-[24px] font-bold pointer">
                            Code Events
                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-[32px] mb-2">1</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section kelas koding -->
    <section class="mt-5 mb-5 kek">
        <div class="container">
            <div class="block rounded-lg shadow bg-white w-100 h-100 pt-3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    <?php
                        foreach($kelas_user as $kelas){
                    ?>
                    <div class="card bg-light m-3 pt-4 pl-4 pr-4 w-[100%]">
                        <img src="<?php echo base_url();?>/assets/images/<?php echo $kelas['icon_kelas']?>" class="card-img-top" aalt="icon kelas" title="Kelas <?php echo ucfirst($kelas["nama_kelas"]);?>">
                        <div class="card-body">
                            <h5 class="card-title text-[25px]">
                                <strong>Kelas <?php echo ucfirst($kelas["level"]);?></strong>
                                <br>
                                <strong><?php echo ucfirst($kelas["nama_kelas"]);?></strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7 text-[17px] addReadMore showlesscontent fadeIn"><?php echo ucfirst($kelas["deskripsi_kelas"]); ?></p>
                            <div class="mbr-section-btn mt-5"><a href="/kelas/<?php echo $kelas['id_kelas'];?>" class="btn item-btn btn-info display-7">Lihat Selengkapnya!</a></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section code challenge -->
    <section class="mt-5 mb-5 coc">
        <div class="container">
        <div class="block rounded-lg shadow bg-white w-100 h-100 pt-3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    <?php
                        foreach($kelas_user as $kelas){
                    ?>
                    <div class="card bg-light m-3 pt-4 pl-4 pr-4 w-95">
                        <img src="<?php echo base_url();?>/assets/images/<?php echo $kelas['icon_kelas']?>" class="card-img-top h-[50%]" aalt="icon kelas" title="Kelas <?php echo ucfirst($kelas["nama_kelas"]);?>">
                        <div class="card-body">
                            <h5 class="card-title text-[25px]">
                                <strong><?php echo $kelas["nama_kelas"];?></strong>
                                <br>
                                <strong>Status : <?php echo $kelas["status_kelas"] ?></strong>
                            </h5>
                            <div class="mbr-section-btn mt-5">
                                <a href="/kelas/<?php echo $kelas['id_kelas'];?>" class="btn item-btn btn-info display-7">Lihat Selengkapnya!</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section code events -->
    <section class="mt-5 mb-5 coe">
        <div class="container">
        <div class="block rounded-lg shadow bg-white w-100 h-100 pt-3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    <?php
                        foreach($kelas_user as $kelas){
                    ?>
                    <div class="card bg-light m-3 pt-4 pl-4 pr-4 w-95">
                        <img src="<?php echo base_url();?>/assets/images/<?php echo $kelas['icon_kelas']?>" class="card-img-top h-[50%]" aalt="icon kelas" title="Kelas <?php echo ucfirst($kelas["nama_kelas"]);?>">
                        <div class="card-body">
                            <h5 class="card-title text-[25px]">
                                <strong><?php echo $kelas["nama_kelas"];?></strong>
                                <br>
                                <strong>Status : <?php echo $kelas["status_kelas"] ?></strong>
                            </h5>
                            <div class="mbr-section-btn mt-5">
                                <a href="/kelas/<?php echo $kelas['id_kelas'];?>" class="btn item-btn btn-info display-7">Lihat Selengkapnya!</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="footer5 cid-swTu8oSquH mt-5" once="footers" id="footer5-c">
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
</main>
<!-- all js -->
<script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>