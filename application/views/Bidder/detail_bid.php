<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lelangkah | Detail Produk</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('themes/daxone/assets/images/favicon.png')?>">

    <!-- CSS
       ============================================ -->

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/vendor/bootstrap.min.css')?>">
       <!-- Icon Font CSS -->
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/vendor/line-awesome.css')?>">
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/vendor/themify.css')?>">
       <!-- othres CSS -->
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/plugins/animate.css')?>">
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/plugins/owl-carousel.css')?>">
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/plugins/slick.css')?>">
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/plugins/magnific-popup.css')?>">
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/plugins/jquery-ui.css')?>">
       <link rel="stylesheet" href="<?php echo base_url('themes/daxone/assets/css/style.css')?>">

   </head>

    <body>
    <div class="main-wrapper">
        <header class="header-area header-padding-4">
            <div class="main-header-wrap">
                <div class="header-top pt-15 pb-15 bg-black-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="welcome">
                                    <p>Welcome to lelangkah</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="setting-wrap-2">
                                    <div class="setting-content2-left">
                                    </div>
                                    <div class="setting-content2-right">
                                        <a href="<?= base_url(); ?>Bidder">Akun</a>
                                        <a href="#" class="dropdown-toggle" id="notif" data-toggle="dropdown">Notification<span class="label label-pill label-danger" id="count"></span></a>
                                        <ul class="dropdown-menu"></ul>
                                        <a href="<?= base_url(); ?>Auth/logout">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle border-top-2 pt-30 pb-30 bg-black-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="<?php echo base_url('themes/daxone/assets/images/logo/logo.png')?>" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="header-contact-search-wrap">
                                    <div class="header-contact">
                                    </div>
                                    <div class="search-style-3">
                                        <form>
                                            <div class="form-search-3">
                                                <input id="search" class="input-text" value="" placeholder="Search Here" type="search">
                                                <button>
                                                    <i class="la la-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                   </div>
                                </div>
                            </div>
                        <div class="col-lg-1">
                                <div class="cart-wrap cart-wrap-3">
                                    <button class="cart-active">
                                        <i class="la la-tags"></i><span class="mini-cart-price-3"><?= $bidder['saldo']; ?></span> 
                                        
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="header-bottom sticky-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="main-menu menu-common-style menu-lh-4 menu-margin-5 menu-font-2">
                                <nav>
                                    <ul>
                                        <li class="angle-shape"><a href="<?= base_url(); ?>Market">H o m e</a>
                                        </li>

                                        <li class="angle-shape"><a href="<?= base_url(); ?>Market">K a t e g o r i</a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url(); ?>Market/kategorilukisan">L u k i s a n </a></li>
                                                <li><a href="<?= base_url(); ?>Market/kategorikriya">K r i y a (Kerajinan Tangan) </a></li>
                                                <li><a href="<?= base_url(); ?>Market/kategorigrafis">G r a f i s </a></li>
                                                <li><a href="<?= base_url(); ?>Market/kategoriukiran">U k i r a n </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url(); ?>Market/about">A b o u t</a></li>
                                        <li><a href="<?= base_url(); ?>Market/faq">F A Q</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


 <div class="my-account-wrapper pt-10 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#bidding" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                            Bidding</a>
                                        <a href="#produk" data-toggle="tab"><i class="fa fa-cloud-download"></i> Deskripsi Produk</a>
                                        <a href="#detail" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Detail Bidder</a>
                                        <a href="#profil" data-toggle="tab"><i class="fa fa-credit-card"></i> Profil Penjual</a> 
                                       <a href="#review" data-toggle="tab"><i class="fa fa-cloud-download"></i> Review</a>
                                    </div>
                                </div>

                                 <!-- My Account Tab Content Start -->
                                 <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="bidding" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Detail Produk</h3>

                                                <!------------------------------------------------------------------------------------>
                <!-- baris program dibawah ini untuk menampilkan flashdata pesan error-->
                <!------------------------------------------------------------------------------------>
                              <?php 
                                if(!empty(validation_errors()))
                                    {  ?>
                                        <div id ="pesan-error" class="alert alert-danger">    
                                        <?php echo validation_errors(); ?> </div>
                                    <?php } ?>
                <!------------------------------------------------------------------------------------>
                <!------------------------------------------------------------------------------------>
                <!------------------------------------------------------------------------------------>
