<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lelangkah</title>
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
    <div class="slider-area pt-20">
        <div class="container">
            <div class="slider-active-4 owl-carousel dot-style-2">
               <div class="slider-height-8 bg-img res-white-overly-xs" style="background-image:url(<?php echo base_url('themes/daxone/assets/images/slider/ban1.png')?>">
                <div class="row align-items-center">
                    <div class="ml-auto col-lg-9 col-md-12 col-12 col-sm-12">
                        <div class="slider-content-8 slider-animated-1">
                           <!--  <h1 class="animated">Solo Music xx1</h1>
                            <p color:#000000 class="animated">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p> -->
                            <!-- <div class="slider-btn-8 default-btn btn-hover hover-border-none">
                                <a class="animated black-color" href="product-details.html">SHOP NOW</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-active-4 owl-carousel dot-style-2">
               <div class="slider-height-8 bg-img res-white-overly-xs" style="background-image:url(<?php echo base_url('themes/daxone/assets/images/slider/ban2.png')?>">
                <div class="row align-items-center">
                    <div class="ml-auto col-lg-9 col-md-12 col-12 col-sm-12">
                        <div class="slider-content-8 slider-animated-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="slider-active-4 owl-carousel dot-style-2">
               <div class="slider-height-8 bg-img res-white-overly-xs" style="background-image:url(<?php echo base_url('themes/daxone/assets/images/slider/ban3.png')?>">
                <div class="row align-items-center">
                    <div class="ml-auto col-lg-9 col-md-12 col-12 col-sm-12">
                        <div class="slider-content-8 slider-animated-1">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
              <!--   </div>
            </div>
        </div> -->
        <hr>


        <div class="feature-area pt-110 pb-110 section-padding-3">
            <div class="container-fluid">
                <div class="feature-border">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-1">
                             <center> <img src="<?php echo base_url('themes/daxone/assets/images/icon-img/star.png')?>" alt=""> </center>
                             <center><h5>Best Product</h5>
                                <span>Produk Yang Tersedia Dengan Kualitas Terbaik</span> </center>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-2">
                               <center> <img src="<?php echo base_url('themes/daxone/assets/images/icon-img/one.png')?>" alt=""> </center>
                               <center><h5>Winner Bidding</h5>
                                <span>Pemenang Bidding Dengan Penawaran Tertinggi</span> </center>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-3">
                               <center> <img src="<?php echo base_url('themes/daxone/assets/images/icon-img/time.png')?>" alt=""> </center>
                               <center><h5>Bidding Time</h5>
                                <span>Kegiatan Lelang 24 Jam Non-Stop</span> </center>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-4">
                               <center> <img src="<?php echo base_url('themes/daxone/assets/images/icon-img/logo10.png')?>" alt=""> </center>
                               <center><h5>Access Lelangkah</h5>
                                <span>Akses Lelangkah Dengan PC Anda</span> </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="category-area section-padding-2">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="category-wrap default-overlay">
                            <a href="<?= base_url(); ?>Market/kategorilukisan"><img src="
                                <?php echo base_url('themes/daxone/assets/images/banner/paint1.png')?>" alt="category"></a>
                                <div class="category-content">
                                    <img src="<?php echo base_url('themes/daxone/assets/images/icon-img/paint.png')?>" alt="icon">
                                    <h3>S e n i <br>L u k i s a n</h3>
                                </div>
                                <div class="category-icon">
                                    <a href="<?= base_url(); ?>Market/kategorilukisan">
                                        <img class="category-normal-icon" src="
                                        <?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-1.png')?>" alt="icon">
                                        <img class="category-hover-icon" src="<?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-2.png')?>" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="category-wrap default-overlay">
                                <a href="<?= base_url(); ?>Market/kategorikriya"><img src="
                                    <?php echo base_url('themes/daxone/assets/images/banner/kriya1.png')?>" alt="category"></a>
                                    <div class="category-content">
                                        <img src="
                                        <?php echo base_url('themes/daxone/assets/images/icon-img/kriya.png')?>" alt="icon">
                                        <h3>S e n i <br>K r i y a</h3>
                                    </div>
                                    <div class="category-icon">
                                        <a href="<?= base_url(); ?>Market/kategorikriya">
                                            <img class="category-normal-icon" src="
                                            <?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-1.png')?>" alt="icon">
                                            <img class="category-hover-icon" src="
                                            <?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-2.png')?>" alt="icon">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="category-wrap default-overlay">
                                    <a href="<?= base_url(); ?>Market/kategorigrafis"><img src="
                                        <?php echo base_url('themes/daxone/assets/images/banner/grafis1.png')?>" alt="category"></a>
                                        <div class="category-content">
                                            <img src="
                                            <?php echo base_url('themes/daxone/assets/images/icon-img/grafis.png')?>" alt="icon">
                                            <h3>S e n i <br>G r a f i s</h3>
                                        </div>
                                        <div class="category-icon">
                                            <a href="<?= base_url(); ?>Market/kategorigrafis">
                                                <img class="category-normal-icon" src="
                                                <?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-1.png')?>" alt="icon">
                                                <img class="category-hover-icon" src="
                                                <?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-2.png')?>" alt="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="category-wrap default-overlay">
                                        <a href="<?= base_url(); ?>Market/kategoriukiran"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/banner/ukiran1.png')?>" alt="category"></a>
                                            <div class="category-content">
                                                <img src="
                                                <?php echo base_url('themes/daxone/assets/images/icon-img/ukiran.png')?>" alt="icon">
                                                <h3>S e n i <br>U k i r a n</h3>
                                            </div>
                                            <div class="category-icon">
                                                <a href="<?= base_url(); ?>Market/kategoriukiran">
                                                    <img class="category-normal-icon" src="
                                                    <?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-1.png')?>" alt="icon">
                                                    <img class="category-hover-icon" src="
                                                    <?php echo base_url('themes/daxone/assets/images/icon-img/cate-send-2.png')?>" alt="icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-area pt-80 pb-50">
                            <div class="container">
                                <div class="section-title-2 text-center">
                                    <h2>All Products</h2>
                                    <img src="<?php echo base_url('themes/daxone/assets/images/icon-img/title-shape.png')?>" alt="icon-img">
                                </div>
