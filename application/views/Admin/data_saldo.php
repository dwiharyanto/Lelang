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

    <title>Lelangkah | Admin </title>

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
    <script src="<?php echo base_url('themes/latihan/js/jquery.lighter.js')?>" type="text/javascript"></script>
    <link href="<?php echo base_url('themes/latihan/js/jquery.lighter.css')?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('themes/latihan/js/jquery.js')?>"></script>

</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="<?= base_url(); ?>Admin" class="logo"><i class="fa fa-gavel"></i> <span>Lelangkah </span></a>
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
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
<?php 
$namaadmin=$this->session->userdata('namaadmin'); 
?>
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="pull-left">
                        <img src="<?php echo base_url('themes/latihan/images/bgadmin.png')?>" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?= $namaadmin; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url(); ?>Auth/logout"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
                        </div>
                        <p class="text-muted m-0">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                     <li>
                        <a href="<?= base_url(); ?>Admin" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                    </li>
                    <li class="has_sub">
                        <a href="<?= base_url(); ?>admin" class="waves-effect"><i class="fa fa-users"></i><span> Data Users </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>Admin/datapenjual">Data Penjual</a></li>
                            <li><a href="<?= base_url(); ?>Admin/databidder">Data Bidder</a></li>
                        </ul>
                    </li>
                    <li>
                    <a href="<?= base_url(); ?>Admin/databarang" class="waves-effect"><i class="fa fa-cubes"></i><span> Data Barang </span></a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Admin/datasaldo" class="waves-effect"><i class="fa fa-tags"></i><span> Data Saldo </span></a>
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Data Saldo</h4>
                </div>
            </div>
            <div class="panel panel-body">
                <table class="table table-bordered table-striped" id="datatables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Idbidder</th>
                            <th>Nama</th>
                            <th>Pembelian</th>
                            <th>SC</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php foreach($beli->result() as $i=>$k){ ?>
                          <tr>

                              <td><?php echo $i+1; ?></td>
                              <td><?php echo $k->idbidder; ?></td>
                              <td><?php echo $k->namabidder; ?></td>
                              <td><?php echo $k->beli; ?></td>
                              <td><img src="<?php echo base_url('upload/product/'.$k->fototransfer)?>" width='100' height='100' ><!-- <?php echo $k->fototransfer; ?> --></td>
                              <td class="konfirmasi">
                                <?php if($k->status == "Belum Terkonfirmasi"){ ?>
                                  <a href="<?php echo base_url('Admin/konfirmasi_saldo/'.$k->idsaldo);?>"><i class=" md-verified-user"> Konfirmasi</i> |
                                     <a href="<?php echo base_url('Admin/delete_saldo/'.$k->idsaldo);?>"><i class=" md-highlight-remove"> Delete</i>
                                  <?php }else{ ?>
                                    Sudah Terkonfirmasi
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<!-- Start content -->



<footer class="footer text-right">
    2019 © Lelangkah
</footer>



</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->



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