<div class="product-details-area pt-10 pb-90">
            <div class="container">
                <div class="row">
                     <?php foreach($default->result() as $default){?>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-img-left">
                            <img class="zoompro" src="<?php echo base_url('assets/foto/'.$default->foto1)?>" style="width: 405px; height: 480px;" data-zoom-image="<?php echo base_url('assets/foto/'.$default->foto1)?>" alt="<?php echo base_url('assets/foto/'.$default->foto1)?>">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content pro-details-content-modify">
                            <h3><?php echo $default->namabrg;?></h3>
                            <div class="pro-details-price-wrap">
                                <div class="product-price">
                        <!------------------------------------------------------------------------------------>
                        <!----------Menampilkan hasil countdown----------------------------------------------->
                        <!------------------------------------------------------------------------------------>
                            <?php  $date= ($default->waktu_akhir) ?>
                            <div class="form-group">
                                <span><h3 for="name" id="countdown">countdown: </h3></span>
                                <span><h3 for="name" id="cd"></h3></span>
                            </div>
                            <!------------------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------------------>
                                    <span><h3>OB  : <?php echo $default->ob;?></h3></span>
                                    <span><h3>INC: <?php echo $default->inc;?></h3></span><br>
                                   <span><h3>CURRENT : <?php echo $default->crt;?></h3></span>



                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="<?php echo base_url();?>bid/add/ <?PHP ECHO $default->idlelang ?>" novalidate="novalidate" enctype="multipart/form-data">
                            
                <!------------------------------------------------------------------------------------>
                <!-- baris program dibawah ini untuk menampilkan flashdata pesan error-->
                <!------------------------------------------------------------------------------------>
                              <?php 
                                if(!empty(validation_errors()))
                                    {  ?>
                                        <div id ="pesan-error" class="alert alert-danger">    
                                        <?php echo validation_errors(); ?> </div>
                                    <?php } ?>
                <!------------------------------------------------------------------------------------>
                <!------------------------------------------------------------------------------------>
                <!------------------------------------------------------------------------------------>

                
                            <div class="form-group">
                                <input class="form-control"
                                 type="hidden" name="idlelang" value="<?php echo ($default->idlelang) ?>" />
                                <label for="name">Barang</label>
                                <input class="form-control"
                                 type="text" name="namabrg" disabled value="<?php echo ($default->namabrg) ?>" />
                            </div>
                            <div class="form-group">
                                <label for="name">Open Bidding</label>
                                <input class="form-control"
                                 type="text" name="ob" disabled value="<?php echo ($default->ob) ?>" />
                                 <input class="form-control"
                                 type="hidden" name="ob_update" value="<?php echo ($default->ob) ?>" />
                            </div>
                            <div class="form-group">
                                <label for="name">Inc</label>
                                <input class="form-control"
                                 type="text" name="inc" disabled value="<?php echo ($default->inc) ?>" />
                                 <input class="form-control"
                                 type="hidden" name="inc_update" value="<?php echo ($default->inc) ?>" />
                                 <input class="form-control"
                                 type="hidden" name="crt_update" value="<?php echo ($default->crt) ?>" />
                            </div>
                            <div class="form-group">
                                <label for="name">Current Bidding</label>
                                <input class="form-control"
                                 type="text" name="crt" disabled value="<?php 
                                 if (($default->crt) == 0) 
                                        { echo ("none");} 
                                 else echo ($default->crt); ?>" />
                            </div>
                            <div class="form-group">
                                <label for="name">Next Minimun Bidding</label>
                                <input class="form-control"
                                    <?php 
                                 if (($default->crt) == 0) 
                                        { $min= $default->ob+$default->inc;} 
                                 else   { $min= $default->crt+$default->inc;} ?>
                                 type="number" name="crt_next" disabled value="<?php echo ($min) ?>" />
                            </div>
                            <div class="form-group">
                                <label for="name">Inputkan Bidding</label>
                                <input class="form-control"
                                    <?php 
                                 if (($default->crt) == 0) 
                                        { $min= $default->ob+$default->inc;} 
                                 else   { $min= $default->crt+$default->inc;} ?>
                                 type="number" name="crt_new" placeholder="Bidding Amount" required="" value="<?php echo ($min) ?>" />
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Bidding" />
                        </form>

                                      <!-- <div class="timer timer-style-2">
                                                <div data-countdown="2020/01/01"></div>
                                       </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php } ?>
                </div>
            </div>
        </div>                                            </div>
    </div>

<!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="produk" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Review</h3>
                                                <div class="pro-details-buy-now btn-hover btn-hover-radious"><a href="#">Tambah Review</a></div>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>Komentar</th>
                                                                <th>Tanggal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Pratomo Ari</td>
                                                                <td>Barang nya bagus dapat dipercaya</td>
                                                                <td>Aug 14, 2019</td>
                                                            </tr>
                                                              <tr>
                                                                <td>Hafiz Fahri</td>
                                                                <td>Transaksi bisa dipercaya</td>
                                                                <td>Aug 14, 2019</td>
                                                            </tr>
                                                              <tr>
                                                                <td>Rizki Helvian</td>
                                                                <td>Respon penjual cepat dan bisa dipercaya</td>
                                                                <td>Aug 15, 2019</td>
                                                            </tr>
                                                              <tr>
                                                                <td>Galih Adam</td>
                                                                <td>Barang kualitas premium sesuai dengan harga</td>
                                                                <td>Aug 16, 2019</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="detail" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Deskripsi Produk</h3>
                                                <p class="saved-message"><h4>Lukisan Penari Bali menggunakan  cat warna canvas ukuran 135x85 cm dengan bingkai Lakewood </h4></p>
                                            </div>
                                        </div>

                                    <!-- My Account Tab Content Start -->
                                 <!-- My Account Tab Content Start -->
                                        <div class="tab-pane fade" id="profil" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Detail Bidders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>Bidder</th>
                                                                <th>Tawaran</th>
                                                                <th>Waktu</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Agus Mulyono</td>
                                                                <td>135.000</td>
                                                                <td>17:25:01</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Nur Hadi</td>
                                                                <td>155.000</td>
                                                                <td>10:35:31</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Bima Pradipta</td>
                                                                <td>184.000</td>
                                                                <td>00:13:06</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>M.Nasuha</td>
                                                                <td>200.000</td>
                                                                <td>00:00:18</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                      <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="review" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Profil Penjual</h3>
                                                
 <div class="col-lg-5 col-md-8 grid-item">
                             <a href=""><img src="
