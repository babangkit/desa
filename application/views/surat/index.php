<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <ul class="nav navbar-nav">
    <li><a href="<?= base_url(); ?>">Beranda</a></li>
    <li><a href="<?= base_url(); ?>variabel">Anggaran</a></li>
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
              <h3 class="box-title">Menu</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Surat Baru
                    <span class="label label-primary pull-right">5</span></a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Surat Keluar <span class="label label-success pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Karegori</h3>

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
              <h3 class="box-title">Inbox</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>

                    <?php
                    $i = 1;
                    foreach ($surat as $m) : ?>
                      <tr>
                        <td><input type="checkbox"></td>
                        <?php $user = $this->db->get_where('users', ['username' =>  $m['User']])->row_array();

                        $jml = $m['Judul_Surat'];
                        $jml2 = $m['Nomor'];

                        $num_char = 75;
                        $text = $jml . " </b>- Nomor Surat: " . $jml2 . " Yang bertanda tangan di bawah ini kami Kepala Desa Kedunggede Kecamatan Lumbir KabupatenBanyumas Provinsi Jawa Tengah, menerangkan bahwa ";

                        ?>
                        <td class="mailbox-subject"><b><a href="<?= base_url(); ?>surat/read/<?= $m['ID']; ?>"><?= $user['name']; ?></a></td>
                        <td class="mailbox-name"><b><a href="<?= base_url(); ?>surat/read/<?= $m['ID']; ?>"><?= substr($text, 0, $num_char) . '...'; ?></a></td>


                        <?php
                        $date1 = date('d-m-Y', strtotime($m['created_at']));
                        $date2 = date('H:i', strtotime($m['created_at']));

                        $awal  = date_create($date1);
                        $akhir = date_create(); // waktu sekarang
                        $diff  = date_diff($awal, $akhir);

                        $hari = $diff->days; //hari

                        if ($hari > 0) {
                        ?><td class="text-right"><?= $date1; ?></td>
                        <?php
                        } else {
                        ?><td class="text-right"><?= $date2; ?></td>
                        <?php
                        }
                        ?>


                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i>
                </button>
                <div class="btn-group">

                </div>
                <!-- /.btn-group -->
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
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