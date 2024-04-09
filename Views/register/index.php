<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Dan" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Valcloshop - Đăng Ký</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./Views/images/avatar.png"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./Views/Login/login.css" />
    <link href="./Views/Navbar/navbar.css" rel="stylesheet" type="text/css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/721412f694.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body>
    <?php require_once("./Views/Navbar/index.php"); ?>
    <script src="./Views/Navbar/navbarScript.js"></script>
    <div class="login mb-5" style="min-height: 66vh;">
      <div class="row justify-content-md-center h-100">
        <div class="card-wrapper col-md-4">
          <div class="card fat p-1 bg-warning">
            <div class="mybrand">
              <img class="w-100" src="./Views/images/np.png" alt="logo" />
            </div>
            <div class="card-body mb-3 mt-3 d-flex flex-column justify-content-center">
              <div class="row col-md-12 text-light ms-0">
                <h6 style="align-text: center;">Đăng nhập nhanh qua mạng xã hội</h6>
              </div>
              <br />
              <div class="block mb-2">
                <a class="btn btn-facebook btn-block2" href="#">
                  <img
                    class="icon"
                    src="https://img.icons8.com/color/48/000000/facebook-new.png"
                  />
                  Facebook
                </a>
              </div>
              <div class="block">
                <a class="btn btn-google btn-block2" href="#">
                  <img
                    class="icon"
                    src="https://img.icons8.com/fluency/48/000000/google-logo.png"
                  />
                  Google
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-wrapper col-md-8 border-warning">
          <div class="card fat p-1">
            <div class="card-body">
              <h3 class="card-title mb-4">Đăng kí tài khoản</h3>
              <form method="POST" class="my-login-validation" novalidate="" onsubmit="return false">
                <div class="form-group">
                  <label for="fname">Họ và tên</label>
                  <input
                    id="fname"
                    type="text"
                    class="form-control mt-1"
                    name="fname"
                    required
                    autofocus
                  />
                  <div class="invalid-feedback">Họ và tên trống!</div>
                </div>

                <div class="form-group mt-2">
                  <label for="cmnd">CMND/CCCD</label>
                  <input
                    id="cmnd"
                    type="text"
                    class="form-control mt-1"
                    name="cmnd"
                    required
                  />
                  <div class="invalid-feedback">CMND/CCCD trống!</div>
                </div>

                <div class="form-group mt-2">
                  <label for="email">E-Mail</label>
                  <input
                    id="email"
                    type="email"
                    class="form-control mt-1"
                    name="email"
                    required
                  />
                  <div class="invalid-feedback">Email không hợp lệ!</div>
                </div>

                <div class="form-group mt-2">
                  <label for="name">Tên đăng nhập</label>
                  <input
                    id="name"
                    type="text"
                    class="form-control mt-1"
                    name="name"
                    required
                    autofocus
                  />
                  <div class="invalid-feedback">Tên đăng nhập trống!</div>
                </div>

                <div class="form-group mt-2">
                  <label for="password">Mật khẩu</label>
                  <input
                    id="password"
                    type="password"
                    class="form-control mt-1"
                    name="password"
                    required
                    data-eye
                  />
                  <div class="invalid-feedback">Mật khẩu trống!</div>

                </div><div class="form-group mt-2">
                  <label for="re_password">Xác thực mật khẩu</label>
                  <input
                    id="re_password"
                    type="password"
                    class="form-control mt-1"
                    name="re_password"
                    required
                    data-eye
                  />
                  <div class="invalid-feedback">Mật khẩu xác thực trống!</div>
                  <div class="invalid-feedback">Mật khẩu không trùng khớp!</div>
                </div>

                <div class="card mt-3">
                  <button type="submit" class="btn btn-warning btn-block w-100 mybtn">
                    Đăng kí
                  </button>
                </div>
                <div class="mt-4 text-center">
                  Bạn đã có tài khoản? <a href="?url=/Home/Login">Đăng nhập</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--div class="footer-holder"></div>
    <script src="../Views/footer/footerScript.js"></script-->
    <?php require_once("./Views/footer/index.php");?>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="./Views/register/register.js"></script>
  </body>
</html>
