
                

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            </div>
            <h2 class="page-title">TABEL DATA MAHASISWA</h2>
            <a class="btn btn-success " href="<?php echo base_url('mahasiswa/create'); ?>">Tambah</a>
            <div class="row mt-4">
            <div class=" text-dark"><h3> Total Data: <?php echo $total; ?></h3></div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					<div class="row mb-5">
					    <div class="col-lg-10">
                            </div>
                                <div class="table-responsive">
                                <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                                <?php
                                                $no = 1; 
                                                foreach ($mahasiswa as $mhs): ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $mhs->nama; ?></td>
                                                    <td><?php echo $mhs->nim; ?></td>
                                                    <td><?php echo $mhs->umur; ?></td>
                                                    <td><?php echo $mhs->alamat; ?></td>
                                                    <td><?php echo $mhs->nama_jurusan; ?></td>
                                                    <td>
                                                    <a class="btn btn-primary" href="<?php echo base_url('home/edit/' . $mhs->id); ?>">Edit</a>
                                                          <a class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin ingin hapus?')" href="<?php echo base_url('mahasiswa/delete/' . $mhs->id); ?>">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </body>
                                </html>