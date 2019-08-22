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
     <div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="panel panel-primary panel-body col-sm-12 col-xs-12">
                   
             <!--   //////////////////////////////// -->
                <div id="result" class="form-group col-sm-12 col-xs-12 results">
                    <?php foreach($detailpesan->result() as $k){?>
                    <ul class="list-group diskusi-<?=$k->iddiskusi?>">

                        
                        <?php if($k->statussender == "1"){?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img src="<?php echo base_url('./assets/foto/'.$k->fotoprofil)?>" class="img-circle"  style="width: 50px; height: 50px;">
                                </div>
                                <div class="col-sm-11">
                                        
                                    <?php echo "<a href='".base_url()."Main/profil_other/".$k->namabidder."'><h4>".$k->namabidder."</h4></a>";?>
                                    <p><?php echo $k->isi;?></p>
                                </div>
                            </div>
                        </li>
                        <?php
                        if($k->foto != null){ ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <a href="<?php echo base_url('assets/file_komen/') . $k->foto ?>" data-lighter>
                                    <img src="<?php echo base_url('assets/file_komen/') . $k->foto ?>" class="img-responsive col-lg-4 col-sm-4">
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                        <div style="float: right;">
                            <?php echo $k->tgl;?>
                        </div>
                    </ul><br>
                    <?php }else if($k->statussender == "0"){?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img src="<?php echo base_url('./assets/foto/'.$k->fotopenjual)?>" class="img-circle" style="width: 50px; height: 50px;">
                                </div>
                                <div class="col-sm-11">
                                        
                                    <?php echo "<a href='".base_url()."Main/profil_other/".$k->namapenjual."'><h4>".$k->namapenjual."</h4></a>";?>
                                    <p><?php echo $k->isi;?></p>
                                </div>
                            </div>
                        </li>
                        <?php
                        if($k->foto != null){ ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <a href="<?php echo base_url('assets/file_komen/') . $k->foto ?>" data-lighter>
                                    <img src="<?php echo base_url('assets/file_komen/') . $k->foto ?>" class="img-responsive col-lg-4 col-sm-4">
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                        <div style="float: right;">
                            <?php echo $k->tgl;?>
                        </div>
                    </ul><br>
                    <?php } } ?>
                    
                <!-- <?php 
                    // echo $this->pagination->create_links();
                ?> -->
                </div>
                <?php 
                $iddiskusi = $this->uri->segment(3);
                $idpenjual = $this->session->userdata('idpenjual');?>
                <?php if($idpenjual != null){ ?>
                <form class="form-input" id="myForm" enctype="multipart/form-data">
                
                <input type="hidden" name="iddiskusi" value="<?php echo $iddiskusi;?>">
                <input type="hidden" name="idpenjual" value="<?php echo $idpenjual;?>">
                <div class="form-group col-sm-10 col-xs-12">
                    <textarea class="form-control" rows="4" name="isi" id="komen"required></textarea>
                    <span class='label label-info' id="upload-file-info"></span>
                </div>
                <div class="form-group col-sm-2 col-xs-3">
                    <div class="form-group">
                        <label class="btn btn-success btn-sm">
                            Browse <input type="file" name="file_komen" style="display: none;" onchange="$('#upload-file-info').html(this.files[0].name)">
                        </label>
                        
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                    </div>
                </div>
            </div>
            </form>
            <?php } ?>
        </div>
    </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

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