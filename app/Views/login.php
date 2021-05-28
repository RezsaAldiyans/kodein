<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Template</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
    section {
      margin-top: 2%;
    }
    .login{
      padding-top: 25%;
    }
    .login-card-img {
      border-radius: 0;
      position: absolute;
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <section>
    <div class="container">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/images/auth.jfif" alt="login" class="img1 login-card-img d-block">
            <div class="card-body p-5">
              <h4 class="text-center">Register Page</h4>
              <form action="/register" method="POST">
                <div class="form-group">
                  <label for="username">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="username"
                    placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="example@email.com" required>
                </div>
                <div class="form-group">
                  <label for="telp">No. Handphone</label>
                  <input type="text" name="no_hp" class="form-control" id="telp"
                    placeholder="08xxxxxxxx" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password"
                    placeholder="********" required>
                </div>
                <div class="mt-4">
                  <button class="btn btn-dark btn-block waves-effect waves-light" type="submit">Register</button>
                </div>
              </form>
              <div class="mt-4 text-center">
                <p class="mb-0"><a href="/">have account? Login</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <img src="assets/images/auth.jfif" alt="login" class="img2 login-card-img d-none">
            <div class="login card-body px-5">
              <h4 class="text-center">Login Page</h4>
              <?php
                if(session()->getFlashData('msg')){
                  echo "<div class='alert alert-danger' role='alert'>".session()->getFlashData('msg')."</div>";
                }else if(session()->getFlashData('berhasil')){
                  echo "<div class='alert alert-success' role='alert'>".session()->getFlashData('berhasil')."</div>";
                }
              ?>
              <form action="/logins" method="POST">
                <div class="form-group">
                  <label for="username">Email</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="userpassword">Password</label>
                  <input type="password" name="password" class="form-control" id="userpassword"
                    placeholder="Enter password">
                </div>
                <div class="mt-4">
                  <button class="btn btn-dark btn-block waves-effect waves-light" type="submit">Log In</button>
                </div>
              </form>
              <div class="mt-4 text-center">
                <p class="mb-0"><a href="/">No have account?</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
    const login = document.querySelector('.img1')
    const register = document.querySelector('.img2')
    register.addEventListener('click', function(){
      register.classList.remove('d-block')
      register.classList.add('d-none')
      login.classList.remove('d-none')
      login.classList.add('d-block')
    })
    login.addEventListener('click', function(){
      login.classList.remove('d-block')
      login.classList.add('d-none')
      register.classList.remove('d-none')
      register.classList.add('d-block')
    })
  </script>
</body>

</html>