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
                <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Kategori Pengajuan</h3><br /><br />
                      <div class="box box-info">
                        <div class="box-header with-border">
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                            <div class="box-body">
                              <?php
                              $i = 1;
                              foreach ($anggaran as $ang) : ?>
                                <form method="POST" action="<?= base_url('variabel/edit/' . $ang['id_variabel']); ?>">
                                  <div class="form-group">
                                    <input name="id" type="hidden" Value="<?= $ang['id_variabel'] ?>">
                                    <label>Nama Kategori</label>
                                    <input name="nama" type="text" class="form-control" placeholder="Bangunan" Value="<?= $ang['nama'] ?>" required oninvalid="this.setCustomValidity('*Nama Kategori wajib diisi!')" oninput="setCustomValidity('')">
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="box box-success">
                        <div class="box-header with-border">
                        </div>
                        <div class="box-body">
                          <div class="form-group">
                            <label>Variabel Point 1</label>
                            <input name="v1" type="text" class="form-control " placeholder="Apakah ..." Value="<?= $ang['variabel1'] ?>" required oninvalid="this.setCustomValidity('*Variabel 1 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 2</label>
                            <input name="v2" type="text" class="form-control" placeholder="Bagaimana ..." Value="<?= $ang['variabel2'] ?>" required oninvalid="this.setCustomValidity('*Variabel 2 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 3</label>
                            <input name="v3" type="text" class="form-control" placeholder="Menurut ..." Value="<?= $ang['variabel3'] ?>" required oninvalid="this.setCustomValidity('*Variabel 3 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 4</label>
                            <input name="v4" type="text" class="form-control" placeholder="Seberapa ..." Value="<?= $ang['variabel4'] ?>" required oninvalid="this.setCustomValidity('*Variabel 4 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                            <label>Variabel Point 5</label>
                            <input name="v5" type="text" class="form-control" placeholder="Haruskah ..." Value="<?= $ang['variabel5'] ?>" required oninvalid="this.setCustomValidity('*Variabel 5 wajib diisi!')" oninput="setCustomValidity('')">
                          </div>
                          <div class="row">
                            <div class="col-xs-2">
                              <label>Point 1</label>
                              <input name="p1" type="text" class="form-control" placeholder="10" Value="<?= $ang['point1'] ?>" required oninvalid="this.setCustomValidity('*Point 1 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 2</label>
                              <input name="p2" type="text" class="form-control" placeholder="10" Value="<?= $ang['point2'] ?>" required oninvalid="this.setCustomValidity('*Point 2 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 3</label>
                              <input name="p3" type="text" class="form-control" placeholder="10" Value="<?= $ang['point3'] ?>" required oninvalid="this.setCustomValidity('*Point 3 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 4</label>
                              <input name="p4" type="text" class="form-control" placeholder="10" Value="<?= $ang['point4'] ?>" required oninvalid="this.setCustomValidity('*Point 4 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-xs-2">
                              <label>Point 5</label>
                              <input name="p5" type="text" class="form-control" placeholder="10" Value="<?= $ang['point5'] ?>" required oninvalid="this.setCustomValidity('*Point 5 wajib diisi!')" oninput="setCustomValidity('')">
                            </div>
                          </div>
                        <?php endforeach; ?>
                        <hr />
                        <a href="<?= $_SERVER['HTTP_REFERER'] ?>" type="button" class="btn btn-danger"><i class="fa fa-remove"></i> Batal</a>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                        <!-- /.box-body -->
                      </div>

                    </div>



                  </div>
                </div>
            </section>
            <!-- /.content -->
          </div>
        </div>