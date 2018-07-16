<?php

/*

1. Menu Accordion
2. Menu 2 Cols
3. Menu 3 Cols
4. Menu 1 Col
5. Team 3 Cols
6. Blog 3 Cols
7. Open Table Reservation
8. Gallery 4 Cols

*/

// 1. Menu Accordion

function dina_shortcode_food_menu_accordion( $atts ){

	 extract( shortcode_atts( array( 'id' => '', 'count' => '50', 'cat' =>'' ), $atts, 'food_menu_acc' ) );

	$categArray = array();

	if(!empty($cat)) $categArray = preg_split ('/[\s*,\s*]*,+[\s*,\s*]*/', trim($cat));

	$output = '<ul id="'. esc_attr( $id ) .'" class="our-menu menu-shortcode">';

	$categories=get_categories( array('taxonomy' => 'menu_category',
									  'id' => '28',
									  'hierarchichal'=>2,
									  'parent' => 0,
									  'slug' => $categArray,
									  'include' => '23,27,30,28,19'));
	//print_r($categories);die;

	foreach($categories as $category):

	$output .= '<li class="'.$category->slug.'">';
	$output .= '<h4 class="menu-title-section"><a href="#'. $category->slug .'">'. $category->name .'</a></h4>';
	$output .= '<div id="'. $category->slug .'" class="menu-section">';
	$output .= '<div class="menu-holder menu-2col menu-accordion">';

	if (!empty($category->description)):

	$output .= '<p class="categ-desc">'.$category->description.'</p>';

	endif;

	$args = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ),
				  'tax_query' => array(
					  array(
						  'taxonomy' => 'menu_category',
						  'field'    => 'slug',
						  'terms'    => $category->slug,
						  'include_children' => false
					  ),
				  ),
				 );
	$menu_query = new WP_Query($args);

	if ($menu_query -> have_posts()) : while ($menu_query -> have_posts()) : $menu_query -> the_post();

	$mt_menu_item_price =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post clearfix">';

	if ( has_post_thumbnail( get_the_ID() ) ): $img_full = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

	$output .= '<div class="menu-post-img">';
	$output .= '<a href="'.$img_full[0].'" class="lightbox" title="'. get_the_title() .'">'. get_the_post_thumbnail( get_the_ID(), 'dina-menu-img'). '</a>';
	$output .= '</div>';

	endif;

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price .'</span></h4>';
	$output .= '<div class="menu-text"> '. $mt_menu_item_desc .' </div>';

	$output .= '</div></div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div></div></li>';

	//display sub-categories if exists

	$sub_categories = get_terms( 'menu_category', array( 'parent' => $category->term_id ) );

	if (!empty ($sub_categories) ):

	foreach ( $sub_categories as $sub_category ):

	$output .= '<li class="'.$sub_category->slug.'">';
	$output .= '<h4 class="menu-title-section"><a href="#'. $sub_category->slug .'">'. $sub_category->name .'</a></h4>';
	$output .= '<div id="'. $sub_category->slug .'" class="menu-section menu-subcategory">';
	$output .= '<div class="menu-holder menu-2col menu-accordion">';

	if (!empty($sub_category->description)):

	$output .= '<p class="categ-desc">'.$sub_category->description.'</p>';

	endif;

	$args_subcat = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ), 'menu_category' => $sub_category->slug );
	$submenu_query = new WP_Query($args_subcat);

	if ($submenu_query -> have_posts()) : while ($submenu_query -> have_posts()) : $submenu_query -> the_post();

	$mt_menu_item_price_subcat =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc_subcat = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post clearfix">';

	if ( has_post_thumbnail( get_the_ID() ) ): $img_full_subcat = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

	$output .= '<div class="menu-post-img">';
	$output .= '<a href="'.$img_full_subcat[0].'" class="lightbox" title="'. get_the_title() .'">'. get_the_post_thumbnail( get_the_ID(), 'dina-menu-img'). '</a>';
	$output .= '</div>';

	endif;

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price_subcat .'</span></h4>';
	$output .= '<div class="menu-text"> '. $mt_menu_item_desc_subcat .' </div>';

	$output .= '</div></div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div></div></li>';

	endforeach;
	endif;

	//end display sub-categories if exists

	endforeach;

	$output .= '</ul>';

	return $output;

}

