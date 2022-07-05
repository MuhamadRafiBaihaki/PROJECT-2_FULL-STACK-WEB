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
          <h3 class="card-title">Form Update Mobil</h3>

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
            $hidden = ['mobiledit'=>$mobiledit->id]
        ?>
        <?php echo form_open('kelola_mobil/save', '', $hidden);?>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NOPOL</label> 
    <div class="col-8">
      <input id="nim" name="nopol" value="<?=$mobiledit->nopol?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Warna</label> 
    <div class="col-8">
      <input id="nama" name="warna" value="<?=$mobiledit->warna?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Biaya Sewa</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="biaya_sewa" value="<?=$mobiledit->biaya_sewa?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="deskripsi" value="<?=$mobiledit->deskripsi?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">CC</label> 
    <div class="col-8">
      <input id="ipk" name="cc" value="<?=$mobiledit->cc?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Tahun</label> 
    <div class="col-8">
      <input id="ipk" name="tahun" value="<?=$mobiledit->tahun?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Merk ID</label> 
    <div class="col-8">
      <input id="ipk" name="merk_id" value="<?=$mobiledit->merk_id?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="ipk" name="foto" value="<?=$mobiledit->foto?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="ipk" name="nama" value="<?=$mobiledit->nama?>" type="text" class="form-control">
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
