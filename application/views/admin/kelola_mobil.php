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
                        <h5>Kelola Mobil</h5>
                        <br>
                        <a href="<?php echo base_url();?>index.php/kelola_mobil/form"><button type="button" class="btn btn-success">Tambah Mobil</button></a>
                        <br>
                        <br>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nopol</th>
                                <th scope="col">Warna</th>
                                <th scope="col">Biaya Sewa</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">CC</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Merk ID</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $number = 1;
                                foreach($list_mobil as $mobil) {
                            ?>

                            <tr>
                                <th scope="row"><?=$number?></th>
                                <td><?=$mobil->id?></td>
                                <td><?=$mobil->nopol?></td>
                                <td><?=$mobil->warna?></td>
                                <td><?=$mobil->biaya_sewa?></td>
                                <td><?=$mobil->deskripsi?></td>
                                <td><?=$mobil->cc?></td>
                                <td><?=$mobil->tahun?></td>
                                <td><?=$mobil->merk_id?></td>
                                <td>
                                    <div class="container">
                                        <div class="col-md-4 px-0">

                                            <?php 
                                                $filegambar = base_url('/assets/images/product/'.$mobil->foto);

                                                $array = get_headers($filegambar);
                                                $string = $array[0];
                                                if(strpos($string, "200"))
                                                {
                                                    echo '<img src="'.$filegambar.'" alt="foto" class="img-fluid"> ';
                                                }
                                                else
                                                {
                                                    echo '<img src"'.base_url('/assets/images/product/noimage.jpg').'" alt="foto1" class="img-fluid">';
                                                }
                                            ?>

                                            <br>
                                            <br>
                                            <?php echo form_open_multipart('kelola_mobil/upload');?>
                                                <input type="hidden" name="nopol" value="<?=$mobil->nopol?>">
                                                <input type="file" name="fotomobil">
                                                <br>
                                                <br>
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            <?php echo form_close()?>

                                           
                                        
                                        </div>
                                    </div>
                                    
                                </td>
                                <td><?=$mobil->nama?></td>
                                <td>
                                    <a href="<?php echo base_url();?>index.php/kelola_mobil/edit?id=<?=$mobil->id?>">Edit</a>
                                    <a href="<?php echo base_url();?>index.php/kelola_mobil/delete?id=<?=$mobil->id?>"
                                    onclick="if(!confirm('Anda Yakin Hapus Mobil dengan ID <?=$mobil->id?>?')) {return false}">Delete</a>
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