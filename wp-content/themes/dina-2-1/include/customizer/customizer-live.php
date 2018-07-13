<?php 

function dina_customizer_css() {

	$custom_css = '';
	$body_styles = '';
	
	// start body

	$mt_body_font = get_theme_mod( 'mt_body_font', 'Lora');
	$mt_body_font_size = get_theme_mod( 'mt_body_font_size');
	$mt_body_text_color = get_theme_mod( 'mt_body_text_color');
	$mt_body_bkg_color = get_background_color();
	
	
	$body_styles .= 'font-family: ' . $mt_body_font . ';';
	
	if( !empty($mt_body_font_size) ) { $body_styles .= 'font-size: ' . $mt_body_font_size . 'px;'; }
	if( !empty($mt_body_text_color) ) { $body_styles .= 'color: ' . $mt_body_text_color . ';'; }
	
	$body_styles = 'body{' .$body_styles. '}';
	
	$custom_css .= $body_styles;
	$custom_css .= '.menu-title, .menu-price{background:'.$mt_body_bkg_color.';}';
	
	// post titles
	
	$mt_post_titles_font = get_theme_mod( 'mt_post_titles_font', 'Poppins');
	$custom_css .= 'h1, h2, h3, h4, h5, h6, blockquote cite, .logo-txt, .menu-nav li, .view-more, .copyright, #submit, .wpcf7-submit, .team-details li, .post-meta, .prev-next, .page-links, .post-password-form input[type="submit"]{ font-family:'.$mt_post_titles_font.', sans-serif; }';
	
	// link color
	
	$mt_link_color = get_theme_mod( 'mt_link_color');
	
	if (!empty($mt_link_color)){ $custom_css .= 'a, p a, a:hover, p a:hover, .gallery-mglass, .article-title a:hover, .widget ul li a:hover, .author-single-page h4 a:hover, .comment-author .author a:hover{color:'.$mt_link_color.';}';
	
	$custom_css .= 'p a, .view-more:hover, #submit:hover, .wpcf7-submit:hover, .post-category a:hover, .comment-reply-link:hover, .page-links a:hover, .post-password-form input[type="submit"]:hover{border-color:'.$mt_link_color.';}';

	$custom_css .= '.view-more:hover, #submit:hover, .wpcf7-submit:hover, .comment-reply-link:hover, .page-links a:hover{background:'.$mt_link_color.';}';
		
	}
	
	// heavy color
	$mt_heavy_color = get_theme_mod( 'mt_heavy_color');
	
	if (!empty($mt_heavy_color)){
	
	$custom_css .= 'h1, h2, h3, h4, h5, h6, blockquote, .search-social ul li a, .footer-social li a, .view-more, #submit, .wpcf7-submit, .article-title a, .widget ul li a, .widget_recent_entries li, .widget_archive li, .widget_categories li, .tagcloud a, .tags-single-page a, .page-numbers, .nav-page a, .author-single-page h4 a, .comment-author span, .comment-author .author a, .comment-reply-link, .menu-title-section a, .page-links a, .post-password-form input[type="submit"]{color:'.$mt_heavy_color.';}';
	
	$custom_css .= '.categ-name h2:before, .headline h2:before, .title-headline:before, .categ-name h2:after, .headline h2:after, .title-headline:after, .widgettitle:before, .widgettitle:after, .scrollup i, .menu-title-section.active, .menu-title-section:hover{background:'.$mt_heavy_color.';}';
	
	$custom_css .= '.view-more, #submit, .wpcf7-submit, .tagcloud a, .tags-single-page a, .comment-reply-link, .menu-title-section, .page-links a, .post-password-form input[type="submit"]{border-color:'.$mt_heavy_color.';}';
	
	}
	
	// headings size
	$mt_h1_size = get_theme_mod( 'mt_h1_size');
	if (!empty($mt_h1_size)){ $custom_css .= 'h1{font-size:'.$mt_h1_size.'px;}'; }
	
	$mt_h2_size = get_theme_mod( 'mt_h2_size');
	if (!empty($mt_h2_size)){ $custom_css .= 'h2{font-size:'.$mt_h2_size.'px;}'; }
	
	$mt_h3_size = get_theme_mod( 'mt_h3_size');
	if (!empty($mt_h3_size)){ $custom_css .= 'h3{font-size:'.$mt_h3_size.'px;}'; }
	
	$mt_h4_size = get_theme_mod( 'mt_h4_size');
	if (!empty($mt_h4_size)){ $custom_css .= 'h4{font-size:'.$mt_h4_size.'px;}'; }
	
	$mt_h5_size = get_theme_mod( 'mt_h5_size');
	if (!empty($mt_h5_size)){ $custom_css .= 'h5{font-size:'.$mt_h5_size.'px;}'; }
	
	$mt_h6_size = get_theme_mod( 'mt_h6_size');
	if (!empty($mt_h6_size)){ $custom_css .= 'h6{font-size:'.$mt_h6_size.'px;}'; }
	
	// menu colors
	
	$mt_menu_bkg_color = get_theme_mod( 'mt_menu_bkg_color');
	if (!empty($mt_menu_bkg_color)){ $custom_css .= '#header-3{background:'.$mt_menu_bkg_color.';}';   }
	
	$mt_menu_normal_color = get_theme_mod( 'mt_menu_normal_color');
	if (!empty($mt_menu_normal_color)){ $custom_css .= '.menu-nav li a, .menu-nav ul li > a{color:'.$mt_menu_normal_color.';}'; }
	
	$mt_menu_hover_color = get_theme_mod( 'mt_menu_hover_color');
	if (!empty($mt_menu_hover_color)){ $custom_css .= '.menu-nav > li:hover > a, .menu-nav li.current-menu-item > a, .menu-nav ul li a:hover, .menu-nav li:hover ul li a:hover, .menu-nav-2 > li:hover > a, .menu-nav-2 li.current-menu-item > a, .menu-nav-2 ul li a:hover, .menu-nav-2 li:hover ul li a:hover{color:'.$mt_menu_hover_color.';}';
	
	 }
	
	$mt_submenu_bkg_color = get_theme_mod( 'mt_submenu_bkg_color');
	 if (!empty($mt_submenu_bkg_color)){ $custom_css .= '.menu-nav ul{background:'.$mt_submenu_bkg_color.';}'; }
	 
	// footer colors
	$mt_footer_bkg_color = get_theme_mod( 'mt_footer_bkg_color');
	if (!empty($mt_footer_bkg_color)){ $custom_css .= 'footer{background:'.$mt_footer_bkg_color.';}'; }
	
	$mt_footer_txt_color = get_theme_mod( 'mt_footer_txt_color');
	if (!empty($mt_footer_txt_color)){ $custom_css .= 'footer{color:'.$mt_footer_txt_color.';}'; }
	
	// custom css
	
	$custom_css .= '.more-white{color:#ffffff;border:5px solid #ffffff;}';
	
	if ( is_admin_bar_showing() ) { $custom_css .= '#header-1, #header-2, .navbar-sticky-1{margin-top:42px;}'; }
	
	wp_add_inline_style( 'dina-style-css', $custom_css );
	
}
	
add_action( 'wp_enqueue_scripts', 'dina_customizer_css', 99);
?>