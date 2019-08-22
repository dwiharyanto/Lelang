<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lelangkah | Grafis</title>
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

                        <div class="product-area pt-40 pb-50">
                            <div class="container">
                                <div class="section-title-2 text-center">
                                    <h2>G R A F I S</h2>
                                    <img src="<?php echo base_url('themes/daxone/assets/images/icon-img/title-shape.png')?>" alt="icon-img">
                                </div>
<!-- PRODUK 1 -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="<?= base_url(); ?>Market/detailproduk"><img src="
                                        <?php echo base_url('themes/daxone/assets/images/product-details/pain.png')?>" style="width: 268px; height: 268px;"  alt="product"></a>
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
                                            <div data-countdown="2019/08/21"></div>
                                            <!-- COUNTDOWN MENGGUNAKAN TIMESTAMP -->
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- PRODUK 2 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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

<!-- PRODUK 9 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
<!-- PRODUK 10 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
<!-- PRODUK 11 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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

<!-- PRODUK 12 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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

<!-- PRODUK 13 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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
<!-- PRODUK 14 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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

<!-- PRODUK 15 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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

<!-- PRODUK 16 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 product-img-zoom mb-30 ">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="
                                            <?php echo base_url('themes/daxone/assets/images/product/footer2.png')?>"  style="width: 268px; height: 268px;" alt="product"></a>
                                        </div>
                                        <div class="product-content product-content-padding">
                                            <h4><a href="product-details.html">Product 2</a></h4>
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