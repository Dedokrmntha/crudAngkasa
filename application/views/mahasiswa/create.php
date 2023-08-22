<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1></h1>
    <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Tambah Mahasiswa</h4>
                    <a href="<?= base_url('home/tabel') ?>"><button class="btn btn-dark">Kembali</button></a>
                    <p class="card-description">Politeknik Negeri Bali</p>
                
    <form method="post" action="<?php echo base_url('mahasiswa/store'); ?>">
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" name="nama" required><br>
        <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" name="nim" required><br>
        <label for="umur">Umur:</label>
        <input type="text" class="form-control" name="umur" required><br>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
            <label for="id_jurusan">Jurusan</label>
            <select name="id_jurusan" id="id_jurusan" class="form-control" >
                <option value="">Pilih Jurusan</option>
                <?php
                    foreach($jurusan->result_array() as $key){
                        ?>
                            <option value="<?= $key['id_jurusan'] ?>"><?= $key['nama_jurusan'] ?></option>
                        <?php
                    }
                ?>
            </select>
            </div>
            <div>
            <button type="submit" class="btn btn-primary me-2"> Simpan </button><br>
        </div>
    </form>
</html>