<!-- PRODUK 1 -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="<?= base_url(); ?>Market/detailproduk"><img src="
                                        <?php echo base_url('themes/daxone/assets/images/product-details/pain.png')?>" alt="product"></a>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="<?= base_url(); ?>Market/detailproduk">Lukisan Penari Bali.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>Current: 250.000</span>
                                            </div>
                                            <span>OB: 120.000</span>
                                        </div>
                                        <div class="timer timer-style-2">
                                            <div data-countdown="2020/01/01"></div>
                                            <!-- COUNTDOWN MENGGUNAKAN TIMESTAMP -->
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- PRODUK 2 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                            <div class="price-addtocart">
                                               <div class="product-price">
                                                <span>Current: $210.00</span>
                                            </div>
                                            <span>OB: $230.00</span>
                                        </div>
                                            <div class="timer timer-style-2">
                                                <div data-countdown="2020/01/01"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!-- PRODUK 3 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="
                                        <?php echo base_url('themes/daxone/assets/images/product/pro-hm5-1.jpg')?>" alt="product"></a>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>Current: $210.00</span>
                                            </div>
                                            <span>OB: $230.00</span>
                                        </div>
                                        <div class="timer timer-style-2">
                                            <div data-countdown="2020/01/01"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
 <!-- PRODUK 4 -->
                       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                            <div class="product-img">
                                <a href="product-details.html"><img src="
                                    <?php echo base_url('themes/daxone/assets/images/product/pro-hm5-1.jpg')?>" alt="product"></a>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                                <span>Current: $210.00</span>
                                            </div>
                                            <span>OB: $230.00</span>
                                        </div>
                                    <div class="timer timer-style-2">
                                        <div data-countdown="2020/01/01"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- PRODUK 5 -->
                       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                            <div class="product-img">
                                <a href="product-details.html"><img src="
                                    <?php echo base_url('themes/daxone/assets/images/product/pro-hm5-1.jpg')?>" alt="product"></a>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                                <span>Current: $210.00</span>
                                            </div>
                                            <span>OB: $230.00</span>
                                        </div>
                                    <div class="timer timer-style-2">
                                        <div data-countdown="2020/01/01"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

 <!-- PRODUK 6 -->
                       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                            <div class="product-img">
                                <a href="product-details.html"><img src="
                                    <?php echo base_url('themes/daxone/assets/images/product/pro-hm5-1.jpg')?>" alt="product"></a>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                                <span>Current: $210.00</span>
                                            </div>
                                            <span>OB: $230.00</span>
                                        </div>
                                    <div class="timer timer-style-2">
                                        <div data-countdown="2020/01/01"></div>
                                    </div>
                                </div>
                            </div>            
                        </div>

<!-- PRODUK 7 -->
                       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                            <div class="product-img">
                                <a href="product-details.html"><img src="
                                    <?php echo base_url('themes/daxone/assets/images/product/pro-hm5-1.jpg')?>" alt="product"></a>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                                <span>Current: $210.00</span>
                                            </div>
                                            <span>OB: $230.00</span>
                                        </div>
                                    <div class="timer timer-style-2">
                                        <div data-countdown="2020/01/01"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        


