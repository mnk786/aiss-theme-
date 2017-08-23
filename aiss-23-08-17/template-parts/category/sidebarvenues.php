<?php
$args = array(
	'posts_per_page'   => -1, // -1 here will return all posts
	'post_type'        => 'venues', //your custom post type
	'post_status'      => 'publish',
	"orderby"   => "ID",
	"order"     => "ASC"
);
$venues = new WP_Query( $args );
?>

<div class="left-menus" id=""><!-- left menus start here -->
	<div class="">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="left-menus-back">
				<ul class="main-list">
					<li>
						<a href="">
							<?php echo esc_html( ucfirst('Venues') ); ?>
						</a>
						<?php if( $venues->have_posts() ) :?>

							<ul class="child-list">
								<?php  while ($venues->have_posts()) : $venues->the_post();
								printf('<li><a href="%s">%s</a></li>',
										get_permalink(get_the_ID()),
									get_the_title());
								endwhile; ?>
							</ul>
						<?php endif;
						wp_reset_postdata();
						?>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div><!-- left menus end here -->