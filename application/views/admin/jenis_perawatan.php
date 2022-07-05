<?php
  if($this->session->userdata('ROLE')!='administrator'){
    redirect(base_url().'index.php/welcome');
  }
?>
<?php
  if(!$this->session->has_userdata('USERNAME')){
    redirect(base_url().'index.php/login');
  }
?>
<section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-left mt-45">
                        <h5>Kelola Jenis Perawatan</h5>
                        <br>
                        <a href="<?php echo base_url();?>index.php/jenis_perawatan/form"><button type="button" class="btn btn-success">Tambah Jenis Perawatan</button></a>
                        <br>
                        <br>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $number = 1;
                                foreach($list_perawatan as $perawatan) {
                            ?>

                            <tr>
                                <th scope="row"><?=$number?></th>
                                <td><?=$perawatan->id?></td>
                                <td><?=$perawatan->nama?></td>
                                <td>
                                    <a href="<?php echo base_url();?>index.php/jenis_perawatan/edit?id=<?=$perawatan->id?>">Edit</a>
                                    <a href="<?php echo base_url();?>index.php/jenis_perawatan/delete?id=<?=$perawatan->id?>"
                                    onclick="if(!confirm('Anda Yakin Hapus Jenis Perawatan dengan ID <?=$perawatan->id?>?')) {return false}">Delete</a>
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