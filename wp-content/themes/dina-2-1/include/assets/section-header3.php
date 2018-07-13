<body <?php body_class(); ?> >

<?php $mt_menu1_fixed = get_theme_mod( 'mt_menu1_fixed', '0');  ?>

 <header id="header-3" <?php if($mt_menu1_fixed == '1'): ?> class="navbar-fixed-top navbar-sticky-3" <?php endif; ?>>
         <div class="headerWrap-3">
            <nav class="navbar">
            
             <?php 	 $mt_logo_img	= get_theme_mod( 'custom_logo');
					 $mt_logo_img_url = wp_get_attachment_image_src( $mt_logo_img , 'full' );
		  
					  if (!empty($mt_logo_img)):
				 ?>
    
		    <div class="logo-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url($mt_logo_img_url[0]); ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
    
    <?php else: ?>
    
    <div class="logo-3"><div class="logo-txt"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></div></div>
    
    <?php endif; ?>

               <!-- MOBILE MENU BUTTON -->
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navigation">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               
               <div class="nav-holder collapse navbar-collapse" id="collapse-navigation">
               
               <?php if (has_nav_menu('primary-menu')) {  ?>
                  
                   <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav menu-nav', 'container' => 'false'));  ?>
                   
                    <?php }  ?>
             
               </div>
            
               <div class="search-social">
               
     <?php
	$mt_social_facebook_url = get_theme_mod( 'mt_social_facebook_url');
	$mt_social_twitter_url = get_theme_mod( 'mt_social_twitter_url');
	$mt_social_gplus_url = get_theme_mod( 'mt_social_gplus_url');
	$mt_social_linkedin_url = get_theme_mod( 'mt_social_linkedin_url');
	$mt_social_pinterest_url = get_theme_mod( 'mt_social_pinterest_url');  
	$mt_social_youtube_url = get_theme_mod( 'mt_social_youtube_url'); 
	$mt_social_vimeo_url = get_theme_mod( 'mt_social_vimeo_url');
	$mt_social_instagram_url = get_theme_mod( 'mt_social_instagram_url');
	$mt_social_dribbble_url = get_theme_mod( 'mt_social_dribbble_url');  
	$mt_social_skype_url = get_theme_mod( 'mt_social_skype_url');   
	$mt_social_trip_url = get_theme_mod( 'mt_social_trip_url'); 
	?>
    
     <ul>
     
      <?php if (!empty($mt_social_facebook_url) ): ?>
     <li><a class="social-facebook" href="<?php echo esc_url($mt_social_facebook_url);?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_twitter_url) ): ?>
     <li><a class="social-twitter" href="<?php echo esc_url($mt_social_twitter_url);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_gplus_url) ): ?>
     <li><a class="social-gplus" href="<?php echo esc_url($mt_social_gplus_url);?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
      <?php endif; ?>
      
     <?php if (!empty($mt_social_linkedin_url) ): ?>
     <li><a class="social-linkedin" href="<?php echo esc_url($mt_social_linkedin_url);?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_pinterest_url) ): ?>
     <li><a class="social-pinterest" href="<?php echo esc_url($mt_social_pinterest_url);?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
     <?php endif; ?>
	 
	 <?php if (!empty($mt_social_trip_url) ): ?>
     <li><a class="social-tripadvisor" href="<?php echo esc_url($mt_social_trip_url);?>" target="_blank"><i class="fa fa-tripadvisor"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_youtube_url) ): ?>
     <li><a class="social-youtube" href="<?php echo esc_url($mt_social_youtube_url);?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_vimeo_url) ): ?>
     <li><a class="social-vimeo" href="<?php echo esc_url($mt_social_vimeo_url);?>" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_instagram_url) ): ?>
     <li><a class="social-instagram" href="<?php echo esc_url($mt_social_instagram_url);?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_dribbble_url) ): ?>
     <li><a class="social-dribbble" href="<?php echo esc_url($mt_social_dribbble_url);?>" target="_blank"><i class="fa fa-dribbble"></i></a></li>
     <?php endif; ?>
     
     <?php if (!empty($mt_social_skype_url) ): ?>
     <li><a class="social-skype" href="<?php echo dina_callback_filters($mt_social_skype_url);?>" target="_blank"><i class="fa fa-skype"></i></a></li>
     <?php endif; ?>

      </ul>

      </div><!-- search-social-->

            </nav>
            
         </div>
         <!--headerWrap-->
      </header>