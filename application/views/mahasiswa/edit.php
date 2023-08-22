<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <h1></h1>
    <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Ubah Mahasiswa</h4>
                    <p class="card-description">Politeknik Negeri Bali</p>        
                    <form class="forms-sample" action="<?= base_url('mahasiswa/update/'.$mahasiswa['id']) ?>" method="POST">
					<input type="hidden" value="<?= $mahasiswa['id'] ?>" name="id">
						<div class="form-group">
							<label for="judul_berita">Nama</label>
							<input type="text" class="form-control" id="Nama" name="nama" value="<?= $mahasiswa['nama'] ?>" placeholder="Masukkan Nama" required />
						</div>
						<div class="form-group">
							<label for="nim">Nim</label>
							<input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>" placeholder="Masukkan Nama" required />
						</div>
                        <div class="form-group">
                            <label for="umur">Umur:</label>
                            <input type="text" class="form-control" name="umur" required value="<?= $mahasiswa['umur'] ?>"><br>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?= $mahasiswa['alamat'] ?></textarea>
						</div>
                        <div class="form-group">
                            <label for="id_jurusan">Jurusan</label>
                            <select name="id_jurusan" id="id_jurusan" class="form-control" >
                                <option value="">Pilih Jurusan</option>
                                <?php
                                    foreach($jurusan->result_array() as $key){
                                        $selected = ($key['id_jurusan'] == $mahasiswa['id_jurusan']) ? 'selected' : '';
                                        ?>
                                            <option value="<?= $key['id_jurusan'] ?>" <?= $selected ?> ><?= $key['nama_jurusan'] ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
						</div>
                        <button type="submit" class="btn btn-primary me-2"> Simpan </button>
                        <a href="<?= base_url('jurusan') ?>"><button class="btn btn-dark">Kembali</button></a>
                                </div>
                        </form>
                    </body>
                </html>
