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
                        <h5>Kelola Merk</h5>
                        <br>
                        <a href="<?php echo base_url();?>index.php/kelola_merk/form"><button type="button" class="btn btn-success">Tambah Merk</button></a>
                        <br>
                        <br>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $number = 1;
                                foreach($list_merk as $merk) {
                            ?>

                            <tr>
                                <th scope="row"><?=$number?></th>
                                <td><?=$merk->id?></td>
                                <td><?=$merk->nama?></td>
                                <td><?=$merk->produk?></td>
                                <td>
                                    <a href="<?php echo base_url();?>index.php/kelola_merk/edit?id=<?=$merk->id?>">Edit</a>
                                    <a href="<?php echo base_url();?>index.php/kelola_merk/delete?id=<?=$merk->id?>"
                                    onclick="if(!confirm('Anda Yakin Hapus Merk dengan ID <?=$merk->id?>?')) {return false}">Delete</a>
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