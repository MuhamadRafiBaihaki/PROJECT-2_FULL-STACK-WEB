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
                        <h5>Kelola User</h5>

                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Last Login</th>
                                <th scope="col">Status</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $number = 1;
                                foreach($list_user as $user) {
                            ?>

                            <tr>
                                <th scope="row"><?=$number?></th>
                                <td><?=$user->username?></td>
                                <td><?=$user->password?></td>
                                <td><?=$user->email?></td>
                                <td><?=$user->created_at?></td>
                                <td><?=$user->last_login?></td>
                                <td><?=$user->status?></td>
                                <td><?=$user->role?></td>
                                <td>
                                    <a href="<?php echo base_url();?>index.php/kelola_user/edit?id=<?=$user->id?>">Edit</a>
                                    <a href="<?php echo base_url();?>index.php/kelola_user/delete?id=<?=$user->id?>"
                                    onclick="if(!confirm('Anda Yakin Hapus User dengan username <?=$user->username?>?')) {return false}">Delete</a>
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