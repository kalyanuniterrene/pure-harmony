<?php
//theme setup
add_action( 'after_setup_theme', 'harmony_theme_setup' );
function harmony_theme_setup()
{
	load_theme_textdomain( 'harmony', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 
			'top-left-menu' => __( 'Top Left Menu', 'harmony' ), 
			'top-right-menu' => __( 'Top Right Menu', 'harmony' ), 
		)
	);
}

//jquery load
add_action( 'wp_enqueue_scripts', 'harmony_theme_load_scripts' );
function harmony_theme_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}

//comment form
add_action( 'comment_form_before', 'harmony_theme_enqueue_comment_reply_script' );
function harmony_theme_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

//the title
add_filter( 'the_title', 'harmony_theme_title' );
function harmony_theme_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

//site title
add_filter( 'wp_title', 'harmony_theme_filter_wp_title' );
function harmony_theme_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

//Enqueue CSS & JS
function harmony_theme_enqueue_style() {
	//CSS
	wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,700,900', false );	
	wp_enqueue_style( 'font-awesome-font', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false );	
	wp_enqueue_style( 'harmony-common', get_template_directory_uri(). '/css/common.css', false );
	wp_enqueue_style( 'harmony-custom', get_template_directory_uri() . '/css/custom.css', false );	
	wp_enqueue_style( 'harmony-responsive', get_template_directory_uri() . '/css/responsive.css', false );	
	wp_enqueue_style( 'lightslider-css', get_template_directory_uri() . '/css/lightSlider.css', false );
	wp_enqueue_style( 'owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css', false );
	
	//JS
	//wp_enqueue_script( 'harmony-lib', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', true );
	wp_enqueue_script( 'owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js', array('jquery'), true );
	wp_enqueue_script( 'harmony-index', get_template_directory_uri() . '/js/index.js', array('jquery'), true );
	wp_enqueue_script( 'harmony-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'harmony_theme_enqueue_style' );

//registered sidebar
//add_action( 'widgets_init', 'harmony_theme_widgets_init' );
function harmony_theme_widgets_init()
{
	register_sidebar( array (
	'name' => __( 'Sidebar Widget Area', 'harmony' ),
	'id' => 'sidebar-widget-area',
	'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	
}

//custom pings
function harmony_theme_custom_pings( $comment )
{
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}

//comment count
add_filter( 'get_comments_number', 'harmony_theme_comments_number' );
function harmony_theme_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

//Home Banner Post Types
add_action( 'init', 'harmony_home_banner_slider');
function harmony_home_banner_slider(){

	//banner post type
	register_post_type( 'home-slider',
	array(
		'labels' => array(
			'name' => __( 'Home Banners' ),
			'singular_name' => __( 'Home Banner' )
			),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt',
		'rewrite' => array('slug' => 'home-slider'),
		'supports' => array( 'title','thumbnail', 'editor' ),
		)
	);
}