add_shortcode( 'food_menu_acc', 'dina_shortcode_food_menu_accordion' );

// 2. Menu 2 Cols

function dina_shortcode_food_menu_2cols( $atts ){

	extract( shortcode_atts( array(
		'id'          => '',
		'count'       => '50',
		'cat' =>'',
	), $atts, 'food_menu_2cols' ) );

	$categArray = array();

	if(!empty($cat)) $categArray = preg_split ('/[\s*,\s*]*,+[\s*,\s*]*/', trim($cat));

	$categories=get_categories( array('taxonomy' => 'menu_category', 'parent' => 0, 'slug' => $categArray ));

	$output = '';

	foreach($categories as $category):

	$output .= '<div class="categ-name '. $category->slug .'"> <h2>'. $category->name .'</h2>';

	if (!empty($category->description)):

	$output .= '<p class="categ-desc">'.$category->description.'</p>';

	endif;

	$output .= '</div>';

	$output .= '<div class="menu-holder menu-2col '.$category->slug.'">';

	$args = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ),
				  'tax_query' => array(
					  array(
						  'taxonomy' => 'menu_category',
						  'field'    => 'slug',
						  'terms'    => $category->slug,
						  'include_children' => false
					  ),
				  ),
				 );

	$menu_query = new WP_Query($args);

	if ($menu_query -> have_posts()) : while ($menu_query -> have_posts()) : $menu_query -> the_post();

	$mt_menu_item_price =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post clearfix">';

	if ( has_post_thumbnail( get_the_ID() ) ): $img_full = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

	$output .= '<div class="menu-post-img"><a href="'.$img_full[0].'" class="lightbox" title="'. get_the_title() .'">'. get_the_post_thumbnail( get_the_ID(), 'dina-menu-img'). '</a> </div>';

	endif;

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price .'</span></h4>';
	$output .= '<div class="menu-text">'. $mt_menu_item_desc .'</div>';
	$output .= '</div>';

	$output .= '</div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div>';

	//display sub-categories if exists

	$sub_categories = get_terms( 'menu_category', array( 'parent' => $category->term_id ) );

	if (!empty ($sub_categories) ):

	foreach ( $sub_categories as $sub_category ):

	$output .= '<div class="categ-name subcateg-name '. $sub_category->slug .'"> <h2>'. $sub_category->name .'</h2>';

	if (!empty($sub_category->description)):

	$output .= '<p class="categ-desc">'.$sub_category->description.'</p>';

	endif;

	$output .= '</div>';

	$output .= '<div class="menu-holder menu-2col '.$sub_category->slug.'">';

	$args_subcat = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ),
						 'tax_query' => array(
							 array(
								 'taxonomy' => 'menu_category',
								 'field'    => 'slug',
								 'terms'    => $sub_category->slug,
								 'include_children' => false
							 ),
						 ),
						);

	$submenu_query = new WP_Query($args_subcat);

	if ($submenu_query -> have_posts()) : while ($submenu_query -> have_posts()) : $submenu_query -> the_post();

	$mt_menu_item_price_subcat =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc_subcat = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post clearfix">';

	if ( has_post_thumbnail( get_the_ID() ) ): $img_full_subcat = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

	$output .= '<div class="menu-post-img"><a href="'.$img_full_subcat[0].'" class="lightbox" title="'. get_the_title() .'">'. get_the_post_thumbnail( get_the_ID(), 'dina-menu-img'). '</a> </div>';

	endif;

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price_subcat .'</span></h4>';
	$output .= '<div class="menu-text">'. $mt_menu_item_desc_subcat .'</div>';
	$output .= '</div>';

	$output .= '</div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div>';

	endforeach;
	endif;

	//end display sub-categories if exists

	endforeach;

	return $output;

}

add_shortcode( 'food_menu_2cols', 'dina_shortcode_food_menu_2cols' );


// 3. Menu 3 Cols

