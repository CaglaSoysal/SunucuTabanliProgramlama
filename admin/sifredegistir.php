<!doctype html>
<?php session_start();?>
<html lang="tr">
<head>
	<title>Dashboard | Çağla Soysal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<p class="lead">Şifremi Unuttum</p>
							</div>
							<form class="form-auth-small" action="<?=$_SERVER['PHP_SELF']?>" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Kullanıcı Adı</label>
									<input type="text" class="form-control" id="signin-email"  placeholder="Kullanıcı Adı" name="kullaniciAdi">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Şifre</label>
									<input type="password" class="form-control" id="signin-password" placeholder="Yeni Şifre" name="sifre">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" >Şifre Güncelle</button>
							</form>
						<?php
						if(isset($_POST['kullaniciAdi']))
						{
							$kullaniciAdi=$_POST["kullaniciAdi"];
							$sifre=$_POST["sifre"];
							if($kullaniciAdi=="" || $sifre=="")
							{
								echo"<br><div class='alert alert-danger alert-dismissible' role='alert'>".
								"<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".
								"<i class='fa fa-times-circle'></i> Lütfen alanları doldurunuz".
								"</div>";
							}
							else
							{
								if($_SERVER['REQUEST_METHOD']=="POST")
								{
								$baglanti=mysqli_connect("localhost","root","123","veritabani");
								if(!$baglanti){echo "";}
								else{echo "";}
								$sql = mysqli_query($baglanti,"SELECT * FROM admin WHERE kullaniciAdi='$kullaniciAdi'"); 
								$kayit  = mysqli_num_rows($sql);
								if($kayit > 0 ){ 	
											$sql2 = mysqli_query($baglanti,"UPDATE admin SET sifre='$sifre'  WHERE kullaniciAdi='$kullaniciAdi'"); 
											if($sql2){ 
												echo"<br> <div class='alert alert-success alert-dismissible' role='alert'>".
												"<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".
												"<i class='fa fa-check-circle'></i> Şifre değiştirildi".
												"</div>";
											}
								}
							else{
								echo" <br><div class='alert alert-danger alert-dismissible' role='alert'>".
								"<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".
								"<i class='fa fa-times-circle'></i> Şifre değiştirilemedi. Kullanıcı adınızın doğru olduğundan emin olunuz.".
								"</div>";
							}
						}}}?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">ÇAĞLA SOYSAL</h1>
							<p>Yeni Şifre Al</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>


</html>