<?php include('header.php'); ?>

<!--==========================
Intro Section
============================-->

<?php if(isset($slider_details) && count($slider_details)>0){ ?>
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <?php $cnt=1;foreach($slider_details as $list){ ?>
                <input type="hidden" name="slider_id[]" id="slider_id" value="<?php echo isset($list['s_id'])?$list['s_id']:''; ?>">
                <?php if($cnt==1){ ?>
                <div class="carousel-item active">
                    <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>
                                <?php echo isset($list['text'])?$list['text']:''; ?>
                            </h2>

                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>
                                <?php echo isset($list['text'])?$list['text']:''; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php $cnt++;} ?>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section><!-- #intro -->
<?php } ?>

<main id="main">

    <!--==========================
    About Us
    ============================-->
    <?php if(isset($aboutus_details) && count($aboutus_details)>0){ ?>
    <section id="about">
        <div class="container">
			<div class="section-heading">
                    <h2>About <span>Us</span></h2>
                    <span>
                        <img src="<?php echo base_url(); ?>assets/vendor/img/head-icon.png" alt="icon">
                    </span>
 <p>
                        <?php echo isset($aboutus_details['parahraph'])?$aboutus_details['parahraph']:''; ?>
                    </p>                
			</div>
          
            
        </div>
    </section><!-- #about -->
    <?php } ?>

    
    <!--==========================
    Our Services
    ============================-->
    <?php if(isset($gallery_details) && count($gallery_details)>0){ ?>
    <section id="portfolio" class="section-bg" style=" background: url(<?php echo base_url('assets/vendor/img/servicesbac.png');?>);">
        <div class="container">
			<div class="section-heading">
                    <h2>Our <span style="color:#fff">Services</span></h2>
                    <span>
                        <img src="<?php echo base_url(); ?>assets/vendor/img/head-icon.png" alt="icon">
                    </span>
               
			</div>
            
            <div class="row portfolio-container">
                <?php foreach($gallery_details as $list){ ?>
                <input type="hidden" name="gallery_id[]" id="gallery_id" value="<?php echo isset($list['g_id'])?$list['g_id']:''; ?>">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php echo base_url('assets/gallery/'.$list['image']); ?>" class="img-fluid" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                            <a href="<?php echo base_url('assets/gallery/'.$list['image']); ?>" data-lightbox="portfolio" data-title="<?php echo isset($list['text'])?$list['text']:''; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><?php echo isset($list['text'])?$list['text']:''; ?></h4>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- #portfolio -->
    <?php } ?>

    
    
    
    
    
    <!--==========================
    Our Team
    ============================-->
    <?php if(isset($testimonials_details) && count($testimonials_details)>0){ ?>
		<?php //echo '<pre>';print_r($testimonials_details);exit; ?>
        <section id="testimonials" class="">
            <div class="container">
			<div class="section-heading">
				<h2>Our <span>Team</span></h2>
				<span>
					<img src="<?php echo base_url(); ?>assets/vendor/img/head-icon.png" alt="icon">
				</span>
			</div>
             
                <div class="owl-carousel testimonials-carousel">
                    <?php foreach($testimonials_details as $list){ ?>
                    <div class="testimonial-item">
                        <img src="<?php echo base_url('assets/testimonial/'.$list['image']); ?>" class="testimonial-img" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                        <h3>
                            <?php echo isset($list['name'])?$list['name']:''; ?>
                        </h3>
                        <h4>
                            <?php echo isset($list['designation'])?$list['designation']:''; ?>
                        </h4>
                        <p>
                            <img src="<?php echo base_url(); ?>assets/vendor/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            <?php echo isset($list['paragraph'])?$list['paragraph']:''; ?>.
                            <img src="<?php echo base_url(); ?>assets/vendor/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section><!-- #testimonials -->
        <?php } ?>


</main>

<?php include('footer.php'); ?>