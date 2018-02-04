<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   <p>Login Adminstrator</p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo site_url('Login/verify')?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama User">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="<?php echo site_url('Login/register')?>" class="text-center">Do you have account? Register Now!</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->