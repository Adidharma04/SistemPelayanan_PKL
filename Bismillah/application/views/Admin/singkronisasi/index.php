  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url() . 'assets/image/logo_malang.png'; ?>">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Data Pelayanan </h3>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Data Pelayanan &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Data Singkronisasi KTP 
              </div>
              <div class="row">
                  <div class="col">
                      <!-- Tabel -->
                      <div class="card">
                          <!-- /.card-header -->
                          <div class="card-body">
                              <div class='card-header'>
                                  <a class='btn btn-primary' href="pegawai/tambah">
                                      <i class="fa fa-plus" aria-hidden="true"></i>
                                      <span>
                                          Tambah
                                      </span>
                                  </a>

                              </div>
                              <span>
                                  <br>
                                  <?php
                                    if (!empty($this->session->flashdata('berhasil_tambah'))) {
                                    ?>
                                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          <?= $this->session->flashdata('berhasil_tambah'); ?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                  <?php
                                    }
                                    ?>

                                  <?php
                                    if (!empty($this->session->flashdata('pesan2'))) {
                                    ?>
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <?= $this->session->flashdata('pesan2'); ?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                  <?php
                                    }
                                    ?>

                                  <?php
                                    if (!empty($this->session->flashdata('pesan3'))) {
                                    ?>
                                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                          <?= $this->session->flashdata('pesan3'); ?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                  <?php
                                    }
                                    ?>

                              </span>

                              <table id="dataTable" class="table table-bordered">
                                  <thead>
                                      <tr>
                                          <th style="width:20px">No</th>
                                          <th style="width:100px">Kode</th>
                                          <th style="width:100px">NIK</th>
                                          <th style="width:100px">No KK</th>
                                          <th style="width:100px">Nama</th>
                                          <th style="width:100px">Email</th>
                                          <th style="width:100px">Whats App</th>
                                          <th style="width:100px">Tanggal Terima</th>
                                          <th style="width:100px">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $no = 1; foreach ($tbl_singkron as $snk) : ?>
                                          <tr>
                                              <td ><?= $no++ ?></td>
                                              <td ><?= $snk->kode ?></td>
                                              <td ><?= $snk->nik ?></td>
                                              <td ><?= $snk->no_kk ?></td>
                                              <td ><?= $snk->nama ?></td>
                                              <td ><?= $snk->email ?></td>
                                              <td ><?= $snk->wa ?></td>
                                              <td ><?= $snk->tgl_terima ?></td>
                                              <td>
                                                  <a class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')" href="<?= base_url() . 'Admin/pegawai/hapus/' . $pgw->id_admin ?>">
                                                      <i class="fa fa-trash" aria-hidden="true"></i>
                                                  </a>
                                                  <a class='btn btn-warning' href="<?= base_url() . 'Admin/pegawai/edit/' . $pgw->id_admin ?>">
                                                      <i class="fas fa-edit" aria-hidden="true"></i>
                                                  </a>
                                                  <a class='btn btn-info' href='<?= base_url() . 'Admin/pegawai/detail/' . $pgw->id_admin ?>' class='btn btn-biru'>
                                                      <i class="fas fa-eye" aria-hidden="true"></i>
                                                  </a>
                                              </td>
                                          </tr>
                                      <?php endforeach ?>
                                  </tbody>
                              </table>
                              <!-- /.card-body -->
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src=""></script>
  