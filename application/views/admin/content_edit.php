<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <?php 
        foreach ($edit as $key) {?>
           <form action="<?php echo site_url('Administrator/update')?>" method="post">
            <div class="form-group has-feedback">
                <label>Nama User</label>
                <input type="hidden" name="id_user" value="<?php echo $key->id_user?>">
                <input type="text" class="form-control" name="nama_user" value="<?php echo $key->nama_user?>">
            </div>
            <div class="form-group has-feedback">
                <label>Password User</label>
                <input type="password" class="form-control" name="password_user" value="<?php echo $key->password_user?>">
            </div>
            <div class="form-group has-feedback">
                <label>Jenis Kelamin User</label>
                <select class="form-control" name="jenis_kelamin">
                <option>Pilih Gender</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group has-feedback">
                <label>Alamat User</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $key->alamat?>">
            </div>

            <div class="form-group has-feedback">
                <label>Nomor Telepon User</label>
                <input type="number" class="form-control" name="nomor_telepon" value="<?php echo $key->nomor_telepon?>">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
            </form>
        <?php }?>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->