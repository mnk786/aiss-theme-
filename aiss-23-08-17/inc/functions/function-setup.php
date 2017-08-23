<?php

if ( ! function_exists( 'aiss_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aiss_setup() {
  

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    
    // add custom image size for theme
   /* add_image_size( 'anza_blog_grid', 360, 360, true ); //360 pixels wide and 360 pixels in height
    add_image_size( 'anza_blog_sidebar', 730, 9999 );
    add_image_size( 'anza_blog_full', 1110, 9999 );
    add_image_size( 'anza_recent_thumb', 65, 65, true );
    add_image_size( 'anza_work_thumb', 380, 285, true );
    add_image_size( 'anza_testi_thumb', 60, 60, true );
    add_image_size( 'anza_about_img', 555, 9999 );*/
    
    
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'aiss' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'aiss' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'aiss_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.

	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'aiss_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */





/**
* Anza Google Fonts
*/
function aiss_google_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $roboto = _x( 'on', 'Roboto font: on or off', 'anza' );

    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $noto_sans = _x( 'on', 'Noto Sans font: on or off', 'anza' );

    if ( 'off' !== $roboto || 'off' !== $noto_sans ) {
    $font_families = array();

    if ( 'off' !== $roboto ) {
        $font_families[] = 'Roboto:300,400,500,700,900';
    }

    if ( 'off' !== $noto_sans ) {
        $font_families[] = 'Noto Sans:400,700';
    }

    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
        'subset' => urlencode( 'latin,latin-ext' ),
    );

    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}    



/**
 * Setup aiss Styles and Scripts
 */
function aiss_scripts() {

    if (is_admin()) return; // don't dequeue on the backend
    
    /*Load aiss CSS*/
    wp_enqueue_style( 'aiss-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'aiss-google-fonts', aiss_google_fonts_url(), array(), null );
    wp_enqueue_style( 'style-main', esc_url( get_template_directory_uri() ).'/css/style.css' );
    wp_enqueue_style( 'bootstrap', esc_url( get_template_directory_uri() ).'/css/bootstrap.css' );
    wp_enqueue_style( 'bxslider-css', esc_url( get_template_directory_uri() ).'/css/bxslider.css' );
    wp_enqueue_style( 'font-awesome', esc_url( get_template_directory_uri() ).'/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'animate', esc_url( get_template_directory_uri() ).'/css/animate.css' );


    
    
       
    /*Load aiss Scripts*/
   
    
    wp_enqueue_script( 'bootstrap', esc_url( get_template_directory_uri() ) . '/js/bootstrap.js', array(), '', true );
    
	
	
	// Load the html5 shiv.
	wp_enqueue_script( 'html5shiv"', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '3.7.2' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
	
	// Load the html5 html5respond.
	wp_enqueue_script( 'html5respond"', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2' );
	wp_script_add_data( 'html5respond', 'conditional', 'lt IE 9' );
    
	
   // wp_enqueue_script( 'bootstrap-hover-dropdown', esc_url( get_template_directory_uri() ) . '/js/bootstrap-hover-dropdown.js', array(), '', true );


	
	wp_enqueue_script( 'bxslider', esc_url( get_template_directory_uri() ) . '/js/bxslider.js', array(), '', true );
	wp_enqueue_script( 'parallax', esc_url( get_template_directory_uri() ) . '/js/parallax.min.js', array(), '', true );
	wp_enqueue_script( 'wow', esc_url( get_template_directory_uri() ) . '/js/wow.min.js', array(), '', true );


   

  //  wp_enqueue_script( 'form-contact', esc_url( get_template_directory_uri() ) . '/js/form-contact.js', array(), '', true );
    


    wp_enqueue_script( 'scripts-main', esc_url( get_template_directory_uri() ) . '/js/scripts.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'aiss_scripts', 100 );

function aiss_admin_style() {
        wp_register_style( 'admin_css',  esc_url( get_template_directory_uri() ) . '/css/admin.css', false, '1.0.0' );
        wp_enqueue_style( 'admin_css' );
}
add_action( 'admin_enqueue_scripts', 'aiss_admin_style' );





function aiss_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'aiss_excerpt_length', 999 );


function aiss_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'aiss_excerpt_more');


function aiss_posts_per_page_limit( $query ) {
    global $redux_demo;
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( 'projects' ) ) {
        $query->set( 'posts_per_page', $redux_demo['works_display_limit'] );
    }
}
add_action( 'pre_get_posts', 'aiss_posts_per_page_limit' );


function adding_custom_meta_boxes( $post ) {
	add_meta_box(
		'my-meta-box',
		__( 'Home' ),
		'custom_meta_box_markup',
		'post',
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes_post', 'adding_custom_meta_boxes' );

function custom_meta_box_markup($object)
{
	wp_nonce_field(basename(__FILE__), "meta-box-nonce");

	?>
	<p>


		<?php
		$checkbox_value = get_post_meta($object->ID, "meta-box-checkbox", true);

		if($checkbox_value == "")
		{
			?>
			<input name="meta-box-checkbox" type="checkbox" value="true">
			<?php
		}
		else if($checkbox_value == "true")
		{
			?>
			<input name="meta-box-checkbox" type="checkbox" value="true" checked>
			<?php
		}
		?>
		<label for="meta-box-checkbox">About Section</label>
	</p>
	<p>
		<?php
		$checkbox_value1 = get_post_meta($object->ID, "meta-box-fitness", true);

		if($checkbox_value1 == "")
		{
			?>
			<input name="meta-box-fitness" type="checkbox" value="true">
			<?php
		}
		else if($checkbox_value1 == "true")
		{
			?>
			<input name="meta-box-fitness" type="checkbox" value="true" checked>
			<?php
		}
		?>
		<label for="meta-box-fitness">Fitness Section</label>
	</p>
	<p>
		<?php
		$checkbox_value2 = get_post_meta($object->ID, "meta-box-summing", true);

		if($checkbox_value2 == "")
		{
			?>
			<input name="meta-box-summing" type="checkbox" value="true">
			<?php
		}
		else if($checkbox_value2 == "true")
		{
			?>
			<input name="meta-box-summing" type="checkbox" value="true" checked>
			<?php
		}
		?>
		<label for="meta-box-summing">Summing Section</label>
	</p>
	<p>
		<?php
		$checkbox_value4 = get_post_meta($object->ID, "meta-box-summer", true);

		if($checkbox_value4 == "")
		{
			?>
			<input name="meta-box-summer" type="checkbox" value="true">
			<?php
		}
		else if($checkbox_value4 == "true")
		{
			?>
			<input name="meta-box-summer" type="checkbox" value="true" checked>
			<?php
		}
		?>
		<label for="meta-box-summer">Summer Section</label>
	</p>
	<p>
		<?php
		$checkbox_value3 = get_post_meta($object->ID, "meta-box-company", true);

		if($checkbox_value3 == "")
		{
			?>
			<input name="meta-box-company" type="checkbox" value="true">
			<?php
		}
		else if($checkbox_value3 == "true")
		{
			?>
			<input name="meta-box-company" type="checkbox" value="true" checked>
			<?php
		}
		?>
		<label for="meta-box-company">Company Section</label>
	</p>
	<?php
}

function save_custom_meta_box($post_id, $post, $update)
{
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
		return $post_id;

	if(!current_user_can("edit_post", $post_id))
		return $post_id;

	if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

	$slug = "post";
	if($slug != $post->post_type)
		return $post_id;

	$meta_box_checkbox_value = "";
	$meta_box_checkbox_value2 = "";
	$meta_box_checkbox_value3 = "";
	$meta_box_checkbox_value4 = "";
	$meta_box_checkbox_value5 = "";



	if(isset($_POST["meta-box-checkbox"]))
	{
		$meta_box_checkbox_value = $_POST["meta-box-checkbox"];
	}
	update_post_meta($post_id, "meta-box-checkbox", $meta_box_checkbox_value);

	if(isset($_POST["meta-box-fitness"]))
	{
		$meta_box_checkbox_value2 = $_POST["meta-box-fitness"];
	}
	update_post_meta($post_id, "meta-box-fitness", $meta_box_checkbox_value2);

	if(isset($_POST["meta-box-summing"]))
	{
		$meta_box_checkbox_value3 = $_POST["meta-box-summing"];
	}
	update_post_meta($post_id, "meta-box-summing", $meta_box_checkbox_value3);

	if(isset($_POST["meta-box-company"]))
	{
		$meta_box_checkbox_value4 = $_POST["meta-box-company"];
	}
	update_post_meta($post_id, "meta-box-company", $meta_box_checkbox_value4);
 if(isset($_POST["meta-box-summer"]))
	{
		$meta_box_checkbox_value5 = $_POST["meta-box-summer"];
	}
	update_post_meta($post_id, "meta-box-summer", $meta_box_checkbox_value5);

}

add_action("save_post", "save_custom_meta_box", 10, 3);


function custom_menu_page_removing() {
	remove_menu_page('admin.php?page=cptui_manage_post_types');
}
add_action( 'admin_menu', 'custom_menu_page_removing' );




