<?php
/**
 * @package WordPress
 * @subpackage Dina
 */
 
 if ( ! function_exists( 'dina_setup' ) ) :

function dina_setup() {
	
	load_theme_textdomain('dina', get_template_directory() . '/languages');
	add_theme_support( 'automatic-feed-links' ); 
	add_theme_support( 'title-tag' );
	
	// Register Post Thumbnail
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(400,400,true);
add_image_size( 'dina-menu-img', 400, 400, true );
add_image_size( 'dina-post-img', 900, 500, true ); 

	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'dina')
		)
	);
	
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
	
	// Set up the WordPress core custom background feature
	add_theme_support( 'custom-background', apply_filters( 'dina_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	// Add theme support for selective refresh for widgets
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// Add support for core custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 150,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
	
}
endif;

add_action( 'after_setup_theme', 'dina_setup' );

function dina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dina_content_width', 1170 );
}
add_action( 'after_setup_theme', 'dina_content_width', 0 );
 
// 1. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');

// 2. Include ACF
include_once( get_theme_file_path('/include/theme-settings.php') );

/* TGM Plugin Activation */
include_once ( get_theme_file_path('/include/tgm-plugin/plugin-install.php') );

// Add Theme Live Customizer options
include_once ( get_theme_file_path('/include/customizer/customizer-options.php') );
include_once ( get_theme_file_path('/include/customizer/customizer-live.php') );

//Menu Sticky
include_once ( get_theme_file_path('/include/menu-sticky.php') );

//Add Google Web Fonts

function dina_fonts_url() {
    $font_url = '';
	
	$mt_body_font = get_theme_mod( 'mt_body_font', 'Lora');
	$mt_body_font_weight = get_theme_mod( 'mt_body_font_weight', '400,700,400italic,700italic');
	$mt_post_titles_font = get_theme_mod( 'mt_post_titles_font', 'Poppins');
	$mt_post_titles_font_weight = get_theme_mod( 'mt_post_titles_font_weight', '300,400,500,600,700');
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'dina' ) ) {
	
	if ( $mt_body_font != $mt_post_titles_font ){
	
	 $font_url = add_query_arg( 'family', urlencode( $mt_body_font.':'.$mt_body_font_weight.'|'.$mt_post_titles_font.':'.$mt_post_titles_font_weight), "//fonts.googleapis.com/css" );
	
	}
	
	else{ $font_url = add_query_arg( 'family', urlencode( $mt_body_font.':'.$mt_body_font_weight), "//fonts.googleapis.com/css" );
	}
		
    }
    return $font_url;
}


function dina_fonts_script() {

    wp_enqueue_style( 'dina-fonts', dina_fonts_url(), array(), null );
	
}
add_action( 'wp_enqueue_scripts', 'dina_fonts_script' );


//	Register and load front end JS and CSS files
if( !function_exists( 'dina_scripts_init' ) ) {
    function dina_scripts_init() {
	
		wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap/css/bootstrap.min.css'), array(), null);
		wp_enqueue_style('font-awesome', get_theme_file_uri('/css/fontawesome/css/font-awesome.min.css'), array(), null);
		wp_enqueue_style('owl-carousel', get_theme_file_uri('/js/owl-carousel/owl.carousel.min.css'), array(), null);
		wp_enqueue_style('dina-style-css', get_parent_theme_file_uri('/style.css'), array(), null);
		
		wp_enqueue_script('bootstrap', get_theme_file_uri('/css/bootstrap/js/bootstrap.min.js'), array( 'jquery' ),null,true);
	    wp_enqueue_script('easing', get_theme_file_uri('/js/jquery.easing.min.js'), array( 'jquery' ),null,true);
		wp_enqueue_script('jquery-fitvids', get_theme_file_uri('/js/jquery.fitvids.js'), array( 'jquery' ),null,true);
		wp_enqueue_script('owl-carousel', get_theme_file_uri('/js/owl-carousel/owl.carousel.min.js'), array( 'jquery' ),null,true);
		wp_enqueue_script('magnific-popup', get_theme_file_uri('/js/jquery.magnific-popup.min.js'), array( 'jquery' ),null,true);
		
        wp_enqueue_script('dina-init', get_theme_file_uri('/js/init.js'), array( 'jquery' ),null,true);
		wp_enqueue_script('dina-reservationform', get_theme_file_uri('/js/reservation-form.js'), array( 'jquery', 'jquery-form', 'jquery-ui-datepicker' ),null,true);
		
		if( is_single() ){
  			
			wp_enqueue_script('dina-commentform', get_theme_file_uri('/js/commentform.js'), array( 'jquery', 'jquery-form' ),null,true);
			
			$translation_array = array( 'name_error' => esc_html__( 'Please fill the Name field!', 'dina' ),
									'email_error' => esc_html__( 'Please fill the Email field!', 'dina' ),
									'emailvalid_error' => esc_html__( 'Please provide a valid Email address!', 'dina' ),
									'message_error' => esc_html__( 'Please fill the Message field!', 'dina' ),
									'send_msg' => esc_html__( 'Sending comment...!', 'dina' ),
									'msg_sent' => esc_html__( 'Comment sent', 'dina' )
									 );
									 
		wp_localize_script( 'dina-commentform', 'commFobject', $translation_array );
			
		}
		
		
    }
    
    add_action('wp_enqueue_scripts', 'dina_scripts_init');
}

