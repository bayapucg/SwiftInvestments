<?php include('header.php'); ?>


<section class="contactus-bg header-style">
    <div class="cu-bg-overlay pt-5 pb-5">
        <div class="container text-center pt-5 pb-5">
            <h1 class="pt-5 mt-5">Contact Us</h1>
            <ul>
                <li><a href="<?php echo base_url('User') ;?>">home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>



<!--==========================
Contact Us
============================-->
<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">
        <div class="row contact-info">
            
            <div class="col-md-8">
                
        <div class="section-heading">
                    <h2>Contact <span >us</span></h2>
                    <span>
                        <img src="<?php echo base_url(); ?>assets/vendor/img/head-icon.png" alt="icon">
                    </span>
               
			</div>
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="<?php echo base_url('preview/contactpost'); ?>" method="post" role="form" class="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-left"><button type="submit" name="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 contact-details">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Address</h3>
                    <address>
                        <?php echo isset($contactus_details['address'])?$contactus_details['address']:''; ?></address>
                </div>
<!--
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+155895548855">
                            <?php echo isset($contactus_details['phone'])?$contactus_details['phone']:''; ?></a></p>
                </div>
-->
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">
                            <?php echo isset($contactus_details['email'])?$contactus_details['email']:''; ?></a></p>
                </div>
            </div>
            
        </div>

    </div>
</section><!-- #contact -->


<?php include('footer.php'); ?>