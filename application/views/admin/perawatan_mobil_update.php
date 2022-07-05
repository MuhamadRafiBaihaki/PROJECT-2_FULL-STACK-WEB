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
          <h3 class="card-title">Form Update Perawatan Mobil</h3>

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
            $hidden = ['perawatanmobiledit'=>$perawatanmobiledit->id]
        ?>
        <?php echo form_open('perawatan_mobil/save', '', $hidden);?>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="nim" name="tanggal" value="<?=$perawatanmobiledit->tanggal?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <input id="nama" name="biaya" value="<?=$perawatanmobiledit->biaya?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">KM Mobil</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="km_mobil" value="<?=$perawatanmobiledit->km_mobil?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="deskripsi" value="<?=$perawatanmobiledit->deskripsi?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Mobil ID</label> 
    <div class="col-8">
      <input id="ipk" name="mobil_id" value="<?=$perawatanmobiledit->mobil_id?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Jenis Perawatan</label> 
    <div class="col-8">
      <input id="ipk" name="jenis_perawatan_id" value="<?=$perawatanmobiledit->jenis_perawatan_id?>" type="text" class="form-control">
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
