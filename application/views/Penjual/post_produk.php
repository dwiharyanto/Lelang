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


                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Form Post Produk</h3></div>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="<?php echo base_url();?>Penjual/addbarang" novalidate="novalidate" enctype="multipart/form-data">

                                       <div class="form-group ">
                                            <label class="control-label col-sm-2">Nama Barang</label>
                                            <div class="col-sm-6">
                                                <input class=" form-control" name="namabrg" type="text" required="" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label class="control-label col-sm-2">OB</label>
                                            <div class="col-sm-6">
                                                <input class="form-control " type="number" name="ob" required="" aria-required="true" placeholder="Open Bidding / Harga Awal">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label class="control-label col-sm-2">Inc</label>
                                            <div class="col-sm-6">
                                                <input class="form-control " type="number" name="inc" required="" aria-required="true" placeholder="Increment / Harga Kelipatan">
                                            </div>
                                        </div>

  <!--           WAKTUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU -->

                                        <div class="form-group ">
                                            <label class="control-label col-sm-2">Waktu Lelang</label>
                                            <div class="col-sm-6">
                                                
                                                <input class="form-control " type="date" name="waktu_akhir" required="" aria-required="true">
                                            </div>
                                        </div>
  <!--           WAKTUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU -->

                                         <div class="form-group">
                        <label class="control-label col-sm-2" >Kategori</label>
                        <div class="col-sm-6">
                             <select name="idkategori" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="1">Lukisan</option>
                                <option value="2">Kriya</option>
                                <option value="3">Grafis</option>
                                <option value="4">Ukiran</option>
                             </select>
                        </div>
                    </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Deskripsi</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label col-sm-2">Foto</label>
                                            <div class="col-sm-6">
                                                <input class="form-control " type="file" name="foto1" required="" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success waves-effect waves-light" type="submit">Submit</button>
                                                <button class="btn btn-default waves-effect" type="reset">Reset</button>
                                            </div>
                                        </div>
                                    </form>

                                    <!--END MODAL ADD BARANG-->




                                    <br>
                                    <div class="content">
                                        <div class="container">

                                            <div class="panel">

                                                <div class="panel-body">


                                                   <!--  <?php echo $this->session->flashdata('message');?> -->
                                                   <?php if($this->session->flashdata('hapuspost') == TRUE): ?>
                                                    <div role="alert" class="alert alert-success alert-dismissable fade in">
                                                        <button aria-label="close" data-dismiss="alert" class="close" type="button"> <span aria-hidden="true" class="fa fa-times"></span></button>
                                                        <p><?php echo $this->session->flashdata('hapuspost')?></p>
                                                    </div>
                                                <?php endif; ?>





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
                                                                <th>Ob</th>
                                                                <th>Inc</th>
                                                                <th>Waktu Akhir</th>
                                                                <th>Kategori</th>
                                                                <th>Deskripsi</th>
                                                                <th>Foto</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php

                                                          foreach($penjual->result() as $i => $p){
                                                              ?>
                                                              <tr>
                                                                <td><?php echo $i+1; ?></td>
                                                                <td><?php echo $p->namabrg; ?></td>
                                                                <td><?php echo $p->ob; ?></td>
                                                                <td><?php echo $p->inc; ?></td>
                                                                <td><?php echo $p->waktu_akhir; ?></td>
                                                                <td><?php echo $p->idkategori; ?></td>
                                                                <td><?php echo $p->deskripsi; ?></td>
                                                                <td> <img src="<?php echo base_url('assets/foto/'.$p->foto1)?>" width='100' height='100' ></td>

                                                                <td class="actions">
                                                                    <a href="<?php echo base_url('Penjual/hapuspost/'.$p->idlelang);?>"><i class="fa fa-remove"> Hapus</i></a> |
                                                                    <a href="<?php echo base_url('Penjual/detailpost/'.$p->idlelang);?>"><i class="fa fa-pencil"> Detail</i></a>
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