function dina_shortcode_food_menu_3cols( $atts ){

	extract( shortcode_atts( array(
		'id'          => '',
		'count'       => '50',
		'cat' =>'',
	), $atts, 'food_menu_3cols' ) );

	$categArray = array();

	if(!empty($cat)) $categArray = preg_split ('/[\s*,\s*]*,+[\s*,\s*]*/', trim($cat));

	$categories=get_categories( array('taxonomy' => 'menu_category', 'parent' => 0, 'slug' => $categArray ));

	$output = '';

	foreach($categories as $category):

	$output .= '<div class="categ-name '. $category->slug .'"> <h2>'. $category->name .'</h2>';

	if (!empty($category->description)):

	$output .= '<p class="categ-desc">'.$category->description.'</p>';

	endif;

	$output .= '</div>';

	$output .= '<div class="menu-holder menu-3col '.$category->slug.'">';

	$args = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ),
				  'tax_query' => array(
					  array(
						  'taxonomy' => 'menu_category',
						  'field'    => 'slug',
						  'terms'    => $category->slug,
						  'include_children' => false
					  ),
				  ),
				 );

	$menu_query = new WP_Query($args);

	if ($menu_query -> have_posts()) : while ($menu_query -> have_posts()) : $menu_query -> the_post();

	$mt_menu_item_price =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post">';

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price .'</span></h4>';
	$output .= '<div class="menu-text">'. $mt_menu_item_desc .'</div>';
	$output .= '</div>';

	$output .= '</div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div>';

	//display sub-categories if exists

	$sub_categories = get_terms( 'menu_category', array( 'parent' => $category->term_id ) );

	if (!empty ($sub_categories) ):

	foreach ( $sub_categories as $sub_category ):

	$output .= '<div class="categ-name subcateg-name '. $sub_category->slug .'"> <h2>'. $sub_category->name .'</h2>';

	if (!empty($sub_category->description)):

	$output .= '<p class="categ-desc">'.$sub_category->description.'</p>';

	endif;

	$output .= '</div>';

	$output .= '<div class="menu-holder menu-3col '.$sub_category->slug.'">';

	$args_subcat = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ),
						 'tax_query' => array(
							 array(
								 'taxonomy' => 'menu_category',
								 'field'    => 'slug',
								 'terms'    => $sub_category->slug,
								 'include_children' => false
							 ),
						 ),
						);

	$submenu_query = new WP_Query($args_subcat);

	if ($submenu_query -> have_posts()) : while ($submenu_query -> have_posts()) : $submenu_query -> the_post();

	$mt_menu_item_price_subcat =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc_subcat = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post">';

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price_subcat .'</span></h4>';
	$output .= '<div class="menu-text">'. $mt_menu_item_desc_subcat .'</div>';
	$output .= '</div>';

	$output .= '</div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div>';

	endforeach;
	endif;

	//end display sub-categories if exists

	endforeach;

	return $output;

}

add_shortcode( 'food_menu_3cols', 'dina_shortcode_food_menu_3cols' );

// 4. Menu 1 Col

