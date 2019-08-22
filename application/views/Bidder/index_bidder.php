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

    <title>Lelangkah | Bidder </title>

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
                    <a href="<?= base_url(); ?>Bidder" class="logo"><i class="fa fa-gavel"></i> <span>Lelangkah </span></a>
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
            </li>
        </ul>
    </div>
</div>
</div>
</div>

<?php 
$namabidder=$this->session->userdata('namabidder'); 
?>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="<?php echo base_url('assets/foto/'.$this->session->userdata('fotoprofil'))?>" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                   <a href="<?php echo base_url('Penjual')?>" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?= $namabidder; ?><span class="caret"></span></a>
                   <ul class="dropdown-menu">
                    <li><a href="<?= base_url(); ?>Auth/logout"><i class="md md-settings-power"></i> Logout</a></li>
                </ul>
            </div>
            <p class="text-muted m-0">Bidder</p>
        </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
         <li>
            <a href="<?= base_url(); ?>Bidder" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
        </li>
        <li>
            <a href="<?= base_url(); ?>Bidder/pesan" class="waves-effect"><i class=" md-my-library-add"></i><span> Pesan </span></a>
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
                    <h4 class="pull-left page-title"> Welcome !</h4>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="panel-body">
                <div class="jumbotron" style="background-color: white">
                    <div class="container">



                        <h2><center>DATA USER</h2>
                            <br>
                            <tr class="active">
                                <td><pre>Username     : <?= $bidder['username']; ?></pre></td>
                            </tr>
                            <tr class="active">
                                <td><pre>Nama Lengkap : <?= $bidder['namabidder']; ?></pre></td>
                            </tr>
                            <tr class="active">
                                <td><pre>Alamat       : <?= $bidder['alamat']; ?></pre></td>
                            </tr>
                            <tr class="active">
                                <td><pre>Email        : <?= $bidder['email']; ?></pre></td>
                            </tr>
                            <tr class="active">
                                <td><pre>Telp         : <?= $bidder['telp']; ?></pre></td>
                            </tr>
                            <br>
                            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Edit</button>
                            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog"> 
                                    <div class="modal-content"> 
                                        <div class="modal-header"> 
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                            <h4 class="modal-title">Edit Profil</h4> 
                                        </div> 

                         <?php echo form_open_multipart('Bidder/editprofil');?>
                                        <div class="modal-body"> 
                                            <div class="row"> 
                                                <div class="col-md-6"> 
                                                    <div class="form-group"> 
                                                        <label for="username" class="control-label">Username</label> 
                                                         <input type="hidden" name="idbidder" value="<?= $bidder['idbidder']; ?>">
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="" value="<?= $bidder['username']; ?>"> 
                                                    </div> 
                                                </div> 
                                               <!--  <div class="col-md-6"> 
                                                    <div class="form-group"> 
                                                        <label for="pw" class="control-label">Password</label> 
                                                        <input type="text" class="form-control" name="pw" id="pw" placeholder="" value="<?= $penjual['pw']; ?>"> 
                                                    </div> 
                                                </div>  -->
                                                  <div class="col-md-6"> 
                                                    <div class="form-group"> 
                                                        <label for="namabidder" class="control-label">Nama Lengkap</label> 
                                                        <input type="hidden" name="namabidder" value="<?= $bidder['namabidder']; ?>"> 
                                                        <input type="text" class="form-control" id="namabidder" placeholder="" value="<?= $bidder['namabidder']; ?>" disabled>
                                                    </div> 
                                                </div> 
                                            </div> 

                                            <div class="row"> 
                                                <div class="col-md-12"> 
                                                    <div class="form-group"> 
                                                        <label for="alamat" class="control-label">Alamat</label> 
                                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" value="<?= $bidder['alamat']; ?>"> 
                                                    </div> 
                                                </div> 
                                            </div> 
                                             <div class="row"> 
                                                <div class="col-md-12"> 
                                                    <div class="form-group"> 
                                                        <label for="email" class="control-label">Email</label> 
                                                        <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?= $bidder['email']; ?>"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div> 
                                                </div> 
                                            </div> 
                                            <div class="row"> 
                                                <div class="col-md-4"> 
                                                    <div class="form-group"> 
                                                        <label for="telp" class="control-label">Telp</label> 
                                                        <input type="text" class="form-control" id="telp" name="telp" placeholder="" value="<?= $bidder['telp']; ?>">  
                                                    </div> 
                                                </div> 
                                            </div> 
                                            <div class="modal-footer"> 
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                            </div> 
                                             <?php echo form_close();?>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="panel-body">
                <div class="jumbotron" style="background-color: powderblue">
                    <div class="container">
                        <div class="form-group">
                            <a href="#" class="thumbnail">
                                <img src="<?php echo './assets/foto/'.$bidder["fotoprofil"]; ?>">


                            </a>
                            <div class="form-group">

                                <center><button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-foto">Ganti Foto</button></center>
                                <div class="modal fade" id="modal-foto">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <?php echo form_open_multipart('bidder/doupload');?>
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-tittle">Ganti Foto Profile</h3>
                                            </div>
                                            <div class="modal-body">
                                                <!-- <?php echo form_upload('userfile'); ?> -->
                                                <input type="file" name="userfile" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            <?php echo form_close();?>
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
</div>
</body>


<footer class="footer text-right">
    2019 © Lelangkah
</footer>

</div>
</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>
!-- jQuery  -->
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





