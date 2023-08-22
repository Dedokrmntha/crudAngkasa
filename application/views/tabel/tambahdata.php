<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Galeri</h1>
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item active">Admin</li>
      </ol>

      <div class="card mb-4">
        <div class="card-header">

          <i class="fas fa-table me-1"></i>
          Tabel Gambar

        </div>
        <div class="card-body">
          <form class="row g-3" action="<?php echo base_url('mahasiswa/store'); ?>" method="post" enctype="multipart/form-data">
              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('nama_mahasiswa') ?></td>
                </tr>
                <label for="inputJudul" class="form-label">Nama</label>
                <input type="text" class="form-control" id="inputJudul" name="judul_gambar" placeholder="Masukkan Judul">
              </div>

              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('filefoto') ?></td>
                </tr>
                <label for="inputGambar" class="form-label">foto</label>
                <input type="file" class="form-control" id="inputGambar" name="filegambar" placeholder="Masukkan Gambar">
              </div>
              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('umur') ?></td>
                </tr>
                <label for="inputDeskripsi" class="form-label">umur</label>
                <input type="text" class="form-control pb-5" id="inputDeskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Umur">
              </div>
              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('alamat') ?></td>
                </tr>
                <label for="inputDeskripsi" class="form-label">alamat</label>
                <input type="text" class="form-control pb-5" id="inputDeskripsi" name="deskripsi" placeholder="Masukkan Alamat">
              </div>
              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('jurusan') ?></td>
                </tr>
                <label for="inputDeskripsi" class="form-label">jurusan</label>
                <input type="text" class="form-control pb-5" id="inputDeskripsi" name="deskripsi" placeholder="Masukkan Jurusan">
              </div>