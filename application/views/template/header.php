<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Furnish - Furniture and Decor Website Template</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/dxrr.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/LineIcons.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url();?>assets/images/logoo.png" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="<?php echo base_url();?>index.php/welcome">Home</a>
                                </li>

                                <?php
                                    if($this->session->userdata('ROLE')=='administrator') {
                                ?>

                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="<?php echo base_url();?>index.php/kelola_user">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="<?php echo base_url();?>index.php/kelola_mobil">Mobil</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="<?php echo base_url();?>index.php/kelola_merk">Merk</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="<?php echo base_url();?>index.php/jenis_perawatan">Jenis Perawatan</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="<?php echo base_url();?>index.php/perawatan_mobil">Perawatan Mobil</a>
                                </li>

                                <?php
                                    }else {
                                ?>

                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#service">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#team">Team</a>
                                </li>

                                <?php
                                    }
                                ?>


                                <?php
                                    if(!$this->session->has_userdata('USERNAME')){
                                ?>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="<?php echo base_url();?>index.php/login">LOGIN</a>
                                </li>
                                <?php
                                    }else{
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle" data-scroll-nav="0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $this->session->userdata('USERNAME');?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#"><?php echo "User ID Anda: ".$this->session->userdata('ID'); ?></a>
                                        <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo base_url();?>index.php/logout">LOGOUT</a>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->