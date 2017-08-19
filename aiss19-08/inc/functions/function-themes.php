<?php
 /* slider function */
function aiss_slider(){
	global $post;    
	$args = array(
		'post_type'      => 'slider',
		'posts_per_page' => -1,
		'order'          =>'ASC',		
	);    
	$output = '';    
	$slider_query = new WP_Query($args);
	if( $slider_query->have_posts() ) :
	while ($slider_query->have_posts()) : $slider_query->the_post();
	$src =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
	$output .= '<li><img src="'. get_template_directory_uri().'/images/transparent.png"  data-src="'.$src[0].'"> </li>';
	endwhile;
	else:	
	endif;
    //Reset Query
    wp_reset_postdata();
	return $output;
}

function aiss_logo()
{

	            $custom_logo_id = get_theme_mod( 'custom_logo' );
	            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	            return $image[0];

}

function aiss_get_categories()
{


	$args = array("hide_empty" => 0,
	              "type"      => "post",
	              "orderby"   => "name",
	              "order"     => "ASC" );
	$categories = get_categories($args);
	$output = '';
	$i = 1;
	$num = 'one';
	$transitions = 'slideInLeft';
	$speed = '10';
	 foreach ($categories as $category){
		 $taxonomy_image_url = get_option('z_taxonomy_image'.$category->term_id);
		 $size = 'full';
		 if(!empty($taxonomy_image_url)) {
			 $attachment_id = z_get_attachment_id_by_url($taxonomy_image_url);
			 if(!empty($attachment_id)) {
				 $taxonomy_image_url = wp_get_attachment_image_src($attachment_id, $size);
			 }
		 }
	 	if($i == 2 )
	    {
		    $num = 'two';
		    $transitions = 'slideInRight';
			    $speed = '200';
	    }
	    elseif($i == 3 ){
		    $num = 'three';
		    $transitions = 'slideInRight';
		    $speed = '300';
	    }

	 	$output .='<div class="main-box '.$num.' wow '.$transitions.'" data-wow-duration="1s" data-wow-offset="'.$speed.'">
                <a href="">
                    <img src="'.$taxonomy_image_url[0].'" alt="" class="img-responsive" />
                </a>  </div>';
	 	$i++;
}
	wp_reset_postdata();
 return $output;

}
function aiss_home_about(){

	global $post;
	$args = array(
		'post_type'  => 'post', //or a post type of your choosing
		'posts_per_page' => -1,
		"order"     => "ASC",
		'meta_query' => array(
			array(
				'key' => 'meta-box-checkbox',
				'value' => 'true',
	             'compare' => '='

        )
    )
);

	$output = '';
	$i = 1;
	$about_query = new WP_Query($args);
	$output .= '<div class="content wow zoomIn" data-wow-duration="1s" data-wow-offset="300">';
	if( $about_query->have_posts() ) :
		while ($about_query->have_posts()) : $about_query->the_post();
                 if( $i > 2) break;
			$output .='<h2>'.get_the_title().'</h2>
                     '.get_the_content().'
                <a href="#" class="read"><span>Read More</span></a>
            ';
$i++;
			endwhile;
			endif;

			$output .= '<div class="clearfix"></div></div>';
	wp_reset_postdata();
			return $output;
}
function aiss_home_fitness(){

	global $post;
	$args = array(
		'post_type'  => 'post', //or a post type of your choosing
		'posts_per_page' => -1,
		"order"     => "ASC",
		'meta_query' => array(
			array(
				'key' => 'meta-box-fitness',
				'value' => 'true',
	             'compare' => '='

        )
    )
);

	$output = '';
	$fitness_query = new WP_Query($args);
	$output .= '<section class="fitness"><div class="container">';
	if( $fitness_query->have_posts() ) :
		while ($fitness_query->have_posts()) : $fitness_query->the_post();

			$output .='<div class="second-content wow slideInLeft" data-wow-duration="1s" data-wow-offset="300">
                <h2>'.get_the_title().'</h2>
                     '.get_the_content().'
                <a href="#" class="read"><span>Read More</span></a>
            </div>';

			endwhile;
			endif;

			$output .= '</div><div class="clearfix"></div></section>';
	wp_reset_postdata();
			return $output;
}
function aiss_home_swimming(){

	//global $post;
	$args = array(
		'post_type'  => 'post', //or a post type of your choosing
		'posts_per_page' => -1,
		"order"     => "ASC",
		'meta_query' => array(
			array(
				'key' => 'meta-box-summing',
				'value' => 'true',
	             'compare' => '='
        )
    )
);

	$output = '';
	$swimming_query = new WP_Query($args);
     $i =1;
     $class = 'content';

	$output .= '<section class="swimming"><div class="container">';
	if( $swimming_query->have_posts() ) :
		while ($swimming_query->have_posts()) : $swimming_query->the_post();
			if( $i > 2 ) break;
             if($i==2)
             {$class = 'second-content';}
			$output .='<div class="'.$class.' wow zoomIn" data-wow-duration="1s" data-wow-offset="300">
                <h2>'.get_the_title().'</h2>
                     '.get_the_content().'
                <a href="#" class="read"><span>Read More</span></a>
            </div>';
$i++;
			endwhile;
			endif;

			$output .= '<div class="clearfix"></div></section>';
	wp_reset_postdata();
			return $output;
}
function aiss_home_summer(){

	//global $post;
	$args = array(
		'post_type'  => 'post', //or a post type of your choosing
		'posts_per_page' => -1,
		"order"     => "ASC",
		'meta_query' => array(
			array(
				'key' => 'meta-box-summer',
				'value' => 'true',
	             'compare' => '='
        )
    )
);

	$output = '';
	$summer_query = new WP_Query($args);


	$output .= '<section class="summer"><div class="container">';
	if( $summer_query->have_posts() ) :
		while ($summer_query->have_posts()) : $summer_query->the_post();
			$output .='<div class="second-content wow slideInRight" data-wow-duration="1s" data-wow-offset="300">
                <h2>'.get_the_title().'</h2>
                     '.get_the_content().'
                <a href="#" class="read"><span>Read More</span></a>
            </div>';
			endwhile;
			endif;

			$output .= '<div class="clearfix"></div></section>';
	wp_reset_postdata();
			return $output;
}
function aiss_home_company(){

	//global $post;
	$args = array(
		'post_type'  => 'post', //or a post type of your choosing
		'posts_per_page' => -1,
		"order"     => "ASC",
		'meta_query' => array(
			array(
				'key' => 'meta-box-company',
				'value' => 'true',
	             'compare' => '='
        )
    )
);

	$output = '';
	$company_query = new WP_Query($args);

	 $i = 1;
     $read = 'green';

	$output .= '<section class="company"><div class="container">';
	if( $company_query->have_posts() ) :
		while ($company_query->have_posts()) : $company_query->the_post();
	           if( $i > 3 ) break;
	        if( $i == 2)
	        {
	        	$read ='blue';
	        }
	        if( $i == 3)
	        	$read = '';
			$src =  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', true );
			$output .='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-duration="1s" data-wow-offset="300">
              <div class="outer">
                 <div class="img">
                 <img src="<?php echo get_template_directory_uri() ?>/images/transparent.png"  data-src="'.$src[0].'"  class="img'.$i.'"></div></div>
                <h2>'.get_the_title().'</h2>
                     '.get_the_content().'
                <a href="#" class="read '.$read.'"><span>Read More</span></a>
            </div>';
			$i++;
			endwhile;
			endif;

			$output .= '<div class="clearfix"></div></section>';
	wp_reset_postdata();
			return $output;
}
