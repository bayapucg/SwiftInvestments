<?php include('header.php'); ?>


<section class="services-bg header-style">
    <div class="au-bg-overlay pt-5 pb-5">
        <div class="container text-center pt-5 pb-5">
            <h1 class="pt-5 mt-5">Our Services</h1>
            <ul>
                <li><a href="<?php echo base_url('User') ;?>">home</a></li>
                <li>Our Services</li>
            </ul>
        </div>
    </div>
</section>


<!--==========================
Our Services
============================-->
<?php if(isset($gallery_details) && count($gallery_details)>0){ ?>
<section id="portfolio" class="section-bg">
    <div class="container">

        <div class="section-header">
            <h3 class="section-title">Our Services</h3>
        </div>
        <div class="row portfolio-container">
            <?php foreach($gallery_details as $list){ ?>
            <input type="hidden" name="gallery_id[]" id="gallery_id" value="<?php echo isset($list['g_id'])?$list['g_id']:''; ?>">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url('assets/gallery/'.$list['image']); ?>" class="img-fluid" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                        <a href="<?php echo base_url('assets/gallery/'.$list['image']); ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4>
                            <?php echo isset($list['text'])?$list['text']:''; ?>
                        </h4>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- #portfolio -->
<?php } ?>


<?php include('footer.php'); ?>