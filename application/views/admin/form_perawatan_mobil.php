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
          <h3 class="card-title">Form Tambah Perawatan Mobil</h3>

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
        <?php echo form_open('perawatan_mobil/save');?>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal"  type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <input id="biaya" name="biaya"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="km_mobil" class="col-4 col-form-label">KM Mobil</label> 
    <div class="col-8">
      <input id="km_mobil" name="km_mobil"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">Mobil ID</label> 
    <div class="col-8">
      <input id="mobil_id" name="mobil_id"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_perawatan_id" class="col-4 col-form-label">Jenis Perawatan ID</label> 
    <div class="col-8">
      <input id="jenis_perawatan_id" name="jenis_perawatan_id"  type="text" class="form-control">
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
