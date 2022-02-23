<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodein | Masuk/Daftar</title>
    <!-- sweet alert -->
    <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.min.css">

    <!-- css -->
    <link rel="stylesheet" href="assets/log-in/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function alertjs(icon, title){
            Swal.fire({
                icon: icon,
                title: title,
            })
        }
    </script>
</head>

<body>
    <div class="container p-0" id="container">
        <div class="form-container sign-up-container">
            <form action="/register" method="POST">
                <h1 class="mb-2">Buat Akun</h1>
                <!-- <div class="alert alert-primary" role="alert">This is a primary alert—check it out!</div> -->
                <?php
                    if(session()->getFlashData('errorRegister')){
                        echo "<div class='alert alert-danger' role='alert'>".session()->getFlashData('errorRegister')."</div>";
                        echo "<script>alertjs('warning','Invalid Validasi')</script>";
                        echo "<script>document.getElementById('container').classList.add('right-panel-active');</script>";
                    }
		?>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Masukan e-mail dan password untuk mendaftar, atau daftar dengan akun social media</span>
                <input type="text" name="nama" placeholder="Masukan nama" />
                <input type="email" name="email" placeholder="Masukan e-mail" />
                <input type="password" name="password" placeholder="Masukan password (min 8 karakter)" />
                <input type="password" name="confirmPassword"placeholder="Konfirmasi password" />
                <button class="mt-2">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/logins" method="POST">
                <h1 class="mb-2">Masuk</h1>
                <!-- <div class="alert alert-primary" role="alert">
                    This is a primary alert—check it out!
                  </div> -->
                  <?php
                    if(session()->getFlashData('msgerr')){
                    echo "<div class='alert alert-danger' role='alert'>".session()->getFlashData('msgerr')."</div>";
                    }else if(session()->getFlashData('berhasil')){
                        // echo "<div class='alert alert-success' role='alert'>".session()->getFlashData('berhasil')."</div>";
                        echo "<script>alertjs('success','Berhasil!','".session()->getFlashData('berhasil')."');</script>";
                    }else if(session()->getFlashData('errorLogin')){
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>".session()->getFlashData('errorLogin')."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                        echo "<script>alertjs('warning','Data Tidak Sesuai!','Cek kembali datanya!');</script>";
                        echo "<script>document.getElementById('container').classList.remove('right-panel-active')</script>";
                    }
                ?>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Masukan username dan password atau gunakan akun social media</span>
                <input type="email" name="email" placeholder="Masukan e-mail" />
                <input type="password" name="password" placeholder="Masukan password" />
                <a href="#">Lupa password? coba inget-inget lagi...</a>
                <button class="mt-2">Masuk</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="assets/images/kodein-logo-k-560x560.png" width="150" alt="">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Jika kamu sudah pernah mendaftar silahkan masuk dengan akun Kodein mu!</p>
                    <button class="ghost" id="signIn">Masuk</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="assets/images/kodein-logo-k-560x560.png" width="150" alt="">
                    <h1>Halo Teman!</h1>
                    <p>Belajar koding online dan asah skill pemrogramanmu! Tunggu apa lagi, ayo daftar Kodein sekarang!</p>
                    <button class="ghost" id="signUp">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="assets/log-in/script.js"></script>
</body>

</html>
