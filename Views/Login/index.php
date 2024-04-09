<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Dan">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Valcloshop - Đăng Nhập</title>
	<link
      rel="icon"
      type="image/x-icon"
      href="./Views/images/avatar.png"
    />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./Views/Login/style.css">
	<link href="./Views/Navbar/navbar.css" rel="stylesheet" type="text/css" />
	
	<link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
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
					<div class="brand">
						<img class="w-100" src="./views/images/np.png" alt="logo">
					</div>
					<div class="card-body mb-3 mt-3">
						<div class="row col-md-12 text-light ms-0">
							<h6>Đăng nhập nhanh qua mạng xã hội</h6>
						</div> <br>	
						<div class="block mb-2">
							<a class="btn btn-facebook btn-block2" href="#">
								<img class="icon" src="https://img.icons8.com/color/48/000000/facebook-new.png"> 
								Facebook
							</a>
						</div>
						<div class="block">
							<a class="btn btn-google btn-block2" href="#">
								<img class="icon" src="https://img.icons8.com/fluency/48/000000/google-logo.png"> 
								Google
							</a> 
						</div>
					</div>
				</div>
			</div>
			<div class="card-wrapper col-md-8 border-warning">
				<div class="card fat p-1">
					<div class="card-body">
						<h3 class="card-title mb-4">Đăng nhập</h3>
						<form method="POST" class="my-login-validation" novalidate="" onsubmit="return false">
							<div class="form-group">
								<label for="validationCustomUsername" class="form-label">Tên đăng nhập</label>
								<div class="input-group has-validation">
									<input type="text" class="form-control" id="validationCustomUsername" required name="user">
									<div class="invalid-feedback">
										Tên đăng nhập trống.
									</div>
								</div>
							</div>
	
							<div class="form-group mt-2 mb-2">
								<label class="d-flex justify-content-between" for="password">Mật khẩu
								<a href="?url=/Home/forgot/" class="float-right">
									Quên mật khẩu?
								</a>
								</label>
								<input id="password" type="password" class="form-control mt-2" name="password" required data-eye>
								<div class="invalid-feedback">
									Mật khẩu trống
								</div>
							</div>
	
							<div class="form-check">
								<input type="checkbox" name="remember" id="remember" class="custom-control-input">
								<label for="remember" class="custom-control-label">Ghi nhớ tài khoản</label>
							</div>
	
							<div class="card mt-4">
								<button type="submit" class="btn btn-warning btn-block w-100">
									Đăng nhập
								</button>
							</div>
							<div class="mt-4 text-center">
								Bạn chưa có tài khoản? <a href="?url=/Home/register/">Đăng kí thành viên</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="demo" hidden><?php if(is_array($data["key"])) echo $data["key"][2];
									else  echo $data["key"]; ?></div>
	<!--div class="footer-holder"></div>
	<script src="./Views/footer/footerScript.js"></script-->
	
    <?php require_once("./Views/footer/index.php");?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="./Views/Login/login.js"></script>
</body>
</html>
