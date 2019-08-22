<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url('themes/latihan/images/favicon.png')?>">

    <title>Lelangkah | Penjual </title>

    <!-- Base Css Files -->
    <link href="<?php echo base_url('themes/latihan/css/bootstrap.min.css')?>" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="<?php echo base_url('themes/latihan/assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('themes/latihan/assets/ionicon/css/ionicons.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('themes/latihan/css/material-design-iconic-font.min.css')?>" rel="stylesheet">

    <!-- animate css -->
    <link href="<?php echo base_url('themes/latihan/css/animate.css')?>" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="<?php echo base_url('themes/latihan/css/waves-effect.css')?>" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="<?php echo base_url('themes/latihan/assets/sweet-alert/sweet-alert.min.css')?>" rel="stylesheet">

    <!-- Custom Files -->
    <link href="<?php echo base_url('themes/latihan/css/helper.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('themes/latihan/css/style.css')?>" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url('themes/latihan/js/modernizr.min.js')?>"></script>

</head>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="<?= base_url(); ?>Penjual/mainpenjual" class="logo"><i class="fa fa-gavel"></i> <span>Lelangkah </span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown hidden-xs">     
                               <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('assets/foto/'.$this->session->userdata('fotoprofil'))?>" alt="user-img" class="img-circle"> </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            $namapenjual=$this->session->userdata('namapenjual'); 
            ?>
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo base_url('assets/foto/'.$this->session->userdata('fotoprofil'))?>" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                             <a href="<?php echo base_url('Penjual')?>" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?= $namapenjual; ?><span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                <li><a href="<?= base_url(); ?>Auth/logout"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
                        </div>
                        <p class="text-muted m-0">Penjual</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                       <li>
                        <a href="<?= base_url(); ?>Penjual" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>Penjual" class="waves-effect"><i class="fa fa-users"></i><span> Post Produk </span></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>Penjual/pesan" class="waves-effect"><i class=" md-my-library-add"></i><span> Pesan </span></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">

     <div class="content-page">
        <!-- Start content -->

        <div class="content">
            <div class="container">

                                    <br>
                                    <div class="content">
                                        <div class="container">

                                            <div class="panel">

                                                <div class="panel-body">
                                                     <a class="btn btn-primary" href="<?= base_url(); ?>Penjual/postproduk" role="button">Back</a>
                                        <?php if($detailpost->row_array()['pemenang']==$this->session->idbidder){ ?>
  <a class="btn btn-primary" href="<?= base_url(); ?>Penjual/detailpesan" role="button" style="float: right">Pesan</a>
                                       <?php }
                                        ?>


                                                     
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="m-b-30">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="table table-bordered table-striped" id="datatables">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Penawaran</th>
                                                                <th>Waktu</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php

                                                          foreach($detailpost->result() as $i => $d){
                                                              ?>
                                                              <tr>
                                                                <td><?php echo $i+1; ?></td>
                                                                <td><?php echo $d->namabidder; ?></td>
                                                                <td><?php echo $d->tawaran; ?></td>
                                                                <td><?php echo $d->waktu; ?></td>
                                                                <!-- ?<td class="actions">
                                                                    <a href="<?php echo base_url('Penjual/detailpesan/'.$d->idlelang);?>"><i class="fa fa-envelope"> Kirim Pesan</i></a>  -->
                                                                    
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- /Right-bar -->

                                </div>
                                <!-- END wrapper -->



                                <script>
                                    var resizefunc = [];
                                </script>

                                <!-- jQuery  -->
                                <script src="<?php echo base_url('themes/latihan/js/jquery.min.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/js/bootstrap.min.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/js/waves.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/js/wow.min.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
                                <script src="<?php echo base_url('themes/latihan/js/jquery.scrollTo.min.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/chat/moment-2.2.1.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/jquery-sparkline/jquery.sparkline.min.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/jquery-detectmobile/detect.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/fastclick/fastclick.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/jquery-slimscroll/jquery.slimscroll.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/jquery-blockui/jquery.blockUI.js')?>"></script>

                                <!-- sweet alerts -->
                                <script src="assets/sweet-alert/sweet-alert.min.js"></script>
                                <script src="assets/sweet-alert/sweet-alert.init.js"></script>

                                <!-- flot Chart -->
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.time.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.tooltip.min.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.resize.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.pie.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.selection.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.stack.js')?>"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/flot-chart/jquery.flot.crosshair.js')?>"></script>

                                <!-- Counter-up -->
                                <script src="<?php echo base_url('themes/latihan/assets/counterup/waypoints.min.js')?>" type="text/javascript"></script>
                                <script src="<?php echo base_url('themes/latihan/assets/counterup/jquery.counterup.min.js')?>" type="text/javascript"></script>

                                <!-- CUSTOM JS -->
                                <script src="<?php echo base_url('themes/latihan/js/jquery.app.js')?>"></script>

                                <!-- Dashboard -->
                                <script src="<?php echo base_url('themes/latihan/js/jquery.dashboard.js')?>"></script>

                                <!-- Chat -->
                                <script src="<?php echo base_url('themes/latihan/js/jquery.chat.js')?>"></script>

                                <!-- Todo -->
                                <script src="<?php echo base_url('themes/latihan/js/jquery.todo.js')?>"></script>

                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('#datatables').DataTable();
                                    });
                                </script>


                                <script src="<?php echo base_url('themes/latihan/assets/dataTables/datatables.min.js')?>"></script>
                            </body>
                            </html>

                            <?php

                            ?>