<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lelangkah | FAQ </title>
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
                                        <a href="<?= base_url(); ?>Auth/registerbidder">Register</a>
                                        <a href="<?= base_url(); ?>Auth">Sign in</a>
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
                                    <a href="<?= base_url(); ?>Market"><img src="<?php echo base_url('themes/daxone/assets/images/logo/logo.png')?>" alt="logo"></a>
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
                                                <li><a href="<?= base_url(); ?>Market/kategorikriya">K r i y a </a></li>
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
                                <div class="col-lg-2 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#registrasi" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                            Cara Registrasi</a>
                                        <a href="#menjadipenjual" data-toggle="tab"><i class="fa fa-cloud-download"></i> Menjadi Penjual</a>
                                        <a href="#carabid" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Cara Bid</a>
                                        <a href="#belisaldo" data-toggle="tab"><i class="fa fa-credit-card"></i> Beli Saldo</a> 
                                       <a href="#pelanggaran" data-toggle="tab"><i class="fa fa-cloud-download"></i> Pelanggaran</a>
                                       <a href="#pengaduan" data-toggle="tab"><i class="fa fa-cloud-download"></i> Pengaduan</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-10 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="registrasi" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Cara Registrasi</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>USER</th>
                                                                <th>HOW ?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>1</b></td>
                                                                <td><b>PENJUAL</b></td>
                                                                <td><b>Registrasi Diri Anda Ke -> <a href="<?= base_url(); ?>Auth/registerpenjual"><u>Disini</u>,</a> <b>Isi Form Dengan Benar Untuk<br> Informasi Pelelangan<b></td>
                                                            </tr>
                                                              <tr>
                                                                <td><b>2</b></td>
                                                                <td><b>BIDDER</b></td>
                                                                <td><b>Registrasi Diri Anda Ke -> <a href="<?= base_url(); ?>Auth/registerbidder"><u>Disini</u>,</a> <b>Isi Form Dengan Benar Untuk<br> Mengikuti Pelelangan<b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                      <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade " id="menjadipenjual" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Cara Menjadi Penjual</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>HOW ?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>1</b></td>
                                                                <td><b>Bagi kamu yang ingin berjualan di lelangkah sangat mudah dan gratis khusus untuk seniman sinau art kalian bisa memposting karya<br> kreativitas nya berupa barang seni spserti Lukisan, Kriya, Grafis serta Ukiran</td>
                                                            </tr>
                                                              <tr>
                                                                <td><b>2</b></td>
                                                                <td><b>Kewajiban bagi kamu untuk mengisi form yang tersedia pada menu Post Produk agar kegiatan lelang serta penjualan produk jelas dan<br> data nya tidak di hapus oleh admin dengan mengisi Form Nama Barang, Harga, Foto dll</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade " id="carabid" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Cara Bidding</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>HOW ?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>1</b></td>
                                                                <td><b>Batas Bid 3x untuk 1 produk</td>
                                                            </tr>
                                                              <tr>
                                                                <td><b>2</b></td>
                                                                <td><b>1x Bid kepotong 3 saldo (Pastikan anda mempunyai saldo yang cukup)</td>
                                                            </tr>
                                                             <tr>
                                                                <td><b>3</b></td>
                                                                <td><b>Bid tidak boleh kurang dari harga penawar sebelumnya (CURRENT)</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>4</b></td>
                                                                <td><b>Bid tidak boleh kurang dari harga awal (OB) yang ditetukan penjual</td>
                                                            </tr>
                                                             <tr>
                                                                <td><b>5</b></td>
                                                                <td><b>Bid tidak boleh kurang dari kelipatan harga (INC) yang ditetukan penjual</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                         <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade " id="belisaldo" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Cara Bidding</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>HOW ?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>1</b></td>
                                                                <td><b>Untuk melakukan bid kamu harus mempunyai minimal 3 point untuk satu kali bid</td>
                                                            </tr>
                                                              <tr>
                                                                <td><b>2</b></td>
                                                                <td><b>Harga Saldo yang dijual sangat murah dengan memilih saldo yang ingin dibeli serta mengupload bukti transfer nya</td>
                                                            </tr>
                                                             <tr>
                                                                <td><b>3</b></td>
                                                                <td><b>Untuk kamu yang mau membeli saldo bisa diharpkan login terlebih dahulu </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>4</b></td>
                                                                <td><b>Untuk kamu yang mau membeli saldo bisa diharpkan login terlebih dahulu -> <a href="<?= base_url(); ?>Auth"><u>Disini</u></a> <b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>



                                         <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade " id="pelanggaran" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Pelanggran</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>USER</th>
                                                                <th>HOW ?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>1</b></td>
                                                                <td><b>PENJUAL</b></td>
                                                                <td><b>Untuk penjual yang mempunyai akun Bot harus admin dapat menghapus data tersebut, Untuk penjual Memposting diluar<br> ketentuan serta data produk yang dimasukkan tidak valid maka admin dapat menghapus data tersebut</td>
                                                            </tr>
                                                              <tr>
                                                                <td><b>2</b></td>
                                                                  <td><b>BIDDER</b></td>
                                                                <td><b>Untuk penjual yang mempunyai akun Bot harus admin dapat menghapus data tersebut, Untuk bidder yang menawar<br> dengan harga yang tidak masuk akal serta bid and run maka admin dapat menghapus data tersebut sesuai laporan dari<br> pengguna lain </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="pengaduan" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Pengaduan</h3>
                                                <address>
                                                    <p><strong>LELANGKAH MARKETPLACE</strong></p>
                                                    <p>Lelangkah@gmail.com<br>
                                                   Cirebon, 45142</p>
                                                        <p>Mobile: (62) 858-645-580-02</p>
                                                </address>
                                            <p><strong>*Sertakan Bukti Screenshot Jika Ada Pelanggaran Serta Penipuan</strong></p>
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
                                        <li><a href="<?= base_url(); ?>Auth">Login</a></li>
                                        <li><a href="<?= base_url(); ?>Auth/Registerbidder">Register</a></li>
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
    </body>

    </html>