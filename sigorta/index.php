<?php
$conn = new PDO("mysql:host=localhost;dbname=sigorta;charset=utf8", "root", "");




?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- Site Metas -->
<title>KUZUSİGORTA</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>
<!-- [if lt IE 9] -->
</head>

<body class="clinic_version">

   <!-- END LOADER -->
   <header>
      <div class="header-top wow fadeIn">
         <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="image"></a>
            <div class="right-header">
               <div class="header-info">
                  <div class="info-inner">
                     <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                     <span class="iconcont"><a href="tel:800 123 456">230 66 66</a></span>
                  </div>
                  <div class="info-inner">
                     <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                     <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@kuzusigorta.com</a></span>
                  </div>
                 
               </div>
            </div>
         </div>
      </div>
      <div class="header-bottom wow fadeIn">
         <div class="container">
            <nav class="main-menu">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
               </div>

               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                     <li><a class="active" href="index.php">Anasayfa</a></li>
                     <li><a data-scroll href="#about">Hakkımızda</a></li>
                     <li><a data-scroll href="#doctors">Çalışanlar</a></li>
                     <li><a data-scroll href="#getintouch">İletişim</a></li>
                  </ul>
               </div>
            </nav>
            <div class="serch-bar">
               <div id="custom-search-input">
                  <div class="input-group col-md-12">
                     <input type="text" class="form-control input-lg" placeholder="Ara" />
                     <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                           <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <div class="text-contant">
                  <h2>
                     <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
                     <a href="" class="typewrite" data-period="2000" data-type='[ "Dünden Bugüne", "Sağlam Sigorta", "GÜVEN İÇİNDE!" ]'>
                        <span class="wrap"></span>
                     </a>
                  </h2>
               </div>
            </div>
         </div>
         <!-- end row -->
      </div>
      <!-- end container -->
   </div>
   <!-- end section -->
   <div id="time-table" class="time-table-section">
      <div class="container">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
               <div class="service-time one" style="background:#2895f1;">
                  <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                  <h3>KAMPANYALAR</h3>
                  <p>KUZUS.net'te kaçırılmayacak 450 TL indirim Türk Telekom müşterilerini bekliyor!</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
               <div class="service-time middle" style="background:#0071d1;">
                  <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                  <h3>Çalışma Saatlerimiz</h3>
                  <div class="time-table-section">
                     <ul>
                        <li><span class="left">Pazartesi-Cuma</span><span class="right">8.00 – 18.00</span></li>
                        <li><span class="left">Cumartesi</span><span class="right">8.00 – 16.00</span></li>
                        <li><span class="left">Pazar</span><span class="right">8.00 – 13.00</span></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
               <div class="service-time three" style="background:#0060b1;">
                  <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                  <h3>HASAR DESTEK</h3>
                  <p>Hasar anında 7/24 hizmete 3 saniyede ulaşabilirsin.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="about" class="section wow fadeIn">
      <div class="container">
         <div class="heading">
            <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
            <h2>KUZUSİGORTA</h2>
         </div>
         <!-- end title -->
         <div class="row">
            <div class="col-md-6">
               <div class="message-box">
                  <h4>Neler Yapıyoruz?</h4>
                  <h2>Sigorta Nedir, Ne İşe Yarar? Sigorta Çeşitleri Nelerdir?</h2>
                  <p class="lead">Sigorta, risklere karşı güvence sağlayan ve hayatı kolaylaştıran bir konudur. </p>
                  <p> “Sigorta nedir?” sorusunu daha teknik şekilde tanımlayacak olursak: Sigorta, aynı türden riskle karşı karşıya olan kişilerin belirli bir miktar para ödeyerek oluşturdukları prim havuzudur. O riskin gerçekleşmesi sonucu zarara uğrayanların zararı bu ortak havuzdan karşılanır. </p>
                  
               </div>
               <!-- end messagebox -->
            </div>
            <!-- end col -->
            <div class="col-md-6">
               <div class="post-media wow fadeIn">
                  <img src="images/about_03.jpg" alt="" class="img-responsive">
                  <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
               </div>
               <!-- end media -->
            </div>
            <!-- end col -->
         </div>
         <!-- end row -->
         <hr class="hr1">
         <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="service-widget">
                  <div class="post-media wow fadeIn">
                     <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                     <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                  </div>
                  <h3>KASKO SİGORTASI</h3>
               </div>
               <!-- end service -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="service-widget">
                  <div class="post-media wow fadeIn">
                     <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                     <img src="images/clinic_02.jpg" alt="" class="img-responsive">
                  </div>
                  <h3>TRAFİK SİGORTASI</h3>
               </div>
               <!-- end service -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="service-widget">
                  <div class="post-media wow fadeIn">
                     <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                     <img src="images/clinic_03.jpg" alt="" class="img-responsive">
                  </div>
                  <h3>TAMAMLAYICI SAĞLIK</h3>
               </div>
               <!-- end service -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="service-widget">
                  <div class="post-media wow fadeIn">
                     <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                     <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                  </div>
                  <h3>KONUT SİGORTASI</h3>
               </div>
               <!-- end service -->
            </div>
         </div>
         <!-- end row -->
      </div>
      <!-- end container -->
   </div>


   <!-- doctor -->

   <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
      <div class="container">

         <div class="heading">
            
            <h2>KADRO</h2>
         </div>

         <div class="row dev-list text-center">
            

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
               <div class="widget clearfix">
                  <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                     
                     <h3><?php 

                        $sql = "SELECT * FROM calisanlar";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                     
                        echo $result[0]['ad'];
                     
                     ?></h3>
                  </div>
                  <!-- end title -->
                  <p><?php echo $result[0]['aciklama'];?></p>

                  <div class="footer-social">
                     <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
               </div>
               <!--widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
               <div class="widget clearfix">
                  <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                     <h3><?php echo $result[1]['ad'];?></h3>
                  </div>
                  <!-- end title -->
                  <p><?php echo $result[0]['aciklama'];?></p>

                  <div class="footer-social">
                     <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
               </div>
               <!--widget -->
            </div><!-- end col -->


            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
               <div class="widget clearfix">
                  <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                     <h3><?php echo $result[0]['ad'];?></h3>
                  </div>
                  <!-- end title -->
                  <p><?php echo $result[0]['aciklama'];?></p>

                  <div class="footer-social">
                     <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
               </div>
               <!--widget -->
            </div><!-- end col -->

         </div><!-- end row -->
      </div><!-- end container -->
   </div>




   <!-- end section -->
   <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
      <div class="container">
         
      </div>
      <div class="contact-section">
         <div class="form-contant">
            <form id="ajax-contact" action="" method="post">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group in_email">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required="required">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group in_email">
                        <input type="text" name="subject" class="form-control" id="Konu" placeholder="Konu" required="required">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group in_message">
                        <textarea class="form-control" name="icerik" id="İleti" rows="5" placeholder="İleti" required="required"></textarea>
                     </div>
                     <div class="actions">
                        <input type="submit" value="Mesaj Gönder" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                     </div>
                  </div>
               </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
               $email = $_POST['email'];
               $subject = $_POST['subject'];
               $icerik = $_POST['icerik'];

               $conn->prepare("INSERT INTO `iletisim`(`mail`,`baslik`,`icerik`) VALUES (?,?,?)")->execute([$email, $subject, $icerik]);
            }





            ?>

         </div>
      </div>
   </div>
   <footer id="footer" class="footer-area wow fadeIn">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="logo padding">
                  <a href=""><img src="images/logo.png" alt=""></a>
                  <p>Bizi tercih ettiğiniz için teşekkürler.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="footer-info padding">
                  <h3>Bize Ulaşın</h3>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bursa/Osmangazi</p>
                  <p><i class="fa fa-paper-plane" aria-hidden="true"></i> kuzusigorta@gmail.com</p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i> (+90) 555 44 44</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="subcriber-info">
                  <h3>KULLANICI</h3>
                  <p>Uzmanlarımızdan gelişmiş haberler için bildirimleri açın.</p>
                  <div class="subcriber-box">
                     <form id="mc-form" class="mc-form">
                        <div class="newsletter-form">
                           <input type="email" autocomplete="off" id="mc-email" placeholder="E-mail" class="form-control" name="EMAIL">
                           <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                           <div class="clearfix"></div>
                           <!-- mailchimp-alerts Start -->
                           <div class="mailchimp-alerts">
                              <div class="mailchimp-submitting"></div>
                              <!-- mailchimp-submitting end -->
                              <div class="mailchimp-success"></div>
                              <!-- mailchimp-success end -->
                              <div class="mailchimp-error"></div>
                              <!-- mailchimp-error end -->
                           </div>
                           <!-- mailchimp-alerts end -->
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <div class="copyright-area wow fadeIn">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="footer-text">
                  <p>KUZUSİGORTA</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="social">
                  <ul class="social-links">
                     <li><a href=""><i class="fa fa-rss"></i></a></li>
                     <li><a href=""><i class="fa fa-facebook"></i></a></li>
                     <li><a href=""><i class="fa fa-twitter"></i></a></li>
                     <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end copyrights -->
   <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
   <!-- all js files -->
   <script src="js/all.js"></script>
   <!-- all plugins -->
   <script src="js/custom.js"></script>
   <!-- map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
</body>

</html>