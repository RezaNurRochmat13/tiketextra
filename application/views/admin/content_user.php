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
         <?php echo $this->session->flashdata('msg2');?>
           <a href="<?php echo site_url('Administrator/addNew')?>" class="btn btn-success">Add new</a>
            <table class="table table-hover">

              <thead>
              
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Jenis Kelamin User</th>
                  <th>Alamat User</th>
                  <th>Nomor Telepon User</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if (empty($user)) {
                ?>
                <div class="alert alert-danger">
                  Data tidak ditemukan
                </div>
                  <?php }else {
                     $number = 1;
                    foreach ($user as $data) {
                  ?>
                <tr>
                  <th scope="row"><?php  
                  echo $number++;?></th>
                  <td><?php echo $data->nama_user?></td>
                  <td><?php echo $data->jenis_kelamin?></td>
                  <td><?php echo $data->alamat?></td>
                  <td><?php echo $data->nomor_telepon?></td>
                  <td>
                    <?php
                      if($data->level == 1){
                        echo "User";
                      }
                      else{
                        echo "Administrator";
                      }
                    ?>
                    
                  </td>
                  <td>
                    <?php echo anchor('Administrator/edit/'.$data->id_user,'<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></button>');?>
                    <?php echo anchor('Administrator/delete/'.$data->id_user,'<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>');?>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-zoom-in"></i></button>
                  </td>
                </tr>
                 <?php }}?>
               
              </tbody>
             
            </table>
            
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
  

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
          </div>
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

 