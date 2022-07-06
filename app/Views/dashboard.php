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
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/css/style.css"> -->

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
                            $progressing = round(($progress/$kelas["total_materi"])*100);
                    ?>
                    <div class="card bg-light m-3 pt-4 pl-4 pr-4 w-[100%]">
                        <img src="<?php echo base_url();?>/assets/images/<?php echo $kelas['icon_kelas']?>" class="card-img-top" aalt="icon kelas" title="Kelas <?php echo ucfirst($kelas["nama_kelas"]);?>">
                        <div class="card-body">
                            <h5 class="card-title text-[25px]">
                                <strong>Kelas <?php echo ucfirst($kelas["level"]);?></strong>
                                <br>
                                <strong>Status : <?php echo $progressing ?>%</strong>
                            </h5>
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
                <div class="card bg-light m-3 pt-4 pl-4 pr-4 w-100">
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

<footer class="p-4 bg-white rounded-lg md:px-6 md:py-8 dark:bg-gray-800 mt-5">
    <div class="container">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://kodein.online/" class="flex items-center mb-4 sm:mb-0">
                <img src="assets/images/kodein-logo-309x162.png" class="mr-3 h-30" alt="Flowbite Logo" alt="kodein logo">
                <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Kodein</span> -->
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 no-underline md:mr-6 text-xl text-[#125488] font-bold">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" class="mr-4 no-underline md:mr-6 text-xl text-[#125488] font-bold">Kelas Koding</a>
                </li>
                <li>
                    <a href="#" class="mr-4 no-underline md:mr-6 text-xl text-[#125488] font-bold">Code Challenge</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="block text-sm text-black-500 sm:text-center dark:text-black-400 text-xl">© 2022 <a href="https://kodein.online/" class="hover:underline">Kodein</a>. All Rights Reserved.
            </span>
            <div class="flex space-x-6 mt-0 pt-0 sm:justify-center md:mt-0">
                <a href="#" class="text-gray-400">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-400">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </a>
                <a href="#" class="text-gray-400">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-400">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

</main>
<!-- all js -->
<script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>