<html lang="en">
<?php $session = session();?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodein</title>
    <!-- Punyaku -->
    <link rel="stylesheet" href="assets/fullcalendar-5.7.0/lib/main.css">
    <link rel="stylesheet" href="assets/style.css">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Punya mobirise -->
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animatecss/animate.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <!-- JS -->
    <script src="assets/js/dashboard-user.js" defer></script>
    <script src="assets/fullcalendar-5.7.0/lib/main.js" defer></script>

</head>

<body>

    <section class="menu menu3 cid-swTgLUegze" once="menu" id="menu3-0">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="http://kodein.codes">
                            <img src="assets/images/kodein-logo-k-560x560.png" class="image img-fluid mx-auto" alt="kodein">
                        </a>
                    </span>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black display-4 font-weight-bold"
                                href="https://mobiri.se">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4 font-weight-bold"
                                href="https://mobiri.se">Kelas Koding</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4 font-weight-bold"
                                href="https://mobiri.se">Code Challenge</a>
                        </li>
                    </ul>
                    <div class="icons-menu">
                        <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-youtube socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section class="profile mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card p-4 ">
                        <div class="row">
                            <div class="col-md-5">
                            <?php
                                if($session->get('profile_user') != ''){
                                    echo "<img src='$_SESSION[profile_user]' class='image img-fluid mx-auto' style='border-radius: 50%;' alt='profile user'>";
                                }else {
                                    echo '<img src="assets/images/i.jpg" class="image img-fluid mx-auto" style="border-radius: 50%;" alt="">';
                                }
                            ?>
                            </div>
                            <div class="col-md-7 justify-content-center py-4">
                                <p class="h1 text-md-left text-center"><?php echo ucfirst($session->get("nama_lengkap"));?></p>
                                <p class="h3 text-md-left text-center">Level: <?php echo $session->get('level');?></p>
                                <p class="h3 text-md-left text-center">Exp: <?php echo $session->get('exp');?></p>
                                <p class="h3 text-md-left text-center">Badges : <?php echo ucfirst($session->get('badges'));?></p>
                                <div class="d-flex justify-content-center d-md-block d-none">
                                    <button type="button" class="btn btn-primary btn-sm">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history shadow col-md-5 mt-0">
                    <div class="calender" id="calender"></div>
                </div>
            </div>
        </div>


        <!-- Icon  -->
        <div class="row mt-5">
            <div class="col-md-3 col-6">
                <div class="card border border-info mx-sm-1 p-3">
                    <div class="border border-info shadow text-info p-3 my-card"><span class="fa fa-code" aria-hidden="true"></span></div>
                    <div class="text-info text-center mt-3"><h4>Kelas Koding</h4></div>
                    <div class="text-info text-center mt-2"><h1><?php echo $session->get('total_kelas');?></h1></div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border border-success mx-sm-1 p-3">
                    <div class="border border-success shadow text-success p-3 my-card"><span class="fa fa-rocket" aria-hidden="true"></span></div>
                    <div class="text-success text-center mt-3"><h4>Code Challenge</h4></div>
                    <div class="text-success text-center mt-2"><h1><?php echo $session->get('total_kelas');?></h1></div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border border-danger mx-sm-1 p-3">
                    <div class="border border-danger shadow text-danger p-3 my-card" ><span class="fa fa-puzzle-piece" aria-hidden="true"></span></div>
                    <div class="text-danger text-center mt-3"><h4>Events</h4></div>
                    <div class="text-danger text-center mt-2"><h1><?php echo $session->get('total_kelas');?></h1></div>
                </div>
            </div>
            <div class="col-md-3 col-6 ">
                <div class="card border border-warning mx-sm-1 p-3">
                    <div class="border border-warning shadow text-warning p-3 my-card" ><span class="fa fa-dollar-sign" aria-hidden="true"></span></div>
                    <div class="text-warning text-center mt-3"><h4>Jobs</h4></div>
                    <div class="text-warning text-center mt-2"><h1><?php echo $session->get('total_kelas');?></h1></div>
                </div>
            </div>
        </div>

    </section>

     <!-- Footer -->
     <div class="row footer">
        <div class="col text-center">
          <p>&copy; Kodein 2021 All rights reserved.</p>
        </div>
      </div>
      <!-- End of footer -->

    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>