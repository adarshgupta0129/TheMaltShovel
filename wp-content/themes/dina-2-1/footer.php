<footer>
   <div class="container">
      <?php $mt_footer_logo = get_theme_mod( 'mt_footer_logo');
         if (!empty($mt_footer_logo)):
         
         ?>
      <div class="footer-logo">
         <img class="img-responsive" src="<?php echo esc_url($mt_footer_logo); ?>" alt="<?php esc_html_e('Footer Image','dina'); ?>"/>
      </div>
      <?php endif; ?>			
      <?php if ( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) ): ?>
      <div class="footer-widgets">
         <div class="row">
            <div class="col-md-4">
               <div class="foo-block">
                  <?php dynamic_sidebar('footer-one'); ?>
               </div>
               <!--foo-block-->
            </div>
            <!--col-md-4-->
            <div class="col-md-4">
               <div class="foo-block">
                  <?php dynamic_sidebar('footer-two'); ?>
               </div>
               <!--foo-block-->
            </div>
            <!--col-md-4-->
            <div class="col-md-4">
               <div class="foo-block foo-last">
                  <?php dynamic_sidebar('footer-three'); ?>
               </div>
               <!--foo-block-->
            </div>
            <!--col-md-4-->
         </div>
         <!--row-->
      </div>
      <?php endif; ?>
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
      <ul class="footer-social">
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
      <?php $mt_footer_copy = get_theme_mod( 'mt_footer_copy'); 
         if (!empty($mt_footer_copy)):
         
         ?>    
      <div class="copyright">
         <?php echo dina_callback_filters( $mt_footer_copy ); ?>
      </div>
      <!--copyright-->
      <?php endif; ?>
   </div>
   <!--container-->
</footer>
<?php if ( is_active_sidebar( 'footer-instagram' ) ): ?>
<section id="footer-instagram">
   <?php dynamic_sidebar('footer-instagram'); ?>
</section>
<?php endif; ?>
<?php
   $mt_scroll_top = get_theme_mod( 'mt_scroll_top', '0');
   
   if($mt_scroll_top == '1'):
   
   ?>
<div class="scrollup">
   <a class="scrolltop" href="#">
   <i class="fa fa-chevron-up"></i>
   </a>
</div>
<?php
   endif;
   ?>
<?php wp_footer(); ?>
</body>
</html>