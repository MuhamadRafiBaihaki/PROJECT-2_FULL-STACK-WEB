<?php
  if($this->session->userdata('ROLE')!='administrator'){
    redirect(base_url().'index.php/welcome');
  }
?>
<br>
<br>
<br>
<br>
<br>
<br>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Update User</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="col-md-12">
        <?php
            $hidden = ['useredit'=>$useredit->id]
        ?>
        <?php echo form_open('kelola_user/save', '', $hidden);?>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="nim" name="username" value="<?=$useredit->username?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="nama" name="password" value="<?=$useredit->password?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="email" value="<?=$useredit->email?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Status</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="status" value="<?=$useredit->status?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Role</label> 
    <div class="col-8">
      <input id="ipk" name="role" value="<?=$useredit->role?>" type="text" class="form-control">
    </div>
  </div>
    <br>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close();?>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
