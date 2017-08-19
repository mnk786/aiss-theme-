<?php
/*
* Template part for displaying menu at header
*
* @package Aiss
*
*/
?>
<header class="top">
    <div class="container">
        <div class="back">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php  echo aiss_logo(); ?>" class="img-responsive"></a>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 left-col">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only"><?php esc_html_e('Toggle navigation','aiss');?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        if (has_nav_menu('primary')) {
                            wp_nav_menu( array( 'theme_location' => 'primary','menu_class'=>'nav navbar-nav sm','container'=>'','walker' => new anza_navigation_walker ) );
                        }
                        ?>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="social">
            <ul>
                <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/social1.png"> </a> </li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/social2.png"> </a> </li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/social3.png"> </a> </li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/social4.png"> </a> </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</header>
<header>
    <div class="container">
        <div class="back">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php  echo aiss_logo(); ?>" class="img-responsive"></a>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 left-col">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu( array( 'theme_location' => 'primary','menu_class'=>'nav navbar-nav sm','container'=>'','walker' => new anza_navigation_walker ) );
                            }
                            ?>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="social">
            <ul>
                <li><a href="<?php echo of_get_option('facebook_links', 'no entry'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/social1.png"> </a> </li>
                <li><a href="<?php echo of_get_option('google_links', 'no entry'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/social2.png"> </a> </li>
                <li><a href="<?php echo of_get_option('twitter_links', 'no entry'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/social3.png"> </a> </li>
                <li><a href="<?php echo of_get_option('linkedin_links', 'no entry'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/social4.png"> </a> </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</header>