function dina_shortcode_food_menu_1col( $atts ){

	extract( shortcode_atts( array(
		'id'          => '',
		'count'       => '50',
		'cat' =>'',
	), $atts, 'food_menu_1col' ) );

	$categArray = array();

	if(!empty($cat)) $categArray = preg_split ('/[\s*,\s*]*,+[\s*,\s*]*/', trim($cat));

	$categories=get_categories( array('taxonomy' => 'menu_category', 'parent' => 0, 'slug' => $categArray ));

	$output = '';

	foreach($categories as $category):

	$output .= '<div class="categ-name '. $category->slug .'"> <h2>'. $category->name .'</h2>';

	if (!empty($category->description)):

	$output .= '<p class="categ-desc">'.$category->description.'</p>';

	endif;

	$output .= '</div>';

	$output .= '<div class="menu-holder menu-1col '.$category->slug.'">';

	$args = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ),
				  'tax_query' => array(
					  array(
						  'taxonomy' => 'menu_category',
						  'field'    => 'slug',
						  'terms'    => $category->slug,
						  'include_children' => false
					  ),
				  ),
				 );

	$menu_query = new WP_Query($args);

	if ($menu_query -> have_posts()) : while ($menu_query -> have_posts()) : $menu_query -> the_post();

	$mt_menu_item_price =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post clearfix">';

	if ( has_post_thumbnail( get_the_ID() ) ): $img_full = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

	$output .= '<div class="menu-post-img"><a href="'.$img_full[0].'" class="lightbox" title="'. get_the_title() .'">'. get_the_post_thumbnail( get_the_ID(), 'dina-menu-img'). '</a> </div>';

	endif;

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price .'</span></h4>';
	$output .= '<div class="menu-text">'. $mt_menu_item_desc .'</div>';
	$output .= '</div>';

	$output .= '</div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div>';

	//display sub-categories if exists

	$sub_categories = get_terms( 'menu_category', array( 'parent' => $category->term_id ) );

	if (!empty ($sub_categories) ):

	foreach ( $sub_categories as $sub_category ):

	$output .= '<div class="categ-name subcateg-name '. $sub_category->slug .'"> <h2>'. $sub_category->name .'</h2>';

	if (!empty($sub_category->description)):

	$output .= '<p class="categ-desc">'.$sub_category->description.'</p>';

	endif;

	$output .= '</div>';

	$output .= '<div class="menu-holder menu-1col '.$sub_category->slug.'">';

	$args_subcat = array( 'post_type' => 'mt_menu', 'posts_per_page' => esc_attr( $count ),
						 'tax_query' => array(
							 array(
								 'taxonomy' => 'menu_category',
								 'field'    => 'slug',
								 'terms'    => $sub_category->slug,
								 'include_children' => false
							 ),
						 ),
						);

	$submenu_query = new WP_Query($args_subcat);

	if ($submenu_query -> have_posts()) : while ($submenu_query -> have_posts()) : $submenu_query -> the_post();

	$mt_menu_item_price_subcat =  get_post_meta( get_the_ID(), "mt_menu_item_price", true);
	$mt_menu_item_desc_subcat = get_post_meta( get_the_ID(), "mt_menu_item_desc", true);

	$output .= '<div class="menu-post clearfix">';

	if ( has_post_thumbnail( get_the_ID() ) ): $img_full_subcat = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

	$output .= '<div class="menu-post-img"><a href="'.$img_full_subcat[0].'" class="lightbox" title="'. get_the_title() .'">'. get_the_post_thumbnail( get_the_ID(), 'dina-menu-img'). '</a> </div>';

	endif;

	$output .= '<div class="menu-post-desc">';
	$output .= '<h4><span class="menu-title">'. get_the_title() .'</span> <span class="menu-dots"></span><span class="menu-price">'. $mt_menu_item_price_subcat .'</span></h4>';
	$output .= '<div class="menu-text">'. $mt_menu_item_desc_subcat .'</div>';
	$output .= '</div>';

	$output .= '</div>';

	endwhile; endif; wp_reset_postdata();

	$output .= '</div>';

	endforeach;
	endif;

	//end display sub-categories if exists

	endforeach;

	return $output;

}

add_shortcode( 'food_menu_1col', 'dina_shortcode_food_menu_1col' );


// 5. Team 3 Cols

function dina_shortcode_team_3cols( $atts ){

	extract( shortcode_atts( array(
		'id'          => '',
		'count'       => '20'
	), $atts, 'team_3cols' ) );

	$output = '';

	$output .= '<div id="'. esc_attr( $id ) .'" class="team-holder">';

	global $wp_query;
	$count_team = 0;

	$defaults = array('post_type' => 'mt_team', 'posts_per_page' => esc_attr( $count ));
	$team_query = new WP_Query($defaults);

	if ($team_query -> have_posts()) : while ( $team_query -> have_posts() ) : $team_query -> the_post();

	if ($count_team % 3 == 0): $output .= '<div class="row">'; endif;

	$output .= '<div class="col-md-4">';
	$output .= '<div class="team-post">';
	$output .= '<div class="team-img">'. get_the_post_thumbnail( get_the_ID(), "full").'</div>';
	$output .= '<div class="team-content">';
	$output .= '<h4>'. get_the_title() .'</h4>';
	$output .=  get_the_content();
	$output .=  '</div></div></div>';

	$count_team++;

	if(($count_team % 3) == 0) { $output .= '</div>'; }

	endwhile; endif; if(($count_team % 3) == 1 || ($count_team % 3) == 2 ) { $output .= '</div>'; }
	wp_reset_postdata();

	$output .=  '</div>';

	return $output;

}

