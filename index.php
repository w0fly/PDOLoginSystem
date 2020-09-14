<?php
	ob_start();
	session_start();
	include 'vt.php';
if (isset($_POST['loginizer'])) {

if($_POST)
	{
		$name =$_POST["usn"];
		$pass =md5($_POST["pass"]);


		$query  = $db->query("SELECT * FROM admin WHERE user='$name' && pass='$pass'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){
				session_start();
				$_SESSION['oturum']=true;
				$_SESSION['usn']=$name;
				$_SESSION['pass']=$pass;
				
				header("Location:basarili.php");
				
			}else{
				echo "oturum açılmadı hata";
			}
		}else{
			header("Location:hatali.php");
		}
	}else{
		echo "<script> alert('Lütfen Giriş Yapın !!') </script>";
	}
	


}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="template/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="template/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="template/login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="index.php?loginizer" method="POST">
					<span class="login100-form-title">
						Kullanıcı Girişi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Kullanıcı Adı Gerekli !" >
						<input class="input100" type="text" name="usn"placeholder="Kullanıcı Adı">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Şifre Gerekli !">
						<input class="input100" type="password" name="pass" placeholder="Şifre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="loginizer">
							Giriş Yap
						</button>
					</div>

					<div class="text-center p-t-12">
						
					</div>

					<div class="text-center p-t-136">
					
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="template/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="template/login/vendor/bootstrap/js/popper.js"></script>
	<script src="template/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="template/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="template/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="template/login/js/main.js"></script>

</body>
</html>