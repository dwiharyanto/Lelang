<!-- Halaman bidding-->
<!DOCTYPE html>
<!-- cek apakah user telah login-->
<?php
	 if( ! $this->session->userdata('authenticated')){ // Jika belum login
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

				<!-- DataTables halaman bidder-->
				<div class="card mb-3">

				<!------------------------------------------------------------------------------------>
				<!-- baris program dibawah ini untuk menampilkan flashdata sukses maupun pesan error-->
				<!------------------------------------------------------------------------------------>
					
				<?php if ($this->session->flashdata('success')): ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('success'); ?>
							</div>
					<?php endif; ?>

					<?php 
			  	if($this->session->flashdata('message'))
			  		{  ?>
				    	<div id ="pesan-error" class="alert alert-danger">
				    	<?php	echo $this->session->flashdata('message'); ?> </div>  
				    <?php } ?>

				<!------------------------------------------------------------------------------------>
				<!------------------------------------------------------------------------------------>
				<!------------------------------------------------------------------------------------>

					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th class="align-middle text-center">Barang</th>
										<th class="align-middle text-center">Ob</th>
										<th class="align-middle text-center">Inc</th>
										<th class="align-middle text-center">Current</th>
										<th class="align-middle text-center">Countdown</th>
										<th class="align-middle text-center">Bid</th>
									</tr>
								</thead>
								<tbody>

									<!-------------menampilkan data di database------------->
									<!-------------menampilkan data di database------------->
									<!-------------menampilkan data di database------------->

									<?php foreach ($list_lelang as $data): ?>
										<tr>
											<td width="200" class="align-middle text-center">
												<?php echo ($data->namabrg) ?>
											</td>
											<td width="200" class="align-middle text-center">
												<?php echo ($data->ob) ?>
											</td>
											<td width="200" class="align-middle text-center">
												<?php echo ($data->inc) ?>
											</td>
											<td width="200" class="align-middle text-center">
												<?php echo ($data->crt) ?>
											</td>
											<td width="200" id = "countdown" class="align-middle text-center">
												<?php  $akhir= date('d F Y', strtotime($data->waktu_akhir)); echo ($data->waktu_akhir) ?>
											</td>


											<!------------------------------------------------------------------->
											<!-- Jika batas waktu lelang belum habis, tampilkan tombol join bid-->
											<!------------------------------------------------------------------->
											<?php if ($akhir >= date("d F Y")) {?>
											<td width="150" class="align-middle text-center">
												<!----------------------------------------------------------------------------->
												<!-- jalankan fungsi check pada controller Bid_iteration berdasarkan idlelang-->
												<!----------------------------------------------------------------------------->
												<a href="<?php echo site_url('bid_iteration/check/'.$data->idlelang) ?>" class='btn btn-sm btn-info'>Join Bid</a>					
											</td>
											<!------------------------------------------------------------------->
											<!------------------------------------------------------------------->
											<!------------------------------------------------------------------->



											<!------------------------------------------------------------------->
											<!-- Jika batas waktu lelang telah habis, tampilkan tombol bid closed-->
											<!------------------------------------------------------------------->
											<?php } else if ($akhir < date("d F Y")) {?>
											<td width="150" class="align-middle text-center">
												<a href="" class='btn btn-sm btn-danger'>Bid Closed</a>					
											</td>
											<?php }?>
											<!------------------------------------------------------------------->
											<!------------------------------------------------------------------->
											<!------------------------------------------------------------------->

										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("_partials/modal.php") ?>

	<?php $this->load->view("_partials/js.php") ?>

</body>



</html>



