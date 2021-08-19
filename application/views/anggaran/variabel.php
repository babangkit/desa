<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <ul class="nav navbar-nav">
    <li><a href="<?= base_url(); ?>">Beranda</a></li>
    <li class="dropdown active">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Anggaran <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="<?= base_url(); ?>variabel">Variabel</a></li>
        <li><a href="<?= base_url(); ?>anggaran">Hasil Aspirasi</a></li>
        <li class="divider"></li>
        <li><a href="<?= base_url(); ?>anggaran/vote">Hasil Voting</a></li>
      </ul>
    </li>
    <li><a href="<?= base_url(); ?>surat">Surat</a></li>
  </ul>
</div>
<!-- /.navbar-collapse -->
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
  <ul class="nav navbar-nav">
    <!-- Messages: style can be found in dropdown.less-->

    <!-- User Account Menu -->
    <li class="dropdown user user-menu">
      <!-- Menu Toggle Button -->
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="<?= base_url(); ?>assets/dist/img/Lambang_Kabupaten_Banyumas.png" class="user-image" alt="User Image">
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">Super Admin</span>
      </a>
      <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
          <img src="<?= base_url(); ?>assets/dist/img/Lambang_Kabupaten_Banyumas.png" class="img-circle" alt="User Image">

          <p>
            Super Admin - Administrator
            <small>Pemerintah Desa Kedunggede</small>
          </p>
        </li>

        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="pull-right">
            <a href="<?= base_url(); ?>auth/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Keluar dari sistem</a>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</div>
<!-- /.navbar-custom-menu -->
</div>
<!-- /.container-fluid -->
</nav>
</header>
<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Variabel
        <small>Anggaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url(); ?>variabel">Anggaran</a></li>
        <li class="active">Variabel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Kategori Pengajuan</h3><br /><br />
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i> Tambah</button>
              <br />
              <?= $this->session->flashdata('message'); ?>
            </div>

            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Ketegori</h4>
                  </div>
                  <form method="POST" action="<?= base_url('variabel/add'); ?>">
                    <div class="modal-body">
                      <div class="box box-info">
                        <div class="box-header with-border">
                        </div>
                        <div class="box-body">
                          <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input id="nama" name="nama" type="text" class="form-control" placeholder="Bangunan" required oninvalid="this.setCustomValidity('*Nama Kategori wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                        </div>
                      </div>
                      <div class="box box-success">
                        <div class="box-header with-border">
                        </div>
                        <div class="box-body">
                          <div class="form-group">
                            <label>Variabel Point 1</label>
                            <input name="v1" type="text" class="form-control" placeholder="Apakah ..." required oninvalid="this.setCustomValidity('*Variabel 1 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 2</label>
                            <input name="v2" type="text" class="form-control" placeholder="Bagaimana ..." required oninvalid="this.setCustomValidity('*Variabel 2 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 3</label>
                            <input name="v3" type="text" class="form-control" placeholder="Menurut ..." required oninvalid="this.setCustomValidity('*Variabel 3 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 4</label>
                            <input name="v4" type="text" class="form-control" placeholder="Seberapa ..." required oninvalid="this.setCustomValidity('*Variabel 4 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 5</label>
                            <input name="v5" type="text" class="form-control" placeholder="Haruskah ..." required oninvalid="this.setCustomValidity('*Variabel 5 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="row">
                            <div class="col-xs-2">
                              <label>Point 1</label>
                              <input name="p1" type="text" class="form-control" placeholder="10" required oninvalid="this.setCustomValidity('*Point 1 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 2</label>
                              <input name="p2" type="text" class="form-control" placeholder="10" required oninvalid="this.setCustomValidity('*Point 2 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 3</label>
                              <input name="p3" type="text" class="form-control" placeholder="10" required oninvalid="this.setCustomValidity('*Point 3 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 4</label>
                              <input name="p4" type="text" class="form-control" placeholder="10" required oninvalid="this.setCustomValidity('*Point 4 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 5</label>
                              <input name="p5" type="text" class="form-control" placeholder="10" required oninvalid="this.setCustomValidity('*Point 5 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                      <input type="submit" class="btn btn-primary" value="Tambah Kategori">
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>


            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th style="width: 65px">Point 1</th>
                  <th style="width: 65px">Point 2</th>
                  <th style="width: 65px">Point 3</th>
                  <th style="width: 65px">Point 4</th>
                  <th style="width: 65px">Point 5</th>
                  <th style="width: 90px">Jumlah </th>
                  <th style="width: 200px"> </th>
                </tr>
                <?php
                $i = 1;
                foreach ($variabel as $v) : ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $v['nama']; ?></td>
                    <td><?= $v['point1']; ?></td>
                    <td><?= $v['point2']; ?></td>
                    <td><?= $v['point3']; ?></td>
                    <td><?= $v['point4']; ?></td>
                    <td><?= $v['point5']; ?></td>
                    <td><?= $v['jumlah']; ?></td>

                    <td><a href="<?= base_url(); ?>variabel/edit/<?= $v['id_variabel'] ?>" type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete" data-kode="<?= $v['id_variabel']; ?>"><i class="fa fa-remove"></i> Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Kategori Pengajuan Lainnya <span class="label label-primary">[Coming Soon] Segera Hadir</span></h3><br /><small>Pengajuan dari masyarakat</small><br />
            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama Kategori</th>
                  <th>NIK</th>
                  <th>Alasan Pengajuan</th>
                  <th style="width: 200px">Aksi</th>
                </tr>

                <tr>
                  <td>1</td>
                  <td>Perbaikan Gang Kenanga</td>
                  <td>3302015209180001</td>
                  <td>Tolong ini karena .......... atas nama .......</td>

                  <td><a href="<?= base_url(); ?>anggaran/view" type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Lihat</a>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">

              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>

<!-- /.modal -->
<div class="modal fade" id="modal-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <form method="POST" action="<?= base_url('variabel'); ?>">
        <div class="modal-body">
          <input id="kode" name="kode" type="hidden">
          <p>Apakah anda yakin ingin menghapus data ini ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-delete" data-dismiss="modal">Cencel</button>
          <input type="submit" class="btn btn-primary" value="Delete">
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->