function dina_comments_reply() {
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'comment_form_before', 'dina_comments_reply' );


// Register Sidebars

function dina_widgets_init() {
	
	//main sidebar
	register_sidebar(array(
		'id' => 'sidebar-1',
		'name' => 'Sidebar',
		'description' => esc_html__( 'Main sidebar that appears on the right.','dina' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>'
	));
	
	//footer 1
	register_sidebar(array(
		'name' => esc_html__( 'Footer 1','dina'),
		'id' => 'footer-one',
		'description' => esc_html__( 'Widgets in this area are used in the first footer column','dina' ),
		'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>'
	));
	
	//footer 2
	register_sidebar(array(
		'name' => esc_html__( 'Footer 2','dina'),
		'id' => 'footer-two',
		'description' => esc_html__( 'Widgets in this area are used in the second footer column','dina' ),
		'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>'
	));
	
	//footer 3
	register_sidebar(array(
		'name' => esc_html__( 'Footer 3','dina'),
		'id' => 'footer-three',
		'description' => esc_html__( 'Widgets in this area are used in the third footer column','dina' ),
		'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>'
	));
	
	//footer instagram
	register_sidebar(array(
		'name' => esc_html__( 'Footer Instagram','dina'),
		'id' => 'footer-instagram',
		'description' => esc_html__( 'We recommend to use only the Instagram widget here. Please check the documentation for more info.','dina' ),
		'before_widget' => '<div id="%1$s" class="widget-footer-instagram %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>'
	));
	
	
}
add_action( 'widgets_init', 'dina_widgets_init' );

// Excerpt Content
function dina_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'dina_excerpt_length');

function dina_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'dina_excerpt_more');

//page navigation
function dina_pagenavi( $p = 2 ) { // pages will be show before and after current page
  if ( is_singular() ) return; // don't show in single page
  global $wp_query, $paged;
  $max_page = $wp_query->max_num_pages;
  
  if ( $max_page == 1 ) return; // don't show when only one page
  if ( empty( $paged ) ) $paged = 1;
  echo '<div class="prev-next">';
  echo '<span class="nav-page">';
  previous_posts_link(esc_html__('&larr; Newer', 'dina'));
  echo '</span>';
  if ( $paged > $p + 1 ) dina_p_link( 1, esc_html__('First', 'dina') );
  if ( $paged > $p + 2 ) echo '... ';
  for( $i = $paged - $p; $i <= $paged + $p; $i++ ) { // Middle pages
    if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<span class='page-numbers current-page'>{$i}</span> " : dina_p_link( $i );
  }
  if ( $paged < $max_page - $p - 1 ) echo '... ';
  if ( $paged < $max_page - $p ) dina_p_link( $max_page, esc_html__('Last', 'dina') );
  echo '<span class="nav-page">';
  next_posts_link(esc_html__('Older &rarr;', 'dina'));
  echo '</span>';
  echo '</div><!--end-->';
}
function dina_p_link( $i, $title = '' ) {
  if ( $title == '' ) $title = "Page {$i}";
  echo "<a class='page-numbers' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$i}</a> ";
}

//create new comments output
function dina_custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment-body <?php if ($comment->comment_approved == '0') echo 'pending-comment'; ?> clearfix">
                <div class="comment-details">
                    <div class="comment-avatar">
                        <?php echo get_avatar($comment, $size = '45'); ?>
                    </div><!-- /comment-avatar -->
                    
                    <div class="comment-right">
                    <section class="comment-author vcard">
                    <span class="author"><?php echo get_comment_author_link()?></span>
					<div class="comment-date"> <?php echo get_comment_date(); ?></div>
                    </section><!-- /comment-meta -->
                    <section class="comment-content">
    	                <div class="comment-text">
    	                    <?php comment_text() ?>
    	                </div><!-- /comment-text -->
    	                <h5 class="reply">
    	                    <?php comment_reply_link(array_merge( $args, array('reply_text' => esc_html__('Reply','dina'),'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    	                </h5><!-- /reply -->
                    </section><!-- /comment-content -->
                    
                   </div><!-- /comment-right -->
                    
				</div><!-- /comment-details -->
		</div><!-- /comment -->
<?php

} //end custom_comments()

//Search filter
function dina_SearchFilter($query) {

if (!is_admin())	{

if ($query->is_search) {
$query->set('post_type', 'post');
}

}

return $query;
}

add_filter('pre_get_posts','dina_SearchFilter');

// apply the_content filters to some blocks content
function dina_callback_filters($content) {
		
		$filter1 = apply_filters('wptexturize', $content);
		$filter2 = apply_filters('convert_smilies', $filter1);
		$filter3 = apply_filters('convert_chars', $filter2);
		$filter4 = wpautop($filter3);

		return $filter4;
}

//Limit number of tags inside widget
function dina_tag_widget_limit($args){
 
 //Check if taxonomy option inside widget is set to tags
 if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){
  $args['number'] = 20; //Limit number of tags
  $args['smallest'] = 11;
  $args['largest'] = 11;
  $args['unit'] = 'px';
 }
 
 return $args;
}

//Register tag cloud filter callback
add_filter('widget_tag_cloud_args', 'dina_tag_widget_limit');

/* Below code added on 12th July as need occur to customise uploading the PDF file. */
