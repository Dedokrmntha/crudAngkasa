<!-- partial -->
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"></h3>
            </div>
            <div class="row">
              <div class="col-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-5">Form Tambah Jurusan</h4>
										<?php if($this->session->flashdata('error')): ?>
											<div class="alert alert-danger">
												<?= $this->session->flashdata('error') ?>
											</div>
										<?php endif ?>
                    <form class="forms-sample" action="<?= base_url('jurusan/add') ?>" method="POST">
                      <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Masukkan Jurusan" required />
                      </div>
                      <button type="submit" class="btn btn-primary me-2"> Simpan </button>
                    </form>
					<a href="<?= base_url('jurusan') ?>"><button class="btn btn-dark mt-2">Kembali</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          