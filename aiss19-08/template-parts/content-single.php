<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anza
 */
    global $redux_demo;
/*
* blog_details_layout = 1 = full width
* blog_details_layout = 2 = sidebar on left
* blog_details_layout = 3 = sidebar on right
*/
?>
<?php 
        if($redux_demo['blog_details_layout']==1){
            $img_cls = 'anza_blog_full';    
        }
        else if($redux_demo['blog_details_layout']==2){
            $img_cls = 'anza_blog_sidebar';    
        }
        else{
            $img_cls = 'anza_blog_sidebar';    
        }
         ?>   

<div class="post-heading">
    <?php 
    
    echo anza_post_featured_image_by_class(get_the_ID(),$img_cls);
    
    ?>
    <?php
		if ( is_single() ) :
			the_title( '<h4 class="entry-title">', '</h4>' );
		else :
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;
    ?>
    <span>Posted by <a href="<?php echo anza_page_post_author_url(get_the_ID()); ?>" class="tran3s p-color"><?php echo anza_page_post_author(get_the_ID()); ?></a>  at <a href="<?php echo anza_page_archive_url(get_the_ID());?>"><?php echo anza_page_post_date(get_the_ID()); ?></a></span>
	    <?php 
		if(is_sticky()) {			
		?>
		<span class="sticky"><i class="fa fa-tag" aria-hidden="true"></i><?php  esc_html_e('Featured','anza') ?></span>
		<?php } ?>

</div>

	
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'anza' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anza' ),
				'after'  => '</div>',
			) );
		?>

	<footer class="entry-footer">
        <?php //wp_tag_cloud(''); ?>
		<?php anza_entry_footer(); ?>
	</footer><!-- .entry-footer -->