add_shortcode( 'team_3cols', 'dina_shortcode_team_3cols' );

// 6. Blog 3 Cols

function dina_shortcode_blog_3cols( $atts ){

	extract( shortcode_atts( array(
		'id'          => '',
		'count'       => '3'
	), $atts, 'blog_3cols' ) );

	$output = '';

	$output .= '<div id="'. esc_attr( $id ) .'" class="blog-2col-grid home-blog-grid">';

	global $wp_query;
	$count_posts = 0;
	$defaults = array('post_type' => 'post', 'posts_per_page' => esc_attr( $count ));
	$blog_query = new WP_Query($defaults);

	if ( $blog_query -> have_posts()) : while ( $blog_query -> have_posts()) : $blog_query -> the_post();

	if ($count_posts % 3 == 0): $output .= '<div class="row">';   endif;

	$output .= '<div class="col-md-4">';
	$output .= '<article id="post-'.get_the_ID().'" class="blog-item blog-item-2col-grid">';

	$categories = get_the_category();

	if(!empty($categories)):

	$output .= '<div class="post-category">';

	foreach( $categories as $category ):

	$output .= ' <a href="' . get_category_link( $category->term_id ) . '">'. $category->name .'</a>';

	endforeach;

	endif;

	$output .= '</div>';

	$output .= '<h2 class="article-title"><a href="'. get_permalink() .'">'. get_the_title() .'</a></h2>';
	$output .= '<ul class="post-meta">';
	$output .= '<li class="meta-date">'. get_the_date(get_option('date_format')) .'</li>';
	$output .= '<li class="post-author post-author-shortcode"><a href="'. get_author_posts_url( get_the_author_meta( 'ID' ) ) .'">'. get_avatar( get_the_author_meta( 'user_email' ), '20' ) .  get_the_author_meta( 'display_name' ) .'</a></li>';
	$output .= '</ul>';

	if ( has_post_thumbnail( get_the_ID() ) ):

	$output .= '<div class="post-image"><a href="'. get_permalink() .'">'. get_the_post_thumbnail( get_the_ID(), "dina-post-img", array( "class" => "img-responsive img-featured", "alt" => '' .get_the_title().'' )).'</a></div>';

	endif;

	$output .= '<div class="post-content content-grid">' .wp_trim_words( get_the_excerpt(), 30, '...' ) .'</div>';
	$output .= '<div class="more-btn"><a class="view-more" href="'. get_permalink() .'">'. esc_html__('Read More', 'dina') .' </a></div>';
	$output .= '</article></div>';

	$count_posts++;

	if(($count_posts % 3) == 0) { $output .= '</div>';  }

	endwhile;
	endif;

	if(($count_posts % 3) == 1 || ($count_posts % 3) == 2 ) { $output .= '</div>';  }

	wp_reset_postdata();

	$output .=  '</div>';

	return $output;

}

add_shortcode( 'blog_3cols', 'dina_shortcode_blog_3cols' );

// 7. Open Table Reservation

