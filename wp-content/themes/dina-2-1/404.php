<?php get_header(); ?>
<section class="topSingleBkg topPageBkg">
   <div class="item-content-bkg">
      <div class="item-img"></div>
      <div class="inner-desc">
         <h1 class="post-title single-post-title"><?php esc_html_e('404 Error', 'dina')?> </h1>
         <span class="post-subtitle"> <?php esc_html_e('Page Not Found', 'dina')?></span>
      </div>
   </div>
</section>
<section id="wrap-content" class="blog-1col">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="error-404">
               <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'dina' ); ?></p>
               <?php get_search_form(); ?>
            </div>
         </div>
         <!--col-md-12-->
      </div>
      <!--row-->
   </div>
   <!--container-->
</section>
<!--blog-1col-->
<?php get_footer(); ?>