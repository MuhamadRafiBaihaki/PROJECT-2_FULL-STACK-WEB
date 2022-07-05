
<!--====== SLIDER PART START ======-->

    
    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center ">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="<?php echo base_url(); ?>assets/images/slider/11.jpg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>-50% <br> OFF</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Welcome</span> to <span>DXR Rent Car</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                    
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="<?php echo base_url();?>assets/images/slider/33.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>-20% <br> OFF</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Winter</span> Sale! is <span>Here</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                        
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="<?php echo base_url();?>assets/images/slider/22.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>FREE<br> QUOTE</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Get</span> a Free <span>Quote</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                        <!-- <a class="main-btn" href="#contact" data-animation="fadeInUp" data-delay="1.5s">Contact Us <i class="lni-chevron-right"></i></a> -->
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container fluid -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== DISCOUNT PRODUCT PART START ======-->
    
    <section id="discount-product" class="discount-product pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="<?php echo base_url();?>assets/images/discount-product/product-11.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <!-- <h4 class="content-title mb-15">High-quality furnitures <br> For your home</h4> -->
                            
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="<?php echo base_url();?>assets/images/discount-product/product-22.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Hot Offer <br> Discount up to 80%</h4>
                            
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== DISCOUNT PRODUCT PART ENDS ======-->
   
    <!--====== PRODUCT PART START ======-->
    
    <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                
                <?php 
                    foreach($list_mobil as $show){
                ?>
                <div class="col-md-4 mb-5">
                <div class="single-services text-center">
                    <div class="single-product-items">
                        <div class="product-item-image">

                            

                            <?php 
                                if(!$this->session->has_userdata('USERNAME')){
                            ?>

                               <a href="<?php echo base_url();?>index.php/login">

                            <?php 
                            }else{
                            ?>
                               <a href="<?php echo base_url();?>index.php/view?id=<?=$show->id?>">
                            <?php 
                            }
                            ?>
                            
                            <img src="<?php echo base_url();?>assets/images/product/<?= $show->foto ?>" alt="Product"></a>
                            <div class="product-discount-tag">
                                <p><?= $show->tahun?></p>
                            </div>
                        </div>
                        <div class="product-item-content text-center mt-30">
                            <h5 class="product-title">
                                
                            
                            <?php 
                                if(!$this->session->has_userdata('USERNAME')){
                            ?>

                            <a href="<?php echo base_url();?>index.php/login"><?= $show->nama?></a>

                            <?php 
                            }else{
                            ?>
                            <a href="<?php echo base_url();?>index.php/view?id=<?=$show->id?>"><?= $show->nama?></a>
                            <?php 
                            }
                            ?>
                            
                            </h5>
                            
                            <!-- <div class="section-title pb-30">
                                <h5 class="mb-15">=========</h5>
                            </div> -->

                            <div class="footer-copyright mt-15 mb-15">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="copyright text-center">
                            
                                        </div> 
                                    </div>
                                </div> 
                            </div> 

                            <p><?= $show->deskripsi ?></p>

                            <ul class="rating">
                                <li><i class="lni-star-filled"></i></li>
                                <li><i class="lni-star-filled"></i></li>
                                <li><i class="lni-star-filled"></i></li>
                                <li><i class="lni-star-filled"></i></li>
                            </ul>
                            
                            <span class="regular-price"><?= number_format($show->biaya_sewa,0,".",".");?></span>
                            <!-- <span class="discount-price">$69.00</span> -->
                            <br>
                            

                            <?php 
                                if(!$this->session->has_userdata('USERNAME')){
                            ?>

                            <a class="main-btn" href="<?php echo base_url();?>index.php/login" 
                            data-animation="fadeInUp" data-delay="1.5s">BOOK NOW</a>

                            <?php 
                            }else{
                            ?>
                               <a class="main-btn" href="<?php echo base_url();?>index.php/view?id=<?=$show->id?>" 
                            data-animation="fadeInUp" data-delay="1.5s">BOOK NOW</a>
                            <?php 
                            }
                            ?>
                        </div>
                    </div> 
                </div>
                </div>
                <?php
                    }
                ?>
                
            </div> 
        </div> 
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    
    <section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5 class="mb-15">Tutorial</h5>
                        <h3 class="title mb-15">How To Rent The Car</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-left mt-45">
                        <div class="services">
                            <img src="<?php echo base_url();?>assets/images/services/services.jpg" alt="">

                            <?php 
                                if(!$this->session->has_userdata('USERNAME')){
                            ?>

                                <a href="<?php echo base_url();?>index.php/login" class="main-btn mt-30">Rent Now <i class="lni-chevron-right"></i></a>

                            <?php 
                            }else{
                            ?>
                               <a href="#product" class="main-btn mt-30">Rent Now <i class="lni-chevron-right"></i></a>
                            <?php 
                            }
                            ?>
                            
                            
                            
                        </div> <!-- services btn -->
                    </div> <!-- services left -->
                </div>
                <div class="col-lg-6">
                    
                    <div class="services-right mt-45">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-8">
                                <div class="single-services text-center">
                                    <div class="services-icon">
                                        <i class="lni-grid-alt"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Create an Account</h5>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p> -->
                                    </div>
                                </div> <!-- single services -->
                                
                                <div class="single-services text-center mt-30">
                                    <div class="services-icon">
                                        <i class="lni-ruler-pencil"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Login</h5>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p> -->
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <div class="single-services text-center mt-30">
                                    <div class="services-icon">
                                        <i class="lni-customer"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Choose Car</h5>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p> -->
                                    </div>
                                </div> <!-- single services -->
                                
                                <div class="single-services text-center mt-30">
                                    <div class="services-icon">
                                        <i class="lni-support"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Come and Pay at Showroom</h5>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p> -->
                                    </div>
                                </div> <!-- single services -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- services right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->

    <!--====== SHOWCASE PART START ======-->
    

    
    <!--====== SHOWCASE PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    
    <section id="team" class="team-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">Our Expert Team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="<?php echo base_url();?>assets/images/team/t-1.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">M Rafi Baihaki</a></h4>
                            <span>Full Stack Developer</span>
                            <ul class="social mt-15">
                                <!-- <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li> -->
                                <li><a href="https://www.instagram.com/rafibaihaki33/"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="<?php echo base_url();?>assets/images/team/t-2.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Ashrof Firzatullah</a></h4>
                            <span>UI Designer</span>
                            <ul class="social mt-15">
                                <!-- <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li> -->
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="<?php echo base_url();?>assets/images/team/t-3.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">M Daffa Ariftama</a></h4>
                            <span>UX Designer</span>
                            <ul class="social mt-15">
                                <!-- <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li> -->
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="<?php echo base_url();?>assets/images/team/t-4.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Muhamad Iqbal</a></h4>
                            <span>Graphic Designer</span>
                            <ul class="social mt-15">
                                <!-- <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li> -->
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    
    <section id="testimonial" class="testimonial-area pt-200">
        <div class="testimonial-bg bg_cover" style="background-image: url(<?php echo base_url();?>assets/images/testimonial/ts-bg.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="testimonial-content">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <i class="lni-quotation"></i>
                                <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua.</p>
                                <h6 class="title">Roma De Suza</h6>
                                <span>- CEO, Tesla</span>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <i class="lni-quotation"></i>
                                <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua.</p>
                                <h6 class="title">Lisa White</h6>
                                <span>- Designer, Walmart</span>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial active -->
                    </div> <!-- testimonial content -->
                </div>
                <div class="col-lg-7 col-md-4">
                    <div class="testimonial-play text-right d-none d-md-block">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=vlDOjTaaEdA"><i class="lni-play"></i></a>
                    </div> <!-- testimonial play -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TESTIMONIAL PART ENDS ======-->


