<!DOCTYPE html>
<html>

<head>
  <title>Login Sistem ANS</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dist/css/login/style_1.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/toastr/toastr.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <img class="wave" src="<?= base_url(); ?>assets/dist/img/wave.png">
  <div class="container">
    <div class="img">
      <center>
        <h2 class="title">Sistem Anggaran dan Surat </h2>
        <h3>Desa Kedunggede</h3><br />
        <img src="<?= base_url(); ?>assets/dist/img/Lambang_Kabupaten_Banyumas.png">
      </center>
    </div>
    <div class="login-content">
      <form id="sign_in" method="POST" action="<?= base_url('auth'); ?>">
        <center><img class="img-login" src="<?= base_url(); ?>assets/dist/img/Lambang_Kabupaten_Banyumas.png"></center>
        <br />
        <h2 class="img-login">Sistem Anggaran dan Surat Desa Kedunggede</h2>
        <h3 class="title">Login Admin</h3>
        <?= $this->session->flashdata('message'); ?>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>NIK</h5>
            <input id="username" id="username" name="username" type="text" class="input" value="<?= set_value('username') ?>">
          </div>
        </div>

        <?= form_error('username', '<div class="eror">', '</div>'); ?></small>

        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input id="password" name="password" type="password" class="input">
          </div>
        </div>

        <?= form_error('password', '<div class="eror">', '</div>'); ?></small>

        <input type="submit" class="btn" value="Login">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="<?= base_url(); ?>assets/dist/js/main.js"></script>

  <!-- jQuery 3 -->
  <script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

  <script src="<?= base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

  <?= $this->session->flashdata('berhasil'); ?>

  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>