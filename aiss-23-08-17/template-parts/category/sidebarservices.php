<?php

$taxonomy_name = 'service_category';
$args = [
	'taxonomy'     => 'service_category',
	'parent'        => 0,
	'hide_empty'    => false
];
$terms = get_terms( $args );

$term_slug = get_query_var( 'term' );
//echo $term_slug;
//$taxonomyName = get_query_var( 'taxonomy' );
//echo $taxonomyName;
//echo( get_term_link($term_slug,$taxonomy_name));
//exit;

?>

<div class="left-menus" id=""><!-- left menus start here -->
	<div class="">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="left-menus-back">
				<ul class="main-list">
					<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
					<?php  foreach ( $terms as $term ) {
							$term_link = get_term_link( $term );
							$active = (get_term_link($term_slug,$taxonomy_name) == $term_link)? 'class="active"':'';
					    ?>
					<li <?php echo $active; ?> >
						<a href="<?php echo esc_url( $term_link ); ?>">
							<?php echo esc_html( $term->name ); ?>
						</a>
						<?php

						$args = [
							'taxonomy'     => 'service_category',
							'parent'        => $term->term_id,
							'hide_empty'    => false
						];
						$term_children = get_terms( $args );
                        //$term_children = get_term_children( $term->term_id , $taxonomy_name );

                        ?>
						<?php if ( ! empty( $term_children ) && ! is_wp_error( $term_children ) ){?>
							<ul class="child-list">
								<?php  foreach ( $term_children as $term_child ) {
									$term_child_link = get_term_link( $term_child );
									$active = (get_term_link($term_slug,$taxonomy_name) == $term_child_link)? 'class="active"':'';
									?>
									<?php echo '<li '.$active.'><a href="'.esc_url( $term_child_link ).'">' . $term_child->name . '</a>';
									$args = [
										'taxonomy'     => 'service_category',
										'parent'        => $term_child->term_id,
										'hide_empty'    => false
									];
									$term_sub_children = get_terms( $args );
									if ( ! empty( $term_sub_children ) && ! is_wp_error( $term_sub_children ) )
									{
                                            echo '<ul class="sub-child">';
	                                               foreach ( $term_sub_children as $term_sub_child )
	                                               {
		                                               $term_sub_child_link = get_term_link( $term_sub_child );
		                                               $active = (get_term_link($term_slug,$taxonomy_name) == $term_sub_child_link)? 'class="active"':'';
		                                               echo '<li '.$active.'><a href="' . esc_url( $term_sub_child_link ) . '">' . $term_sub_child->name . '</a></li>';
	                                               }
                                       echo '</ul>';
									}
									echo '</li>';
                                        } ?>

							</ul>
							<?php }
					wp_reset_postdata();?>
					</li>
					<?php } endif;
					wp_reset_postdata();
					?>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div><!-- left menus end here -->