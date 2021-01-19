<!doctype html>
<?php 
session_start();
?>
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
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php">ÇAĞLA SOYSAL</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div class="navbar-btn navbar-btn-right">
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><span><?php echo $_SESSION["kullaniciAdi"]; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
							<li><a href="profil.php"><i class="lnr lnr-exit"></i> <span>Profil</span></a></li>
							<li><a href="cikis.php"><i class="lnr lnr-exit"></i> <span>Çıkış yap</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="mesajlar.php" class="active"><i class="lnr lnr-dice"></i> <span>Mesajlar</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Sayfalar</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="resim.php" class="">Resim</a></li>
									<li><a href="hakkimda.php" class="">Hakkımda</a></li>
									<li><a href="beceriler.php" class="">Beceriler</a></li>
									<li><a href="ozgecmis.php" class="">Özgeçmiş</a></li>
									<li><a href="referanslar.php" class="">Referanslar</a></li>
									<li><a href="ileisim.php" class="">İletişim</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
										<?php
										if($_SERVER['REQUEST_METHOD']=="GET"){
											$baglanti=mysqli_connect("localhost","root","123","veritabani"); 
											if(!$baglanti){
											echo "Bağlanılamadı";
											}
												else{
											
											$sql = "select anasayfa from ziyaret where id=1";
										if ($kayit=mysqli_query($baglanti,$sql))
										{
										while ($getir=mysqli_fetch_row($kayit))
										{
										echo "<span class='number'>".$getir[0]." </span>";
										}
										mysqli_free_result($kayit);
										} } }
										?>
											<span class="title">Anasayfa Görüntülenme Sayısı</span>
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
										<?php
										$i=0;
										if($_SERVER['REQUEST_METHOD']=="GET"){
											$baglanti=mysqli_connect("localhost","root","123","veritabani"); 
											if(!$baglanti)
											{echo "Bağlanılamadı." .mysqli_connect_error();}
											else{echo "";
										$sql = "Select * from mesajlar";
										$kayit = mysqli_query($baglanti,$sql);
										if (mysqli_num_rows($kayit) > 0) {
										while($getir = mysqli_fetch_assoc($kayit)){
										$i++;
											}echo "<span class='number'>".$i." </span>";} 
										else
										{echo "0";}
											}
										}
										?>
											<span class="title">Gelen Mesaj Sayısı</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; <?php echo date("Y");?>  Tüm Hakları Saklıdır.</p>
			</div>
		</footer>
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
