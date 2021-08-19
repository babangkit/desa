       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
         <ul class="nav navbar-nav">
           <li class="active"><a href="<?= base_url(); ?>">Beranda</a></li>
           <li><a href="<?= base_url(); ?>variabel">Anggaran</a></li>
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
         <div class="container h-100">
           <!-- Content Header (Page header) -->


           <!-- Main content -->
           <section class="content">

             <div class="row">
               <div class="col-md-12">
                 <div class="box box-success">
                   <div class="box-header with-border">

                   </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                     <div class="col-md-1">
                     </div>
                     <div class="row">
                       <div class="col-md-2">
                         <center><img src="<?= base_url(); ?>assets/dist/img/Lambang_Kabupaten_Banyumas.PNG" class='img-responsive' width="140" height="140" alt="User Image">
                       </div>
                       <div class="col-md-8">
                         <h1>
                           <b>
                             <center>Sistem Anggaran dan Surat
                           </b>
                         </h1>
                         <h3>
                           <center>Desa Kedunggede
                         </h3>
                         <h5>
                           <center>Alamat: Jalan Raya Kedunggede No.14, Lumbir, Banyumas, Jawa Tengah 53177
                         </h5>
                       </div>
                     </div>
                     <br />
                   </div>
                   <!-- /.box-body -->
                 </div>
                 <!-- /.box -->
               </div>
             </div>


             <div class="row">
               <div class="col-lg-3 col-xs-6">
                 <!-- small box -->
                 <div style="animation-name: slideInLeft;" class="small-box bg-aqua slideInLeft  animated">
                   <div class="inner">
                     <h3>-</h3>

                     <p>Surat Masuk</p>
                   </div>
                   <div class="icon">
                     <i class="fa fa-envelope-o"></i>
                   </div>
                   <a href="#" class="small-box-footer">
                     More info <i class="fa fa-arrow-circle-right"></i>
                   </a>
                 </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-xs-6">
                 <!-- small box -->
                 <div style="animation-name: slideInLeft;" class="small-box bg-green slideInLeft  animated">
                   <div class="inner">
                     <h3>-</h3>

                     <p>Surat Diproses</p>
                   </div>
                   <div class="icon">
                     <i class="fa fa-refresh"></i>
                   </div>
                   <a href="#" class="small-box-footer">
                     More info <i class="fa fa-arrow-circle-right"></i>
                   </a>
                 </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-xs-6">
                 <!-- small box -->
                 <div style="animation-name: slideInLeft;" class="small-box bg-yellow slideInLeft  animated">
                   <div class=" inner">
                     <h3>
                       <?php
                        foreach ($aspirasi as $aR) :
                          echo $aR['total'];
                        endforeach; ?>
                     </h3>

                     <p>Voting Anggaran</p>
                   </div>
                   <div class="icon">
                     <i class="fa fa-group"></i>
                   </div>
                   <a href="#" class="small-box-footer">
                     More info <i class="fa fa-arrow-circle-right"></i>
                   </a>
                 </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-xs-6">
                 <!-- small box -->
                 <div style="animation-name: slideInLeft;" class="small-box bg-red slideInLeft  animated">
                   <div class="inner">
                     <h3>
                       <?php
                        foreach ($variabel as $vR) :
                          echo $vR['total_id'] - 2;
                        endforeach; ?>
                     </h3>

                     <p>Variabel Anggaran</p>
                   </div>
                   <div class="icon">
                     <i class="fa fa-copy"></i>
                   </div>
                   <a href="#" class="small-box-footer">
                     More info <i class="fa fa-arrow-circle-right"></i>
                   </a>
                 </div>
               </div>
               <!-- ./col -->
             </div>
             <!-- /.box -->
             <div class="row">
               <!-- ./col -->
               <div class="col-lg-6 col-xs-12">
                 <a href="<?= base_url(); ?>variabel" style="color: #444;">
                   <div style="visibility: visible; animation-name: slideInDown;" class="feature-text text-center slideInDown  animated">
                     <center><img src="<?= base_url(); ?>assets/dist/img/budget.png" class="img-responsive text-center" alt="User Image" width="140" height="140">
                     </center>
                   </div>
                 </a>
               </div>
               <!-- ./col -->
               <div class="col-lg-6 col-xs-12">
                 <a href="<?= base_url(); ?>surat" style="color: #444;">
                   <div style="visibility: visible; animation-name: slideInDown;" class="feature-text text-center slideInDown  animated">
                     <center><img src="<?= base_url(); ?>assets/dist/img/email.png" class="img-responsive text-center" alt="User Image" width="140" height="140">
                     </center>
                   </div>
                 </a>
               </div>
             </div>
           </section>
           <!-- /.content -->
         </div>
         <!-- /.container -->
       </div>