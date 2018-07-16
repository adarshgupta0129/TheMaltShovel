<?php
/**
* The configuration options
*/

if ( ! function_exists( 'dina_kirki_update_url' ) ) {
    function dina_kirki_update_url( $config ) {
        $config['url_path'] = get_template_directory_uri() . '/include/customizer/kirki/';
        return $config;
    }
}
add_filter( 'kirki/config', 'dina_kirki_update_url' );


if ( class_exists( 'Kirki' ) ) {

	/**
	 * Add sections
	 */
	 
	 Kirki::add_section( 'mt_general_options', array(
		'title'          => esc_attr__( 'General Options', 'dina' ),
		'priority'       => 50,
		'capability'     => 'edit_theme_options',
	) );
	
	Kirki::add_section( 'mt_home_options', array(
		'title'          => esc_attr__( 'Home Slider', 'dina' ),
		'priority'       => 51,
		'capability'     => 'edit_theme_options',
	) );
	
	Kirki::add_section( 'mt_typography_options', array(
		'title'          => esc_attr__( 'Typography', 'dina' ),
		'priority'       => 52,
		'capability'     => 'edit_theme_options',
	) );
	
	Kirki::add_section( 'mt_social_media', array(
		'title'          => esc_attr__( 'Social Media', 'dina' ),
		'priority'       => 53,
		'capability'     => 'edit_theme_options',
	) );
	 
/**
	 * Add the configuration.
	 * This way all the fields using the 'mt_fields' ID
	 * will inherit these options
	 */
	Kirki::add_config( 'mt_fields', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	
	//General Options
	
	Kirki::add_field( 'mt_fields', array(
	'type'        => 'radio',
	'settings'    => 'mt_header_display',
	'label'       => esc_attr__( 'Top Header Display', 'dina' ),
	'section'     => 'mt_general_options',
	'default'     => 'mt_header1',
	'choices'     => array(
		'mt_header1'   => esc_attr__( 'Top Header 1', 'dina' ),
		'mt_header2' => esc_attr__( 'Top Header 2', 'dina' ),
		'mt_header3'  => esc_attr__( 'Top Header 3', 'dina' ),
	),
) );

	Kirki::add_field( 'mt_fields', array(
		'type'        => 'textarea',
		'settings'    => 'mt_top_page_left_txt',
		'label'       => esc_attr__( 'Header 1 - Top Page - Left Short Text', 'dina' ),
		'default'     => '',
		'section'     => 'mt_general_options',
		'description'     => esc_attr__( 'Add short text to the top left page', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'textarea',
		'settings'    => 'mt_top_page_right_txt',
		'label'       => esc_attr__( 'Header 1 - Top Page - Right Short Text', 'dina' ),
		'default'     => '',
		'section'     => 'mt_general_options',
		'description'     => esc_attr__( 'Add short text to the top right page', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
	'type'        => 'switch',
	'settings'    => 'mt_menu1_fixed',
	'label'       => esc_attr__( 'Header 1 - Sticky Top Menu', 'dina' ),
	'section'     => 'mt_general_options',
	'default'     => '0',
	'description'     => esc_attr__( 'Select if you want the menu to be fixed to the top', 'dina' ),
	'choices'     => array(
		'on'  => esc_attr__( 'On', 'dina' ),
		'off' => esc_attr__( 'Off', 'dina' ),
	),
) );

	Kirki::add_field( 'mt_fields', array(
		'type'        => 'textarea',
		'settings'    => 'mt_header2_menu_right',
		'label'       => esc_attr__( 'Header 2 - Menu Right Side Info', 'dina' ),
		'default'     => '',
		'section'     => 'mt_general_options',
		'description'     => esc_attr__( 'Add short info to the menu right page', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
	'type'        => 'radio-image',
	'settings'    => 'mt_home_articles_layout',
	'label'       => esc_attr__( 'Blog - Articles Layout', 'dina' ),
	'section'     => 'mt_general_options',
	'description'     => esc_attr__( 'Select the articles layout for blog page', 'dina' ),
	'default'     => 'mt_home_articles_layout_1col_list_left',
	'choices'     => array(
		'mt_home_articles_layout_1col' => get_template_directory_uri() . '/images/layouts/layout-1col.png',
		'mt_home_articles_layout_2col_grid' => get_template_directory_uri() . '/images/layouts/layout-2col_grid.png',
		'mt_home_articles_layout_1col_list_left' => get_template_directory_uri() . '/images/layouts/layout-1col_list_left.png',
	),
) );
	
	Kirki::add_field( 'mt_fields', array(
	'type'        => 'radio-image',
	'settings'    => 'mt_sidebar',
	'label'       => esc_attr__( 'Blog - Sidebar Display', 'dina' ),
	'section'     => 'mt_general_options',
	'description'     => esc_attr__( 'Select how do you want to display the sidebar for home / archive pages ( right / left / none )', 'dina' ),
	'default'     => 'mt_sidebar_right',
	'choices'     => array(
		'mt_sidebar_right'   => get_template_directory_uri() . '/images/sidebar/sidebar-right.png',
		'mt_sidebar_left'   => get_template_directory_uri() . '/images/sidebar/sidebar-left.png',
		'mt_sidebar_no'   => get_template_directory_uri() . '/images/sidebar/sidebar-no.png',
	),
) );

	Kirki::add_field( 'mt_fields', array(
		'type'        => 'textarea',
		'settings'    => 'mt_footer_copy',
		'label'       => esc_attr__( 'Footer - Copyright', 'dina' ),
		'default'     => 'Copyright &copy; 2018, Dina . Designed by MatchThemes',
		'section'     => 'mt_general_options',
		'description'     => esc_attr__( 'Add footer copyright', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'image',
		'settings'    => 'mt_footer_logo',
		'label'       => esc_attr__( 'Footer - Logo', 'dina' ),
		'default'     => '',
		'section'     => 'mt_general_options',
		'description'     => esc_attr__( 'Add footer logo', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
	'type'        => 'switch',
	'settings'    => 'mt_scroll_top',
	'label'       => esc_attr__( 'Scroll Top Button', 'dina' ),
	'section'     => 'mt_general_options',
	'default'     => '0',
	'description'     => esc_attr__( 'Select if you want to show the scroll to top button', 'dina' ),
	'choices'     => array(
		'on'  => esc_attr__( 'On', 'dina' ),
		'off' => esc_attr__( 'Off', 'dina' ),
	),
) );

	Kirki::add_field( 'mt_fields', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Home - Slider Items', 'dina' ),
	'section'     => 'mt_home_options',
	'description' => esc_attr__( 'Create home top slider. Add as much items as you want', 'dina' ),
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Slider Item', 'dina' ),
	),
	'settings'    => 'mt_slides',
	'default'     => '',
	'fields' => array(
		'mt_slide_text' => array(
			'type'        => 'textarea',
			'label'       => esc_attr__( 'Slider Text', 'dina' ),
			'description' => esc_attr__( 'Add text description', 'dina' ),
			'default'     => '',
		),
		'mt_slide_image' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Slider Image', 'dina' ),
			'description' => esc_attr__( 'Upload image file', 'dina' ),
			'default'     => '',
		),
	)
) );
	

	//colors
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_body_text_color',
		'label'       => esc_attr__( 'Body Text Color', 'dina' ),
		'default'     => '#252525',
		'section'     => 'colors',
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_link_color',
		'label'       => esc_attr__( 'Link Color', 'dina' ),
		'default'     => '#bc8d4b',
		'section'     => 'colors',
	) );

	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_heavy_color',
		'label'       => esc_attr__( 'Heavy Color for Headings', 'dina' ),
		'default'     => '#252525',
		'section'     => 'colors',
	) );
	
	//nav
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_menu_bkg_color',
		'label'       => esc_attr__( 'Menu Bar - Background Color', 'dina' ),
		'default'     => '#ffffff',
		'section'     => 'colors',
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_menu_normal_color',
		'label'       => esc_attr__( 'Menu Item - Normal State Color', 'dina' ),
		'default'     => '#ffffff',
		'section'     => 'colors',
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_menu_hover_color',
		'label'       => esc_attr__( 'Menu Item - Hover State Color', 'dina' ),
		'default'     => '#bc8d4b',
		'section'     => 'colors',
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_submenu_bkg_color',
		'label'       => esc_attr__( 'Menu Item - SubMenu Background Color', 'dina' ),
		'default'     => '#252525',
		'section'     => 'colors',
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_footer_bkg_color',
		'label'       => esc_attr__( 'Footer - Background Color', 'dina' ),
		'default'     => '#ffffff',
		'section'     => 'colors',
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'color',
		'settings'    => 'mt_footer_txt_color',
		'label'       => esc_attr__( 'Footer - Text Color', 'dina' ),
		'default'     => '#999999',
		'section'     => 'colors',
	) );
	
	//typography
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'select',
		'settings'    => 'mt_body_font',
		'label'       => esc_attr__( 'Body - Font Family', 'dina' ),
		'default'     => 'Lora',
		'section'     => 'mt_typography_options',
		'description'     => esc_attr__( 'Select a font family from the Google Web Fonts', 'dina' ),
		'choices'  => Kirki_Fonts::get_font_choices(),
		'priority'    => 1,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_body_font_weight',
		'label'       => esc_attr__( 'Body - Font Weight', 'dina' ),
		'default'     => '400,700,400italic,700italic',
		'section'     => 'mt_typography_options',
		'description'     => esc_attr__( 'Add body font weights', 'dina' ),
		'priority'    => 2,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_body_font_size',
		'label'       => esc_attr__( 'Body - Font Size', 'dina' ),
		'default'     => '16',
		'section'     => 'mt_typography_options',
		'description'     => esc_attr__( 'Select body text font size ( in px )', 'dina' ),
		'priority'    => 3,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'select',
		'settings'    => 'mt_post_titles_font',
		'label'       => esc_attr__( 'Post Titles - Font Family', 'dina' ),
		'default'     => 'Poppins',
		'section'     => 'mt_typography_options',
		'description'     => esc_attr__( 'Select a font family from the Google Web Fonts', 'dina' ),
		'choices'  => Kirki_Fonts::get_font_choices(),
		'priority'    => 4,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_post_titles_font_weight',
		'label'       => esc_attr__( 'Post Titles - Font Weight', 'dina' ),
		'default'     => '300,400,500,600,700',
		'section'     => 'mt_typography_options',
		'description' => esc_attr__( 'Add post titles font weights', 'dina' ),
		'priority'    => 5,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_h1_size',
		'label'       => esc_attr__( 'H1 - Font Size', 'dina' ),
		'default'     => '54',
		'section'     => 'mt_typography_options',
		'description' => esc_attr__( 'Select H1 heading font size ( in px )', 'dina' ),
		'priority'    => 6,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_h2_size',
		'label'       => esc_attr__( 'H2 - Font Size', 'dina' ),
		'default'     => '48',
		'section'     => 'mt_typography_options',
		'description' => esc_attr__( 'Select H2 heading font size ( in px )', 'dina' ),
		'priority'    => 7,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_h3_size',
		'label'       => esc_attr__( 'H3 - Font Size', 'dina' ),
		'default'     => '36',
		'section'     => 'mt_typography_options',
		'description' => esc_attr__( 'Select H3 heading font size ( in px )', 'dina' ),
		'priority'    => 8,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_h4_size',
		'label'       => esc_attr__( 'H4 - Font Size', 'dina' ),
		'default'     => '32',
		'section'     => 'mt_typography_options',
		'description' => esc_attr__( 'Select H4 heading font size ( in px )', 'dina' ),
		'priority'    => 9,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_h5_size',
		'label'       => esc_attr__( 'H5 - Font Size', 'dina' ),
		'default'     => '24',
		'section'     => 'mt_typography_options',
		'description' => esc_attr__( 'Select H5 heading font size ( in px )', 'dina' ),
		'priority'    => 10,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_h6_size',
		'label'       => esc_attr__( 'H6 - Font Size', 'dina' ),
		'default'     => '16',
		'section'     => 'mt_typography_options',
		'description' => esc_attr__( 'Select H6 heading font size ( in px )', 'dina' ),
		'priority'    => 11,
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_facebook_url',
		'label'       => esc_attr__( 'Facebook URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Facebook URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_twitter_url',
		'label'       => esc_attr__( 'Twitter URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Twitter URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_gplus_url',
		'label'       => esc_attr__( 'Google Plus URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Google Plus URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_instagram_url',
		'label'       => esc_attr__( 'Instagram URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Instagram URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_linkedin_url',
		'label'       => esc_attr__( 'Linkedin URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Linkedin URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_pinterest_url',
		'label'       => esc_attr__( 'Pinterest URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Pinterest URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_trip_url',
		'label'       => esc_attr__( 'Trip Advisor URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Trip Advisor URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_youtube_url',
		'label'       => esc_attr__( 'YouTube URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add YouTube URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_vimeo_url',
		'label'       => esc_attr__( 'Vimeo URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Vimeo URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_dribbble_url',
		'label'       => esc_attr__( 'Dribbble URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Dribbble URL', 'dina' ),
	) );
	
	Kirki::add_field( 'mt_fields', array(
		'type'        => 'text',
		'settings'    => 'mt_social_skype_url',
		'label'       => esc_attr__( 'Skype URL', 'dina' ),
		'default'     => '',
		'section'     => 'mt_social_media',
		'description' => esc_attr__( 'Add Skype URL', 'dina' ),
	) );

}//endif