<?php echo base_url('themes/daxone/
assets/images/blog/pp1.png')?>" alt="blog"></a> 
                            </div>
                            <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="first-name" class="required">Nama Lengkap</label>
                                                                    <input type="text" id="first-name" value="Ahmad Fauzan" disabled />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Email</label>
                                                                    <input type="text" id="last-name " value="fauzanmadart@gmail.com" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Alamat</label>
                                                            <input type="text" id="display-name" value="Jalan Permata Komplek A6 Kota Cirebon" disabled />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">No Telepon</label>
                                                            <input type="email" id="email" value="6285864558002" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area bg-black-3 pt-100 section-padding-4">
            <div class="container-fluid">
                <div class="footer-top pb-60">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="footer-widget footer-contact-wrap-2 mb-40">
                                <a href="#"><img src="<?php echo base_url('themes/daxone/assets/images/logo/logo.png')?>" alt="logo"></a>
                                <div class="footer-contact-content-2">
                                    <h5>Contact Information:</h5>
                                    <div class="footer-info-hm5">
                                        <span>Phone</span>
                                        <p>+62 858 645 580 02</p>
                                    </div>
                                    <div class="footer-info-hm5">
                                        <span>Mail</span>
                                        <p><a href="#">lelangkah@gmail.com</a></p>
                                    </div>
                                    <div class="footer-social-hm5">
                                        <span>Follow US</span>
                                        <ul>
                                            <li><a href="#">Instagram | @lelangkah</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 col-sm-6">
                            <div class="footer-widget mb-40 ml-55 mrg-md-footer">
                                <div class="footer-title-4">
                                    <h3>Shop Info</h3>
                                </div>
                                 <div class="footer-widget mb-30">
                                <div class="footer-info-hm5">
                                    <p>Lelangkah adalah Marketplace sekaligus tempat untuk kolektor yang ingin mengikuti lelang barang seni dan mendapatkan barang yang diinginkan . </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                            <div class="footer-widget mb-40 ml-200">
                                <div class="footer-title-4">
                                    <h3>Company</h3>
                                </div>
                                <div class="footer-list-4">
                                    <ul>
                                        <li><a href="<?= base_url(); ?>Market/about">About</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                            <div class="footer-widget mb-30 ml-200">
                                <div class="footer-title-4">
                                    <h3>Help</h3>
                                </div>
                                <div class="footer-list-4">
                                    <ul>
                                        <li><a href="<?= base_url(); ?>Market/faq">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-20 pb-20 border-top-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="copyright-5">
                                <p>Copyright © <a href="#">Lelangkah</a>. Marketplace Lelang Barang Seni</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
     












<!-- JS

        ============================================ -->

        <!-- Modernizer JS -->
        <script src="<?php echo base_url('themes/daxone/assets/js/vendor/modernizr-3.6.0.min.js')?>"></script>
        <!-- Modernizer JS -->
        <script src="<?php echo base_url('themes/daxone/assets/js/vendor/jquery-3.3.1.min.js')?>"></script>
        <!-- Popper JS -->
        <script src="<?php echo base_url('themes/daxone/assets/js/vendor/popper.js')?>"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo base_url('themes/daxone/assets/js/vendor/bootstrap.min.js')?>"></script>

        <!-- Slick Slider JS -->
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/countdown.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/counterup.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/images-loaded.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/isotope.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/instafeed.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/jquery-ui.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/jquery-ui-touch-punch.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/magnific-popup.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/owl-carousel.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/scrollup.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/waypoints.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/slick.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/wow.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/textillate.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/elevatezoom.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/sticky-sidebar.js')?>"></script>
        <script src="<?php echo base_url('themes/daxone/assets/js/plugins/smoothscroll.js')?>"></script>
        <!-- Main JS -->
        <script src="<?php echo base_url('themes/daxone/assets/js/main.js')?>"></script>

        <!------------------------------------------------------------------------------------>
<!--------Javascript untuk memproses countdown---------------------------------------->
<!------------------------------------------------------------------------------------>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $date ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("cd").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("cd").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<!------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------>
    </body>

    </html>