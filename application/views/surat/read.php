<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <ul class="nav navbar-nav">
    <li><a href="<?= base_url(); ?>">Beranda</a></li>
    <li><a href="<?= base_url(); ?>anggaran">Anggaran</a></li>
    <li class="active"><a href="<?= base_url(); ?>surat">Surat</a></li>
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
        Top Navigation
        <small>Example 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Top Navigation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class=""><a href="#"><i class="fa fa-inbox"></i> Surat Baru
                    <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Surat Keluar <span class="label label-success pull-right">65</span></a></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Surat Keterangan</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Surat Pengantar</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Izin Keramaian</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-red"></i> Izin Usaha</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <?php
                $i = 1;
                foreach ($jenis_surat as $js) : ?>

                  <?php $user = $this->db->get_where('users', ['username' =>  $js['user']])->row_array(); ?>
                  <?php $bio = $this->db->get_where('bio', ['user' =>  $js['user']])->row_array(); ?>

                  <h3><?= $js['judul_surat'] ?></h3>
                  <h5>Dari: <?= $user['name'] ?>
                    <?php
                    $date1 = date('d/m/Y', strtotime($js['created_at']));
                    $date0 = date('H:i', strtotime($js['created_at']));
                    function tgl_indo($tanggal)
                    {
                      $bulan = array(
                        1 =>   'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                      );
                      $pecahkan = explode('/', $tanggal);
                      return $pecahkan[0] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[2];
                    }
                    //RW
                    $kalimat = $user['address'];
                    $rw = substr($kalimat, -3);
                    $rt = substr($kalimat, -11, -6);

                    $date2 = tgl_indo($date1); // 21 Oktober 2017

                    //TTL                      
                    $kalimat = $user['ttl'];
                    $ttl2 = substr($kalimat, -10);

                    $ttl3 = date('d/m/Y', strtotime($ttl2));
                    $date3 = tgl_indo($ttl3);

                    $hasil = preg_replace("/\d/", "", $kalimat);
                    $hasil2 = preg_replace("/[^A-Za-z0-9]/", "", $hasil);
                    ?>
                    <span class="mailbox-read-time pull-right"><?= $date2 ?> <?= $date0 ?> WIB</span>
                  </h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                    <i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                    <i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                  <i class="fa fa-print"></i></button>
              </div>
              <!-- /.mailbox-controls -->
              <div style="font-family: Arial;" class="mailbox-read-message">

                <!-- /.ISI SURAT -->
                <div class="mailbox-controls">
                  <center>
                    <img src="<?= base_url(); ?>assets/dist/img/cop_surat.png" width="760" height="160" class='img-responsive' alt="User Image">
                </div>
                <div style="margin-left: 70px; margin-right: 50px; ">

                  Kode Desa : 02012009
                </div>
                <div class="mailbox-controls text-center">
                  <h4 style="font-family: Arial;"><b><u><?= $js['judul'] ?></u></b></h4>
                  <p style="font-family: Arial;">Nomor: <?= $js['nomor'] ?></p>
                </div>
                <div style="margin-left: 70px; margin-right: 50px; ">
                  <p style="text-indent: 2em; "><?= $js['header'] ?></p>
                  <div class="box-body table-responsive no-padding">
                    <?php
                    if ($js['jenis'] == 1) {

                      include('jenis/skck.php');
                    } elseif ($js['jenis'] == 2) {

                      include('jenis/pengantar.php');
                    } elseif ($js['jenis'] == 3) {

                      include('jenis/keterangan.php');
                    } elseif ($js['jenis'] == 4) {

                      include('jenis/tidak_mampu.php');
                    } elseif ($js['jenis'] == 5) {

                      include('jenis/izin_keramaian.php');
                    } elseif ($js['jenis'] == 6) {

                      include('jenis/usaha.php');
                    } else {

                      include('jenis/kosong.php');
                    }; ?>

                  </div>
                <?php endforeach; ?>



                </div>
                <!-- /.ISI SURAT -->
                <!-- /.mailbox-read-message -->
              </div>
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                  <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                </div>
                <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>