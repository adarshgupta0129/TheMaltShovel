<?php 

add_action( 'wp_enqueue_scripts', 'dina_menu_sticky', 99 );

function dina_menu_sticky() {
	
	$mt_menu1_fixed = get_theme_mod( 'mt_menu1_fixed', '0');
	
	if($mt_menu1_fixed == '1'):
	
	 if ( ! wp_script_is( 'jquery', 'done' ) ) {
     wp_enqueue_script( 'jquery' );
   }
   
   $custom_js2 = "";
   
   $custom_js2 = "(function($) {
    'use strict';
	
	$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('.navbar-sticky-1').addClass('nav-bkg1');
  } else {
    $('.navbar-sticky-1').removeClass('nav-bkg1');
  }
  
  });
  
	})(jQuery);";
   
   wp_add_inline_script( 'dina-init', $custom_js2 );
	
	endif;

}