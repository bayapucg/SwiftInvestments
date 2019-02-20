<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi Templete'; ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo isset($logo_details['keywords'])?$logo_details['keywords']:'Prachatech'; ?>" name="keywords">
    <meta content="<?php echo isset($logo_details['description'])?$logo_details['description']:'Prachatech'; ?>" name="description">
    <?php if(isset($logo_details['favicon']) && $logo_details['favicon']!=''){ ?>
    <link href="<?php echo base_url('assets/logo/'.$logo_details['favicon']); ?>" rel="icon">
    <?php }else{ ?>
    <link href="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" rel="icon">
    <?php } ?>
    <!-- Favicons -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">

</head>

<body>

    <div style="background:#f5f5f5;padding:15px 10px;border-top:4px solid #fccd4d;height:125px;">
    <div class="container">
    <div class="row">
		<div class="col-md-4 sm-hide">
				<div class="row">
				<div class="col-md-3">
					<div style="background:#fccd4d;height:60px;width:60px;border-radius:50%;text-align:center;line-height:73px;color:#fff;">
					<i style="font-size:40px;" class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-md-9">
					<p><?php echo isset($contactus_details['address'])?$contactus_details['address']:''; ?></p>
				</div>
				
			</div>
		</div>
		<div class="col-md-4">
			  <?php if(isset($logo_details['image']) && $logo_details['image']!=''){ ?>
                    <img style="height:80px;width:auto;margin:0 auto;" src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="<?php echo isset($logo_details['org_image'])?$logo_details['org_image']:''; ?>">
                    <?php }else{ ?>
                    <img style="height:80px;width:auto; margin:0 auto;" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" alt="Logo">
                    <?php } ?>
		</div>
		<div class="col-md-4 sm-hide">
			<h4 style="margin-bottom:5px">GET IN TOUCH</h4>
			<div><i class="fa fa-envelope" aria-hidden="true"></i> : <?php echo isset($contactus_details['email'])?$contactus_details['email']:''; ?></div>
			<div><i class="fa fa-globe" aria-hidden="true"></i>
 : swiftInvestments.com</div>
		</div>
	</div>
	</div>
	</div>
    <header id="header" class="">
			
        <div class="">
            <div class="bg">
                <!--<div id="logo" class="pull-left logo-header">
                    <?php if(isset($logo_details['image']) && $logo_details['image']!=''){ ?>
                    <img class="" src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="<?php echo isset($logo_details['org_image'])?$logo_details['org_image']:''; ?>">
                    <?php }else{ ?>
                    <img class="" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" alt="Logo">
                    <?php } ?>
                </div>-->

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="<?php if($active_status==1){echo 'menu-active';}?>"><a href="<?php echo base_url('User') ;?> ">Home</a></li>
                        <li class="<?php if($active_status==2){echo 'menu-active';}?>"><a href="<?php echo base_url('About_Us') ;?>">About Us</a></li>
                        <li class="<?php if($active_status==4){echo 'menu-active';}?>"><a href="<?php echo base_url('Our_Services') ;?>">Services</a></li>
                        <li ><a href="<?php echo base_url('User') ;?>#testimonials">Team</a></li>
                        <li class="<?php if($active_status==3){echo 'menu-active';}?>"><a href="<?php echo base_url('Contact_Us') ;?>">Contact Us</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
