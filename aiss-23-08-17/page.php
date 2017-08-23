<?php get_header();?>
<?php get_template_part('template-parts/header/banner','banner'); ?>
<section class="inner-content">
	<div class="container">
		<?php get_template_part('template-parts/category/sidebar','sidebar'); ?>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 pull-right">
                    <div class="content-part">
	                    <?php if(have_posts()): ?>
	                    <?php while(have_posts()): the_post(); ?>
						<div class="content-part-text">
							<h2>
								<?php the_title(); ?>
							</h2>
							<?php the_content(); ?>

							<div class="clear"></div>
						</div>
		                    <?php  endwhile; ?>
	                    <?php endif; ?>
						<div class="clear"></div>

                       <!-- <div class="parallal-img-one" style="background-image: url(<?php /*echo get_template_directory_uri() */?>/images/p4_pic2.jpg);">
                        </div>-->
					</div>
					<div class="clear"></div>
				</div>

	</div>

    <!--<div class="parallal-img-two" style="background-image: url(<?php /*echo get_template_directory_uri() */?>/images/p2_pic2.jpg);">
    </div>-->
	<div class="clear"></div>
</section>
<?php get_footer(); ?>
