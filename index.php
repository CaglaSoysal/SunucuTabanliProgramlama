<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Hoşgeldiniz | Çağla Soysal</title>
  <!-- Favicons -->
  <link href="assets/img/computer.png" rel="icon">
  <link href="assets/img/computer.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <?php
  if($_SERVER['REQUEST_METHOD']=="GET"){
    $baglanti=mysqli_connect("localhost","root","123","veritabani"); 
    if(!$baglanti){
    echo "Bağlanılamadı." .mysqli_connect_error();
    }
    else{
    echo "";
  $sql = "SELECT * FROM girisresmi ORDER BY id DESC LIMIT 1";
  $kayit = mysqli_query($baglanti,$sql);

  if (mysqli_num_rows($kayit) > 0) {
  while($getir = mysqli_fetch_assoc($kayit)){
    $resim=$getir["resim"];
    $buyukYazi=$getir["buyukYazi"];
    $kucukYazi=$getir["kucukYazi"];
  } } } }
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center" style="background: url('./assets/img/<?php echo "{$resim}"; ?>') top center;">
    <h1><?php echo "{$buyukYazi}"; ?></h1>
    <h2><?php echo "{$kucukYazi}"; ?></h2>
    <a href="#about" class="btn-get-started scrollto"><i class="icofont-simple-down"></i></a>
  </section><!-- End Hero -->
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>ÇAĞLA SOYSAL</span></a></h1>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Anasayfa</a></li>
          <li><a href="#about">Hakkımda</a></li>
          <li><a href="#skills">Beceriler</a></li>
          <li><a href="#resume">Özgeçmiş</a></li>
          <li><a href="#portfolio">Referanslar</a></li>
          <li><a href="#contact">İletişim</a></li>
          <li><a href="./admin/giris.php" type="button" class="btn btn-outline">Giriş Yap</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
      $baglan=mysqli_connect("localhost","root","123","veritabani"); 
      if(!$baglanti){
      echo "Bağlanılamadı." .mysqli_connect_error();
      }
      else{
      echo "";
    $sql = "SELECT * FROM hakkimda ORDER BY id DESC LIMIT 1";
    $kayit = mysqli_query($baglanti,$sql);

    if (mysqli_num_rows($kayit) > 0) {
    while($getir = mysqli_fetch_assoc($kayit)){
      $icerik=$getir["icerik"];
      $resim=$getir["resim"];
    } } } }
    ?>
    <section id="about" class="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" style="  background: url('./assets/img/<?php echo "{$resim}"; ?>') center center no-repeat;"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Benimle İlgili Kısa Bilgiler</h3>
                <p>
                <?php echo "{$icerik}"; ?>
              </p>
                <p>
                  <div class="social-links pt-2">
                    <p>Instagram adresim: <a href="https://www.instagram.com/soysalcagla/" class="instagram"><i class="icofont-instagram" ></i></a></p>
                </div>
              </p>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
      
    $baglan=mysqli_connect("localhost","root","123","veritabani"); 
    if(!$baglan){
      echo "Bağlanılamadı." .mysqli_connect_error();
    }
    else{
    echo "";
    $sql = "SELECT * FROM beceriler order by id limit 6";
    $kayit = mysqli_query($baglanti,$sql);

    if (mysqli_num_rows($kayit) > 0) {
    while($goster = mysqli_fetch_assoc($kayit)){
      $bilgi[$goster['id']]=$goster;
    } } } }
    ?>
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Beceriler</h2>
        </div>
        <div class="row skills-content">
          <div class="col-lg-6">
          <?php   foreach ($bilgi as $getir) :  ?> 
            <?php if($getir['id'] <=1){?>
              <div class='progress'>
              <span class='skill'><?php echo"{$getir['adi']}"?><i class='val'><?php echo"{$getir['yuzde']}"?>%</i></span>
                <div class='progress-bar-wrap'>
                <div class='progress-bar' role='progressbar' aria-valuenow='<?php echo"{$getir['yuzde']}"?>' aria-valuemin='0' aria-valuemax='100'></div>
               </div>
             </div>
           <?php }else{ ?>
               </div>
                <div class='col-lg-6'>
                 <div class='progress'>
                  <span class='skill'><?php echo"{$getir['adi']}"?><i class='val'><?php echo"{$getir['yuzde']}"?>%</i></span>
                  <div class='progress-bar-wrap'>
                  <div class='progress-bar' role='progressbar' aria-valuenow="<?php echo"{$getir['yuzde']}"?>" aria-valuemin='0' aria-valuemax='100'></div>
                 </div>
                </div>
           <?php }?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
      
    $baglanti=mysqli_connect("localhost","root","123","veritabani"); 
    if(!$baglanti){
      echo "Bağlanılamadı." .mysqli_connect_error();
    }
    else{
    echo "";
    $sql = "SELECT * FROM egitim order by id limit 2";
    $kayit = mysqli_query($baglanti,$sql);

    if (mysqli_num_rows($kayit) > 0) {
    while($goster = mysqli_fetch_assoc($kayit)){
      $bilgi[$goster['id']]=$goster;
    } } } }
    ?>
    <section id="resume" class="resume section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Özgeçmiş</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Eğitim</h3>
            <?php   foreach ($bilgi as $getir) :  ?> 
            <?php if($getir['id'] <=2){ ?>
            <div class="resume-item">
              <h4><?php echo "{$getir['universite']}" ?></h4>
              <h5><?php echo "{$getir['tarih']}" ?></h5>
              <p><em><?php echo "{$getir['bolum']}" ?></em></p>
              <p><?php echo "{$getir['aciklama']}" ?></p>
            </div>
            <?php } endforeach; ?>
          </div>
          <div class="col-lg-6">
          <?php
          if($_SERVER['REQUEST_METHOD']=="GET"){
            
          $baglanti=mysqli_connect("localhost","root","123","veritabani"); 
          if(!$baglanti){
            echo "Bağlanılamadı." .mysqli_connect_error();
          }
          else{
          echo "";
          $sql = "SELECT * FROM staj order by id limit 2";
          $kayit = mysqli_query($baglanti,$sql);

          if (mysqli_num_rows($kayit) > 0) {
          while($goster = mysqli_fetch_assoc($kayit)){
            $bilgi[$goster['id']]=$goster;

          } } } }
          ?>
            <h3 class="resume-title">Staj</h3>
            <?php   foreach ($bilgi as $getir) :  ?> 
            <?php if($getir['id'] <=2){ ?>
            <div class="resume-item">
              <h4><?php echo "{$getir['firmaAdi']}" ?></h4>
              <h5><?php echo "{$getir['tarih']}" ?></h5>
              <p><?php echo "{$getir['aciklama']}" ?></p>
            </div>
            <?php } endforeach; ?>
          </div>
        </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Referanslar</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Hepsi</li>
              <li data-filter=".filter-bootstrap">Bootstrap</li>
              <li data-filter=".filter-wordpress">Wordpress</li>
              <li data-filter=".filter-php">PHP</li>
            </ul>
          </div>
        </div>
        <?php
        if($_SERVER['REQUEST_METHOD']=="GET"){
          
        $baglanti=mysqli_connect("localhost","root","123","veritabani"); 
        if(!$baglanti){
          echo "Bağlanılamadı." .mysqli_connect_error();
        }
        else{
        echo "";
        $sql = "SELECT * FROM referanslar order by id";
        $kayit = mysqli_query($baglanti,$sql);
        if (mysqli_num_rows($kayit) > 0) {
        while($goster = mysqli_fetch_assoc($kayit)){
          $bilgi[$goster['id']]=$goster;
        } } } }
        ?>
        <div class="row portfolio-container">
        <?php   foreach ($bilgi as $getir) :  ?> 
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo "{$getir['filtre']}" ?>">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/<?php echo "{$getir['resim']}" ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo "{$getir['adi']}" ?></h4>
              </div>
              <div class="portfolio-links">
                <a href="<?php echo "{$getir['link']}" ?>" title="Siteye Git" onclick="<?php echo "{$getir['uyari']}" ?>"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <?php  endforeach; ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title">
          <h2>İletişim</h2>
        </div>
        <div class="row">
        <?php
        if($_SERVER['REQUEST_METHOD']=="GET"){
          $baglanti=mysqli_connect("localhost","root","123","veritabani"); 
          if(!$baglanti){
          echo "Bağlanılamadı." .mysqli_connect_error();
          }
          else{
          echo "";
        $sql = "SELECT * FROM iletisim ORDER BY id DESC LIMIT 1";
        $kayit = mysqli_query($baglanti,$sql);

        if (mysqli_num_rows($kayit) > 0) {
        while($goster = mysqli_fetch_assoc($kayit)){
          $aciklama=$goster["aciklama"];
          $konum=$goster["konum"];
          $email=$goster["email"];
        } } } }
        ?>
          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Çağla Soysal</h3>
              <p> <?php echo "{$aciklama}"; ?></p>
              <div class="social-links">
                <a href="https://www.instagram.com/soysalcagla/" class="instagram"><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="icofont-google-map"></i>
                <p> <?php echo "{$konum}"; ?></p>
              </div>
              <div>
                <i class="icofont-envelope"></i>
                <p> <?php echo "{$email}"; ?></p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <form action="forms/mesaj.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="adSoyad" class="form-control" id="name" placeholder="Ad Soyad" data-rule="minlen:4" data-msg="En az 4 karakter olmalıdır." />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Email adresi girilmedir." />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="konu" id="subject" placeholder="Konu" data-rule="minlen:4" data-msg="En az 8 karakter olmalıdır." />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="mesaj" rows="5" data-rule="required" data-msg="Bir şeyler yazın." placeholder="Mesaj"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Gönderiliyor</div>
                <div class="error-message"></div>
                <div class="sent-message">Mesajınız gönderildi. En kısa zamanda geri dönüş yapılacaktır.</div>
              </div>
              <div class="text-center"><button type="submit">Gönder</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo date("Y");?></span></strong> TÜM HAKLARI SAKLIDIR
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
<?php

if($_SERVER['REQUEST_METHOD']=="GET"){
 $baglanti=mysqli_connect("localhost","root","123","veritabani"); 
 if(!$baglanti){
 echo "Bağlanılamadı." .mysqli_connect_error();
 }
 else{
$sql = "UPDATE ziyaret SET anasayfa=anasayfa+1 WHERE id = 1";
$kayit = mysqli_query($baglanti,$sql);
}}
?>
</html>