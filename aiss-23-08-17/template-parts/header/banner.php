<section class="inner-header"><!-- inner header start here -->
	<div class="container">
		<div class="inner-header-img">
			<?php if ( of_get_option('category_banner_image') ) { ?>
				<img src="<?php echo get_template_directory_uri() ?>/images/transparent.png"  data-src="<?php echo of_get_option('category_banner_image'); ?>" class="img-responsive">
			<?php } ?>
		</div>
	</div>
</section>