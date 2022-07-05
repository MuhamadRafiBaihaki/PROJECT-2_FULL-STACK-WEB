<?php
  if($this->session->userdata('ROLE')!='administrator'){
    redirect(base_url().'index.php/welcome');
  }
?>
<section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-left mt-45">
                        <h5>Kelola Perawatan Mobil</h5>
                        <br>
                        <a href="<?php echo base_url();?>index.php/perawatan_mobil/form"><button type="button" class="btn btn-success">Tambah Perawatan Mobil</button></a>
                        <br>
                        <br>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">KM Mobil</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Mobil ID</th>
                                <th scope="col">Jenis Perawatan ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $number = 1;
                                foreach($list_rawatmobil as $rawatmobil) {
                            ?>

                            <tr>
                                <th scope="row"><?=$number?></th>
                                <td><?=$rawatmobil->id?></td>
                                <td><?=$rawatmobil->tanggal?></td>
                                <td><?=$rawatmobil->biaya?></td>
                                <td><?=$rawatmobil->km_mobil?></td>
                                <td><?=$rawatmobil->deskripsi?></td>
                                <td><?=$rawatmobil->mobil_id?></td>
                                <td><?=$rawatmobil->jenis_perawatan_id?></td>
                                <td>
                                    <a href="<?php echo base_url();?>index.php/perawatan_mobil/edit?id=<?=$rawatmobil->id?>">Edit</a>
                                    <a href="<?php echo base_url();?>index.php/perawatan_mobil/delete?id=<?=$rawatmobil->id?>"
                                    onclick="if(!confirm('Anda Yakin Hapus Perawatan Mobil dengan ID <?=$rawatmobil->id?>?')) {return false}">Delete</a>
                                </td>
                            </tr>

                            <?php
                                $number++;
                                }
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>