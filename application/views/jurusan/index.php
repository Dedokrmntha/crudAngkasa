
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row justyfy-content-center" >
				<div class="col-lg-10">
            <div class="page-header">
            </div>
            <h2 class="page-title">TABEL DATA JURUSAN</h2>
            <a class="btn btn-success " href="<?php echo base_url('jurusan/tambah'); ?>">Tambah</a>
            <div class="row mt-4">
              <div class="col-lg-2">
                <div class=" text-dark"><h3> Total Data: <?php echo $total; ?></h3></div>
                </div>
                </div>
				      <?php if($this->session->flashdata('success')): ?>
									<div class="alert alert-success">
										<?= $this->session->flashdata('success') ?>
									</div>
							<?php endif ?>

							<?php if($this->session->flashdata('error')): ?>
									<div class="alert alert-danger">
										<?= $this->session->flashdata('error') ?>
									</div>
							<?php endif ?>
				</div>
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
                            <th>Nama Jurusan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
													<?php
														$no=1;
													foreach($jurusan->result_array() as $key): ?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $key['nama_jurusan'] ?></td>
															<td>
																<a href="<?= base_url('Jurusan/edit/'.$key['id_jurusan']) ?>"><button class="btn btn-primary">Edit</button></a>
																<a href="<?= base_url('Jurusan/hapus/'.$key['id_jurusan']) ?>" onclick = "return confirm('Yakin hapus Jurusan?')"><button class="btn btn-danger">Hapus</button></a>
															</td>
														</tr>
													<?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          