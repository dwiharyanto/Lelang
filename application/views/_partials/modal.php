<!-- Logout Modal halaman admin-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah kamu yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Memilih "Keluar" maka akan dialihkan ke halaman login</div>
      <div class="modal-footer">
        <!-- Jalankan fungsi logout pada Controller Auth.php-->
        <a class="btn btn-primary" href="<?php echo site_url('Auth/logout') ?>">Keluar</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete modal halaman admin-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah kamu yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>