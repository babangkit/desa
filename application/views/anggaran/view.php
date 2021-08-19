        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?= base_url(); ?>">Beranda</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Anggaran <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?= base_url(); ?>anggaran">Hasil Aspirasi</a></li>
                <li><a href="<?= base_url(); ?>variabel">Variabel</a></li>
                <li class="divider"></li>
                <li><a href="<?= base_url(); ?>anggaran/vote">Lihat Voting</a></li>
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
                <small>Detail Hasil Aspirasi</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Layout</a></li>
                <li class="active">Top Navigation</li>
              </ol>
            </section>

            <!-- Main content --><br />
            <section class="invoice">
              <!-- title row -->
              <div class="row">
                <div class="col-xs-12">
                  <h2 class="page-header">
                    <i class="fa fa-globe"></i> Perbaikan Jalan
                    <small class="pull-right">Date: 2/10/2014</small>
                  </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <!-- /.col -->
                <div class="col-xs-6">
                  <div class="table-responsive">
                    <p class="lead">Data Warga yang mengajukan Aspirasi</p>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th style="width:13%">NIK</th>
                          <td>:&nbsp; 3302013004730001</td>
                        </tr>
                        <tr>
                          <th>Nama</th>
                          <td>:&nbsp; DASIMAN</td>
                        </tr>
                        <tr>
                          <th>Tanggal</th>
                          <td>:&nbsp; 11-4-2021</td>
                        </tr>
                        <tr>
                          <th>Kategori</th>
                          <td>:&nbsp; Perbaikan Jalan</td>
                        </tr>
                        <tr>
                          <th>Status</th>
                          <td>:&nbsp; <span class="label label-success">Approved</span></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-6">
                  <div class="table-responsive">
                    <p class="lead">Lampiran</p>
                    <center><img src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2020/12/bac4074b59513fef61d9f65efe66516c.jpg" class='img-responsive' width="1000" height="1000" alt="User Image">
                      <!--<center><img src="https://www.radarlamsel.com/wp-content/uploads/2020/01/Foto-2-26.jpg" class='img-responsive' width="1000" height="1000"  alt="User Image">
         -->
                  </div>
                </div>
                <!-- /.col -->
              </div><br />

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-6">
                  <p class="lead">Keterangan:</p>

                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Jalan di desa .... rusak parah, mohon dengan sangat agar segera di perbaiki, karena jalan tersebut
                    merupakan jalan akses untuk 2 desa yang sangat sering di gunakan
                  </p>
                </div>
                <!-- /.col -->


                <div class="col-xs-6">
                  <p class="lead">Aksi</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th><button type="button" class="btn btn-success">Approved <i class="fa fa-check"></i></button></th>
                        </tr>
                        <tr>
                          <th><button type="button" class="btn btn-warning">Pending <i class="fa fa-hourglass-half"></i></button></th>
                        </tr>
                        <tr>
                          <th><button type="button" class="btn btn-danger">Denied <i class="fa fa-close"></i></button></th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row no-print">
                <div class="col-xs-12">

                  <a href="<?= base_url(); ?>variabel" class="btn btn-primary pull-right">Kembali</a>
                </div>
              </div>


            </section>
            <!-- /.content -->
          </div>
        </div>


        <?php $name = 'vote';
        foreach ($menu as $m) :
          if ($m['nama'] == $name && $m['aktif'] == 1) {
            echo '<h5><b>Status Menu Voting: </b><span class="label label-success"><i class="fa fa-check"></i> Aktif</span></h5>';
          } else {
            echo '<h5><b>Status Menu Voting: </b><span class="label label-danger"><i class="fa fa-close"></i> Tidak Aktif</span></h5>';
          }
        endforeach;
        ?>