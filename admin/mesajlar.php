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
	<style> .auth-box2 {width: 60%;margin: 0 auto;background-color: #fff; }
</style>
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
									<li><a href="iletisim.php" class="">İletişim</a></li>
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
					<h3 class="page-title">Mesajlar</h3>
					<div class="row">
						
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Ad Soyad</th>
												<th>Email</th>
												<th>Konu</th>
												<th>Zaman</th>
												<th style="width: 45%;">Mesaj</th>
												<th>Sil</th>
											</tr>
										</thead>
										<tbody>
										<?php
										$i=0;
										if($_SERVER['REQUEST_METHOD']=="GET"){
										$baglanti=mysqli_connect("localhost","root","123","veritabani"); 
										if(!$baglanti){
										echo "Bağlanılamadı." .mysqli_connect_error();
										}
										else{
										echo "";
										$sql = "Select * from mesajlar order by id desc";
										$kayit = mysqli_query($baglanti,$sql);
										if (mysqli_num_rows($kayit) > 0) {
										while($getir = mysqli_fetch_assoc($kayit)){
										$i++;
										$id=$getir['id'];
										echo" <tr><td>".$i."</td>".
										"<td>".$getir['adSoyad']."</td>".
										"<td>".$getir['email']."</td>".
										"<td>".$getir['konu']."</td>".
										"<td>".$getir['zaman']."</td>".
										"<td>".$getir['mesaj']."</td>".
										"<td><a  href='sil.php?id=$id'><span class='lnr lnr-trash'></span></a></td>".
									"</tr>";}
									}}}
									?>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
				</div>
				
			</div>
			<!-- END MAIN CONTENT -->
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
