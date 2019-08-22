<!-- Halaman bidding-->
<!DOCTYPE html>
<!-- cek apakah user telah login-->
<?php
	 if( ! $this->session->userdata('authenticated')){ // Jika tidak ada
            redirect('auth'); // Redirect ke halaman login 
        }
?>
<html lang="en">
<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("_partials/navbar.php") ?>
	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("_partials/breadcrumb.php") ?>


				<div class="card mb-3">
					<div class="card-header">

						<!-- jalankan fungsi index pada controller bid.php-->
						<a href="<?php echo site_url('bid') ?>"><i class="fas fa-arrow-left"></i>Kembali</a>
					</div>
					<div class="card-body">

						<!-- jalankan fungsi add pada controller Bid.php-->
						<form action="<?php base_url('bid/add') ?>" method="post" enctype="multipart/form-data" >

							
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

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("_partials/scrolltop.php") ?>

		<?php $this->load->view("_partials/js.php") ?>

</body>

</html>