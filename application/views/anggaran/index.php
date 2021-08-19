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
        Hasil Aspirasi
        <small>Aspirasi warga dalam penggunaan dana desa.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url(); ?>variabel">Anggaran</a></li>
        <li class="active">Hasil Aspirasi</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Aspirasi Pengajuan Anggaran</h3>

              <div class="box-tools">

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Variabel</th>
                    <th>Poin 1</th>
                    <th>Poin 2</th>
                    <th>Poin 3</th>
                    <th>Poin 4</th>
                    <th>Poin 5</th>
                    <th>Total</th>
                  </tr>
                  <?php
                  if ($aspirasi == NULL) { ?>
                    <tr>
                      <td colspan="9">Tidak ada data</td>
                    </tr>
                    <?php
                  } else {
                    $i = 1;
                    foreach ($aspirasi as $as) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <?php {
                          $query =   "SELECT *
                                    FROM `users` 
                                    WHERE `username` = " . $as['user'] . "";

                          $user = $this->db->query($query)->row_array();
                        }
                        ?>
                        <td><?= $user['name']; ?></td>
                        <?php {
                          $query =   "SELECT nama
                                    FROM `a_variabel` 
                                    WHERE `id_variabel` = " . $as['id_variabel'] . "";

                          $ket = $this->db->query($query)->row_array();
                        }
                        ?>
                        <td><?= $ket['nama'] ?></td>
                        <td><?= $as['poin1'] ?></td>
                        <td><?= $as['poin2'] ?></td>
                        <td><?= $as['poin3'] ?></td>
                        <td><?= $as['poin4'] ?></td>
                        <td><?= $as['poin5'] ?></td>
                        <td><b><?= $as['jumlah'] ?></b></td>
                      <tr>
                    <?php
                    endforeach;
                  } ?>
                </tbody>
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