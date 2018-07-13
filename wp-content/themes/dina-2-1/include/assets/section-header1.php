<body <?php body_class(); ?> >

<?php $mt_menu1_fixed = get_theme_mod( 'mt_menu1_fixed', '0');  ?>
	
<header id="header-1">
         <div class="headerWrap-1">
            <nav class="navbar navbar-1 <?php if($mt_menu1_fixed == '1'): ?> navbar-fixed-top navbar-sticky-1 <?php endif; ?>">

		<?php $mt_top_page_left_txt	= get_theme_mod( 'mt_top_page_left_txt'); 
		
        		if(!empty( $mt_top_page_left_txt )): ?>
                
               <div class="top-location">
                  <div class="info-txt"> <?php echo dina_callback_filters ( $mt_top_page_left_txt ); ?> </div>   
               </div>
               
               <?php endif; ?>
               
              <?php $mt_top_page_right_txt	= get_theme_mod( 'mt_top_page_right_txt'); 
        
        		if(!empty( $mt_top_page_right_txt )): ?>
                 
               <div class="book-now">
                  <div class="info-txt"><?php echo dina_callback_filters ( $mt_top_page_right_txt ); ?> </div>   
               </div>
               
               <?php endif; ?>
        
              <?php if (has_nav_menu('primary-menu')) {  ?>
               
               <!-- MOBILE BUTTON NAV  -->
               <button type="button" class="navbar-toggle navbar-toggle-1 collapsed" data-toggle="collapse" data-target="#collapse-navigation">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               
                <?php }  ?>
               
               <div class="nav-content-1 <?php if(empty( $mt_top_page_left_txt ) && empty( $mt_top_page_right_txt ) ): ?> nav-content-1-full <?php endif; ?>">
               
               <?php 	 $mt_logo_img	= get_theme_mod( 'custom_logo');
					 $mt_logo_img_url = wp_get_attachment_image_src( $mt_logo_img , 'full' );
		  
					  if (!empty($mt_logo_img)):
				 ?>
    
		    <div class="logo-1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url($mt_logo_img_url[0]); ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
    
    <?php else: ?>
    
    <div class="logo-1"><div class="logo-txt"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></div></div>
    
    <?php endif; ?>

                  <div class="nav-holder nav-holder-1 collapse navbar-collapse" id="collapse-navigation">
                  
                  <?php if (has_nav_menu('primary-menu')) {  ?>
                  
                   <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav menu-nav  menu-nav-1', 'container' => 'false'));  ?>
                   
                    <?php }  ?>
                     
                  </div>
                  
               </div>
            </nav>
         </div>
         <!--headerWrap-->
      </header>