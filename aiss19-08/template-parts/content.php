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
<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-delay=".2s">
                    <div class="single-post">
                        

                        <figure class="effect-bubba">
                            
                                   <?php echo anza_post_featured_image_by_class($post->ID,'anza_blog_grid') ?>
                                    <figcaption>
                                       <div class="post-link">
                            <ul>
                                <li><a href="<?php echo anza_page_post_url($post->ID) ?>"><i class="fa fa-link"></i></a></li>
                                
                            </ul>
                        </div>
                                    </figcaption>
                                </figure>
                        
                        <div class="post-description">
                            <h4><?php if(is_sticky($post->ID)) {	?><span class="sticky_grid"><i class="fa fa-tag" aria-hidden="true"></i><?php esc_html_e('Featured','anza'); ?></span><?php } ?><a href="<?php echo anza_page_post_url($post->ID) ?>"><?php the_title()?></a></h4>
                            <div class="post-meta">                                
                                <a href="<?php echo anza_page_archive_url($post->ID);?>"><i class="fa fa-calendar"></i><?php echo anza_page_post_date($post->ID);?></a>
                                <a href="#"><i class="fa fa-comments"></i><?php anza_page_post_total_comments($post->ID); ?> <?php esc_html_e('Comment(s)','anza'); ?></a>
                                <a href="<?php echo anza_page_post_author_url($post->ID);?>"><i class="fa fa-user"></i><?php echo anza_page_post_author($post->ID); ?></a>                              
                            </div>
                            <div class="post-excerpt break-words wow fadeInDown">
                             <?php echo   anza_page_post_excerpt($post->ID); ?>
                                
                                
                               </div>
                            <a href="<?php echo anza_page_post_url($post->ID) ?>" class="read-more wow fadeInDown" data-wow-delay=".6s"><?php esc_html_e('Read more','anza'); ?></a>
                        </div>
                    </div>
                </div>

	
		