function dina_shortcode_open_table_reservation( $atts ){

	extract( shortcode_atts( array(
		'id'          => '',
		'btn_txt'       => 'FIND A TABLE',
		'people_txt'       => 'How many',
		'date_txt'       => 'When',
		'time_txt'       => 'What Time',

	), $atts, 'mt_opentable' ) );

	$output = '';

	if (!empty($id)):

	$output .= '<form class="mt-opentable" action="//www.opentable.com/restaurant-search.aspx" target="_blank">';
	$output .='<div class="row"><div class="col-md-4"><h2 class="home-subtitle">'. esc_attr( $people_txt ) .'</h2><select id="mt-otsize" name="partySize" class="reservation-fields">	<option value="1">1 Person</option><option value="2" selected="selected">2 People</option><option value="3">3 People</option><option value="4">4 People</option><option value="5">5 People</option><option value="6">6 People</option><option value="7">7 People</option><option value="8">8 People</option><option value="9">9 People</option>	<option value="10">10 People</option></select></div><div class="col-md-4"><h2 class="home-subtitle">'. esc_attr( $date_txt ) .'</h2><input id="mt-otdate" type="text" name="startDate" value="'. current_time( "m-d-Y" ) .'" class="datepicker-ot reservation-fields" /></div><div class="col-md-4"><h2 class="home-subtitle">'. esc_attr( $time_txt ) .'</h2><select id="mt-ottime" name="ResTime" class="reservation-fields"><option value="7:00am">7:00 am</option><option value="7:30am">7:30 am</option><option value="8:00am">8:00 am</option><option value="8:30am">8:30 am</option><option value="9:00am">9:00 am</option><option value="9:30am">9:30 am</option><option value="10:00am">10:00 am</option><option value="10:30am">10:30 am</option><option value="11:00am">11:00 am</option><option value="11:30am">11:30 am</option><option value="12:00pm">12:00 pm</option><option value="12:30pm">12:30 pm</option><option value="1:00pm">1:00 pm</option><option value="1:30pm">1:30 pm</option><option value="2:00pm">2:00 pm</option><option value="2:30pm">2:30 pm</option><option value="3:00pm">3:00 pm</option><option value="3:30pm">3:30 pm</option><option value="4:00pm">4:00 pm</option><option value="4:30pm">4:30 pm</option><option value="5:00pm">5:00 pm</option><option value="5:30pm">5:30 pm</option><option value="6:00pm">6:00 pm</option><option value="6:30pm">6:30 pm</option><option value="7:00pm" selected="selected">7:00 pm</option><option value="7:30pm">7:30 pm</option><option value="8:00pm">8:00 pm</option><option value="8:30pm">8:30 pm</option><option value="9:00pm">9:00 pm</option><option value="9:30pm">9:30 pm</option><option value="10:00pm">10:00 pm</option><option value="10:30pm">10:30 pm</option><option value="11:00pm">11:00 pm</option></select>
</div>
</div><div class="mt-otbutton"><button type="submit" class="view-more">'. esc_attr( $btn_txt ) .'</button><img src="'. get_template_directory_uri().'/images/open-table.png" alt="" /></div>';
	$output .= '<input name="RestaurantID" class="RestaurantID" value="'. esc_attr( $id ) .'" type="hidden" /><input name="rid" class="rid" value="'. esc_attr( $id ) .'" type="hidden" /><input name="GeoID" class="GeoID" value="15" type="hidden" /><input name="txtDateFormat" class="txtDateFormat" value="mm-dd-yyyy" type="hidden" /><input name="RestaurantReferralID" class="RestaurantReferralID" value="'. esc_attr( $id ) .'" type="hidden" /></form>';

	else:

	$output .= esc_html__('OpenTable Shortcode: Make sure your OpenTable ID is correct', 'dina');

	endif;

	return $output;

}

add_shortcode( 'mt_opentable', 'dina_shortcode_open_table_reservation' );

// 8. Gallery 4 Cols

function dina_shortcode_gallery_4cols( $atts ){

	extract( shortcode_atts( array(
		'id' => '',
		'post_id' => '',
	), $atts, 'mt_gallery_4cols' ) );

	$output = '';

	$mt_gallery_images = get_field('mt_gallery_images', esc_attr($post_id));

	if(!empty($mt_gallery_images)):

	$output .= '<section id="'. esc_attr( $id ) .'" class="gallery-container"><div class="container"><div class="row"><div class="col-md-12"><div class="gallery-4colgrid-content"><div class="menu-holder menu-3col-grid-image gallery-holder gallery-4col clearfix">';

	foreach ( $mt_gallery_images as $piece ):

	$output .= '<div class="menu-post gallery-post"><a href="'. $piece["url"] .'" class="lightbox" title="'. $piece["caption"] .'"><div class="item-content-bkg gallery-bkg"><div class="gallery-img" style="background-image:url('. $piece["url"] .')"></div><div class="menu-post-desc"><h4>'. $piece["caption"] .'</h4><div class="gallery-mglass"><i class="fa fa-search"></i></div></div></div></a></div>';

	endforeach;

	$output .= '</div></div></div></div></div></section>';

	else:

	$output .= esc_html__('Gallery Shortcode: Make sure you have added gallery images via Galleries option and the page ID is correct', 'dina');

	endif;


	return $output;

}

add_shortcode( 'mt_gallery_4cols', 'dina_shortcode_gallery_4cols' );
