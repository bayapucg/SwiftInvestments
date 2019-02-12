    <!--==========================
    Footer
    ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4  footer-info">
                        <div id="logo" class="pull-left logo-header">
                            <?php if($logo_details['image']==''){ ?>
                            <img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo" class="img-fluid py-5">
                            <?php }else{ ?>
                            <img src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="logo" class="img-fluid py-5">
                            <?php } ?>
                            <p>
                                <?php echo isset($contactus_details['address'])?$contactus_details['address']:''; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('User') ;?>">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('About_Us') ;?>">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('Our_Services') ;?>">Services</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('Contact_Us') ;?>">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Phone:</strong>
                            <?php echo isset($contactus_details['phone'])?$contactus_details['phone']:''; ?><br>
                            <strong>Email:</strong>
                            <?php echo isset($contactus_details['email'])?$contactus_details['email']:''; ?><br>
                        </p>

                        <div class="social-links">
                            <a href="<?php echo isset($contactus_details['twitter_link'])?$contactus_details['twitter_link']:'#'; ?>" target="_balnk" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo isset($contactus_details['facebook_link'])?$contactus_details['facebook_link']:'#'; ?>" target="_balnk" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo isset($contactus_details['instagram_link'])?$contactus_details['instagram_link']:'#'; ?>" target="_balnk" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo isset($contactus_details['google_plus'])?$contactus_details['google_plus']:'#'; ?>" target="_balnk" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="<?php echo isset($contactus_details['linkedIn_link'])?$contactus_details['linkedIn_link']:'#'; ?>" target="_balnk" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>
                    <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi'; ?></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="https://prachatech.com/">prachatech</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url(); ?>assets/vendor/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/superfish/hoverIntent.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/superfish/superfish.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url(); ?>assets/vendor/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url(); ?>assets/vendor/js/main.js"></script>

</body>

</html>
<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
    <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
    <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>