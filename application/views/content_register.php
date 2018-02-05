<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <p>Register New User</p>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?php echo site_url('Login/register')?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nama_user" placeholder="Nama User">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password_user" placeholder="Password User">
      </div>
      <div class="form-group has-feedback">
        <select class="form-control" name="jenis_kelamin">
          <option>Pilih Gender</option>
          <option>Laki-laki</option>
          <option>Perempuan</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="alamat" placeholder="Alamat User">
      </div>

      <div class="form-group has-feedback">
        <input type="number" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon User">
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo site_url('Login')?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->