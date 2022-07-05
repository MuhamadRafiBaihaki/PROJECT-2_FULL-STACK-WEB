<section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5 class="mb-15">Order Form</h5>
                        <h3 class="title mb-15"><?=$mobil->nama?></h3>
                        <p><?=$mobil->deskripsi?></p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-left mt-45">
                        <div class="services">
                            <img src="<?php echo base_url();?>assets/images/product/<?=$mobil->foto?>" alt="">
                        </div> <!-- services btn -->
                    </div> <!-- services left -->
                </div>
                <div class="col-lg-6">
                    
                <?php echo form_open('welcome/save');?>
                    <div class="form-group mb-3">
                        <label for="tanggal_mulai">Tanggal Mulai</label> 
                        <input id="tanggal_mulai" name="tanggal_mulai" placeholder="Tanggal Mulai" type="date" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal_akhir">Tanggal Akhir</label> 
                        <input id="tanggal_akhir" name="tanggal_akhir" placeholder="Tanggal Akhir" type="date" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tujuan">Alamat Tujuan</label> 
                        <input id="tujuan" name="tujuan"  type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="noktp">No KTP</label> 
                        <input id="noktp" name="noktp"  type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="users_id">User ID</label> 
                        <input id="users_id" name="users_id"  type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="mobil_id">Mobil ID</label> 
                        <input id="mobil_id" name="mobil_id"  value="<?=$mobil->id?>" type="text" class="form-control">
                    </div> 
                    <div class="form-group">
                        <button name="submit" type="submit" class="main-btn mt-30">Rent Now</button>
                    </div>
                <?php echo form_close();?>
                
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>