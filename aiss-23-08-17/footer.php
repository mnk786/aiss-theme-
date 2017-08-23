<div class="footer">
<footer>
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow zoomIn"  data-wow-duration="1s" data-wow-offset="200">
            <h2>Contact</h2>
            <p>E-mail:	<?php echo of_get_option('email_contact', 'no entry'); ?></p>
            <p> Phone:	<?php echo of_get_option('tel_contact', 'no entry'); ?></p>
            <p>Fax:	<?php echo of_get_option('fax_contact', 'no entry'); ?></p>
            <p>Mobile:	<?php echo of_get_option('mobile_contact', 'no entry'); ?></p>
            <p><?php echo of_get_option('address_contact', 'no entry'); ?></p>

            <p><?php echo of_get_option('pbox_contact', 'no entry'); ?></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12  wow zoomIn" data-wow-duration="1s" data-wow-offset="300">
            <a href="#" class="logo">
	            <?php if ( of_get_option('contact_banner_image') ) { ?>
                <img src="<?php echo get_template_directory_uri() ?>/images/transparent.png"  data-src="<?php echo of_get_option('contact_banner_image'); ?>" class="img-responsive">
	            <?php } ?>
            </a>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 wow zoomIn" data-wow-duration="1s" data-wow-offset="200">
            <h2>Map</h2>
            <img src="<?php echo get_template_directory_uri() ?>/images/transparent.png"  data-src="<?php echo get_template_directory_uri() ?>/images/map.png"  class="img-responsive map  " >
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="bottom-nav">
	    <?php
	    wp_nav_menu( array(
		    'menu'              => 'footer-menu',
		    'theme_location'    => 'footer-menu',
		    'container'=> '',
		    'menu_class' =>'','menu_id' =>''
	    ));

	    ?>
    </div>
    <a href="#">
        <div class="copy">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p>© 2018 aiswimschools.com, All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p class="company">Designed and Developed by <span> AdviceTech</span></p>
                </div>
            </div>
        </div>
    </a>

</footer>
</div>
<?php wp_footer();?>
</body>
</html>