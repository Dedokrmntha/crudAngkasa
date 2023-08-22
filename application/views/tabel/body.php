
                    <div id="layoutSidenav_content">
                          <main>
                              <div class="container-fluid px-4">
                                  <h1 class="mt-4">Data Mahasiswa</h1>
                                  <ol class="breadcrumb mb-2">
                                      <li class="breadcrumb-item active">MAHASISWA</li>
                                  </ol>

                                  <div class="card mb-4">
                                      <div class="card-header ">

                                          <i class="fas fa-table me-1"></i>
                                          Tabel Mahasiswa
                                              <a class="btn btn-success " href="<?php echo base_url('mahasiswa/create'); ?>">Tambah</a> <br>
                                      </div>
                                      <div class="card-body">
                                          <table class="table" id="datatablesSimple">
                                              <thead>
                                                  <tr>
                                                      <th>Nama</th>
                                                      <th>NIM</th>
                                                      <th>Aksi</th>
                                                      </tr>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php foreach ($mahasiswa as $mhs): ?>
                                                          <tr>
                                                              <td><?php echo $mhs->nama; ?></td>
                                                              <td><?php echo $mhs->nim; ?></td>
                                                              <td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $mhs->nama; ?>
                                                      </td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $mhs->nim; ?>
                                                      </td>
                                                          <a class="btn btn-primary mb-1" href="<?php echo base_url('mahasiswa/edit/' . $mhs->id); ?>">Edit</a>
                                                          <a class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin ingin hapus?')" href="<?php echo base_url('mahasiswa/delete/' . $mhs->id); ?>">Delete</a>
                                                      </td>
                                                  </tr>
                                                  </tr>
                                                  <?php endforeach; ?>
                                              </tbody>

                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </main>