<!-- PRODUK 8 -->
                       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                            <div class="product-img">
                                <a href="product-details.html"><img src="
                                    <?php echo base_url('themes/daxone/assets/images/product/pro-hm5-1.jpg')?>" alt="product"></a>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                                <span>Current: $210.00</span>
                                            </div>
                                            <span>OB: $230.00</span>
                                        </div>
                                    <div class="timer timer-style-2">
                                        <div data-countdown="2020/01/01"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url(); ?>Market/indexall" class="btn btn-info btn-block ">
                              <i class="fa fa-user fa-fw"></i> Other</a>  
                          </div>



            <div class="blog-area pt-90 pb-50">
                <div class="container">
                    <div class="section-title-6 mb-50 text-center">
                        <h2>Beli Saldo</h2>
                        <h4><b>Ayo! Beli Saldo Untuk  Memulai  Bidding </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-wrap mb-30">
                                <div class="blog-img mb-20">
                                    <a href="#"><img src="<?php echo base_url('themes/daxone/assets/images/blog/coin1.png')?>" alt="blog"></a>
                                </div>
                                <div class="blog-content blog-border">
                                    <h3><a href="#"><h3>10 POINT | RP. 3.000,00</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-wrap mb-30">
                                <div class="blog-img mb-20">
                                    <a href="#"><img src="<?php echo base_url('themes/daxone/assets/images/blog/coin2.png')?>" alt="blog"></a>
                                </div>
                                <div class="blog-content blog-border">
                                    <h3><a href="#"><h3>17 POINT | RP. 5.000,00</a></h3>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-20">
                                <a href="#"><img src="<?php echo base_url('themes/daxone/assets/images/blog/coin3.png')?>" alt="blog"></a>
                            </div>
                            <div class="blog-content blog-border">
                                <h3><a href="#"><h3>30 POINT | RP. 10.000,00</a></h3>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-20">
                                <a href="#"><img src="<?php echo base_url('themes/daxone/assets/images/blog/coin4.png')?>" alt="blog"></a>
                            </div>
                            <div class="blog-content blog-border">
                                <h3><a href="#"><h3>50 POINT | RP. 20.000,00</a></h3>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-20">
                                <a href="#"><img src="<?php echo base_url('themes/daxone/assets/images/blog/coin5.png')?>" alt="blog"></a>
                            </div>
                            <div class="blog-content blog-border">
                                <h3><a href="#"><h3>100 POINT | RP. 45.000,00</a></h3>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-20">
                                <a href="#"><img src="<?php echo base_url('themes/daxone/assets/images/blog/coin6.png')?>" alt="blog"></a>
                            </div>
                            <div class="blog-content blog-border">
                                <h3><a href="#"><h3>299 POINT | RP. 100.000,00</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="checkout-main-area pt-9 pb-90">
            <div class="container">
                <div class="customer-zone mb-20">
                    <p class="cart-page-title">Ingin Beli Saldo? <a class="checkout-click1" href="#">Klik disini untuk beli</a></p>
                    <div class="checkout-login-info">
                        <p>Pembelian dapat menggunakan GOPAY dan Rekening Bank BNI.</p>
                      <!--   <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="<?php echo base_url();?>Admin/belisaldo" novalidate="novalidate">  -->
                           
                            <?php
                            echo form_open_multipart('Admin/belisaldo');
                            ?>
                            <input type="hidden" name="idbidder" value="<?php echo $this->session->userdata('idbidder');?>">
                            <div class="row">
                                  <div class="col-lg-6 col-md-6">
                                        <div class="billing-select mb-20">
                                            <label>Jumlah Saldo Yang Dibeli<abbr class="required" title="required">*</abbr></label>
                                            <select name="saldo" class="form-control">
                                               <option label="Pilih Saldo"></option>
                                               <option value="10">10 POINT - RP. 3.000,00</option>
                                               <option value="17">17 POINT - RP. 5.000,00</option>
                                               <option value="30">30 POINT - RP. 10.000,00</option>
                                               <option value="50">50 POINT - RP. 20.000,00</option>
                                               <option value="100">100 POINT - RP. 45.000,00</option>
                                               <option value="250">250 POINT - RP. 100.000,00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label>Upload Bukti Transfer <span>*</span></label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="fototransfer" name="fototransfer">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                  </div>
                             <div class="button-remember-wrap">
                                <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-info" type="submit">Submit</button>
                                   <?php echo form_close(); ?>
                            </div>
                        </div>
                         <div class="banner-area pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner-wrap mb-30 res-white-overly-xs">
                            <a href="product-details.html">
                                <img src="<?php echo base_url('themes/daxone/assets/images/banner/scan1.png')?>" alt="banner">
                            </a>
                            <div class="banner-content-16">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner-wrap mb-30 res-white-overly-xs">
                            <a href="product-details.html">
                                <img src="<?php echo base_url('themes/daxone/assets/images/banner/scan2.png')?>" alt="banner">
                            </a>
                            <div class="banner-content-16">
                            </div>
                        </div>
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
    </body>

    </html>