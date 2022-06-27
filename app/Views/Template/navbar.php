<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <img src="/<?php echo $session->get('profile_user');?>" alt="foto profile" class="rounded-circle w-auto h-9 pt-0">&nbsp;
                            <span class="full-name display-4 font-bold"><?= ucfirst($session->get('nama_lengkap'));?></span>
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