<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/style1.css">
    <!-- <link rel="stylesheet" href="assets/sweetalert2/sweetalert/dist/sweetalert2.css"> -->
    <script src="assets/sweetalert2/sweetalert/dist/sweetalert2.all.js"></script>
    <script src="assets/js/login.js" defer></script>
    <script>
        function alertjs(icon, title, text){
            Swal.fire({
                icon: icon,
                title: title,
                html: "<h4>"+text+"</h4>",
                allowOutsideClick:false,
                showConfirmButton: true,
                confirmButtonText : "yes",
            })
        }
    </script>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="/register" method="POST">
                <h1>Create Account</h1>
                <?php
                    if(session()->getFlashData('errorRegister')){
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>".session()->getFlashData('errorRegister')."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                        echo "<script>alertjs('error','Invalid Validasi','Cek kembali datanya!');</script>";
                        echo "<script>document.getElementById('container').classList.add('right-panel-active')</script>";
                    }?>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input class ="form-control" type="text" name="nama" id="name" placeholder="Nama Lengkap"/>
                <input class ="form-control" type="email" name="email" placeholder="example@email.com"/>
                <input class="form-control" type="password" name="password" placeholder="**********"/>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/logins" method="POST">
                <h1>Sign in</h1>
                <?php
                    if(session()->getFlashData('msgerr')){
                        echo "<div class='alert alert-danger' role='alert'>".session()->getFlashData('msgerr')."</div>";
                        echo "<script>alertjs('warning','Kesalahan!','".session()->getFlashData('msgerr')."');</script>";
                        echo "<script>document.getElementById('container').classList.remove('right-panel-active')</script>";
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
                <span>or use your account</span>
                <input class="form-control" type="email" name="email" placeholder="example@email.com"/>
                <input class="form-control" type="password" name="password" placeholder="**********"/>
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Kodein!</h1>
                    <p>Ayo daftar, dan tingkatkan skill kamu</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</html>
