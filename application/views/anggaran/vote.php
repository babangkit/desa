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
        Hasil Voting dan Total Aspirasi
        <small>Hasil Voting dari Aspirasi warga.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url(); ?>variabel">Anggaran</a></li>
        <li class="active">Hasil Voting</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Voting Pengajuan Anggaran</h3>
              <?php $name = 'vote';
              foreach ($menu as $m) :
                if ($m['nama'] == $name && $m['aktif'] == 1) {
                  echo '<h5><b>Status Menu Voting: </b><span class="label label-success"><i class="fa fa-check"></i> Aktif</span></h5>';
                } else {
                  echo '<h5><b>Status Menu Voting: </b><span class="label label-danger"><i class="fa fa-close"></i> Tidak Aktif</span></h5>';
                }
              endforeach;
              ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <div class="mailbox-controls">
                <div class="btn-group">
                  <?php
                  $i = 1;
                  $total_warga = 4024;
                  if ($sTabel == null) {
                    echo '<button type="button" class="btn btn-success btn-sm disabled" data-toggle="tooltip" data-container="body" title="" data-original-title="Sebelum anda ngeaktifkan voting, silahkan tambahkan kategori yang akan divoting terlebih dahulu"> <i class="fa fa-check"></i></button>';
                  } else {
                    $name = 'vote';
                    foreach ($menu as $m) :
                      if ($m['nama'] == $name && $m['aktif'] == 0) {
                        echo '<a class="btn btn-success btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Aktifkan voting sekarang" href="' . base_url() . 'anggaran/menuaktif/' . $name . '"><i class="fa fa-check"></i> Aktifkan voting sekarang</a>';
                      } else {
                        echo '<a class="btn btn-danger btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Matikan voting sekarang" href="' . base_url() . 'anggaran/menutaktif/' . $name . '"><i class="fa fa-close"></i> Matikan voting sekarang</a>';
                      }
                    endforeach;
                  }
                  ?>
                </div>
                <?php $name = 'vote';
                if ($sTabel == null) {
                  echo '<button type="button" href="#" class="btn btn-warning btn-sm disabled"  data-toggle="tooltip" data-container="body" title="" data-original-title="Atur ulang hanya bisa di gunakan saat kategori sudah di tambahkan"><i class="fa fa-repeat"></i> Sinkronisasi dan ulangi semua voting</button>';
                } else {
                  foreach ($menu as $m) :
                    if ($m['nama'] == $name && $m['aktif'] == 1) {
                      echo '<td><button type="button" href="#" class="btn btn-warning btn-sm disabled"  data-toggle="tooltip" data-container="body" title="" data-original-title="Untuk mengatur ulang silahkan matikan menu voting"><i class="fa fa-repeat"></i> Sinkronisasi dan ulangi semua voting</button></td>';
                    } else {
                      echo '<td><a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-ulangiall"><i class="fa fa-repeat"></i> Sinkronisasi dan ulangi semua voting</a></td>';
                    }
                  endforeach;
                } ?>
              </div>
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Hasil Voting</th>
                    <th>Aksi</th>
                  </tr>
                  <?php
                  $i = 1;
                  $total_warga = 4024;
                  if ($sTabel == null) {
                    echo '<td colspan = "3">Data tabel kosong!</td>'; ?>
                    <?php
                  } else {
                    foreach ($sTabel as $st) : ?>
                      <tr>
                        <td><?= $i++ ?></td>

                        <td><?= $st['nama']; ?></td>
                        <?php if ($vote == null) { ?>
                          <td><span class="label label-success"><i class="fa fa-check"></i> : 0</span> <span class="label label-danger"><i class="fa fa-close"></i> : 0</span> <span class="label label-warning"><i class="fa fa-hourglass-half"></i> : 4024</span></td>

                          <?php
                        } else {
                          foreach ($vote as $vt) :
                            if ($vt['id_variabel'] == $st['id_variabel']) {
                          ?>
                              <td><span class="label label-success"><i class="fa fa-check"></i> : <?= $vt['total_setuju'] ?></span> <span class="label label-danger"><i class="fa fa-close"></i> : <?= $vt['total_tidak'] ?></span> <span class="label label-warning"><i class="fa fa-hourglass-half"></i> : <?= $total_warga - ($vt['total_setuju'] + $vt['total_tidak']) ?></span></td>
                        <?php
                            }
                          endforeach;
                        }
                        ?>

                    <?php $name = 'vote';
                      foreach ($menu as $m) :
                        if ($m['nama'] == $name && $m['aktif'] == 1) {
                          echo '<td><button type="button" class="btn btn-success btn-xs disabled"> <i class="fa fa-check"></i> Ulangi voting</button></td>';
                        } else {
                          echo '<td><a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-delete" data-kode="' . $st['id_variabel'] . '" ><i class="fa fa-repeat"></i> Ulangi voting</a></td>';
                        }
                      endforeach;
                    endforeach;
                  } ?>
                      </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">

              <p>*Harap diperhatikan, setiap mengawali dan mengakhiri menu voting sebaiknya lakukan <b>Sinkronisasi dan ulangi semua voting</b></p>

            </div>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Total Poin Pengajuan Anggaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Total Point</th>
                    <th>Total Pemilih</th>
                    <th>Status</th>
                    <th>Voting</th>
                  </tr>
                  <?php
                  $i = 1;
                  foreach ($tPoin as $tP) : ?>
                    <tr>
                      <td><?= $i++ ?></td>

                      <td><?= $tP['nama']; ?></td>

                      <td><?= $tP['jumlah'] ?></td>

                      <td> <?= $tP['total_variabel']; ?> </td>
                      <td>
                        <?php
                        if ($i - 1 !== 4) {

                        ?>
                          <span class="label label-primary">Priotitas <?= $i - 1; ?></span>
                        <?php
                        }
                        ?>
                      </td>
                      <?php
                      if ($tP['keterangan'] == 0) {
                        $name = 'vote';
                        foreach ($menu as $m) :
                          if ($m['nama'] == $name && $m['aktif'] == 1) {
                            echo '<td><button type="button" class="btn btn-success btn-xs disabled"> <i class="fa fa-check"></i> Aktifkan voting sekarang</button></td>';
                          } else {
                            echo '<td><a href="' . base_url() . 'anggaran/addvote/' . $tP['id_variabel'] . '" class="btn btn-success btn-xs"><i class="fa fa-check"></i> Tambah ke voting</a> </td>';
                          }
                        endforeach;
                      } else {
                        $name = 'vote';
                        foreach ($menu as $m) :
                          if ($m['nama'] == $name && $m['aktif'] == 1) {
                            echo '<td><button type="button" class="btn btn-danger btn-xs disabled"> <i class="fa fa-close"></i> Hapus dari voting</button></td>';
                          } else {
                            echo '<td><a href="' . base_url() . 'anggaran/removevote/' . $tP['id_variabel'] . '" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Hapus dari voting</a> </td>';
                          }
                        endforeach;
                      }
                      ?>
                    </tr>
                  <?php endforeach; ?>
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


<!-- /.modal -->
<div class="modal fade" id="modal-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Setting Ulang</h4>
      </div>
      <form method="POST" action="<?= base_url('anggaran/ulangi'); ?>">
        <div class="modal-body">
          <input id="kode" name="id" type="hidden">
          <p>Apakah anda yakin ingin mengulang voting ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-delete" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-warning" value="Atur ulang sekarang">
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.modal -->
<div class="modal fade" id="modal-ulangiall">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Setting Ulang</h4>
      </div>
      <form method="POST" action="<?= base_url('anggaran/ulangiall'); ?>">
        <div class="modal-body">
          <input id="kode" name="id" type="hidden">
          <p>Apakah anda yakin ingin mengulang <b>Semua voting </b>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-delete" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-warning" value="Atur ulang sekarang">
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->