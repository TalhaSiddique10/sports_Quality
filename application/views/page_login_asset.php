<?php
if ($this->session->has_userdata('user_id')) {
    redirect('Main/dashboard');
} else {
     ?>


<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.2
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Login - - Forward Sports Pvt. Ltd.
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/app.bundle.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="<?php echo base_url(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/page-login.css">
    </head>
    <body>
        <div class="blankpage-form-field">

        <div class="container mt-5">
      
      <?php if ($this->session->flashdata('info')) { ?>
    <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      <?php echo $this->session->flashdata('info'); ?>
                    </div>
                  </div>
                  <?php } ?>
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">Forward Sports</span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">

            <!-- Updated this section -->
            <form method="POST" name="form1" class="login100-form validate-form" action="<?php echo base_url(
                'index.php/Main/process_login'
            ); ?>">
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
                        <span class="help-block">
                            Your unique username to app
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                        <span class="help-block">
                            Your password
                        </span>
                    </div>
                 <!--   <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                        </div>
                    </div>-->
                    <button type="submit" class="btn btn-default float-right">Secure login</button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
              <!--   <a href="#"><strong>Recover Password</strong></a> | <a href="#"><strong>Register Account</strong></a> -->
            </div>
        </div>
        <div class="login-footer p-2">
            <div class="row">
              <!--   <div class="col col-sm-12 text-center">
                    <i><strong>System Message:</strong> You were logged out from 198.164.246.1 on Saturday, March, 2017 at 10.56AM</i>
                </div> -->
            </div>
        </div>
        <video poster="<?php echo base_url(); ?>/assets/img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted loop>
            <source src="<?php echo base_url(); ?>/assets/media/video/cc.webm" type="video/webm">
            <source src="<?php echo base_url(); ?>/assets/media/video/cc.mp4" type="video/mp4">
        </video>
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
        <!-- Page related scripts -->
    </body>
</html>
<?php
}

?>
