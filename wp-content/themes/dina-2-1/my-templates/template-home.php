<?php
/*
Template Name: Home

*/
?>

<?php get_header(); ?>

<div class="slider-container">
<div class="owl-carousel owl-theme home-slider">

<?php $mt_slides = get_theme_mod( 'mt_slides', array() );

 if (!empty($mt_slides) ):

 foreach( $mt_slides as $mt_slide ): ?>

      <div class="slider-post slider-item-box-bkg">

    <?php $mt_slide_img = wp_get_attachment_image_src( $mt_slide['mt_slide_image'] , 'full' ); ?>

     <div class="slider-img" style="background-image:url('<?php echo esc_url( $mt_slide_img[0] );  ?>');"></div>

   <div class="slider-caption">

   <div class="slider-text"><?php echo dina_callback_filters( $mt_slide['mt_slide_text'] ); ?></div>

     </div><!--slider-caption-->

   </div>

<?php endforeach; ?>

<?php endif; ?>

</div>
</div>


<?php	global $wp_query;

   $defaults = array('post_type' => 'mt_home');
  $wp_query = new WP_Query($defaults);

  ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

?>

<section id="<?php echo esc_attr( $post->post_name ); ?>" class="home-section <?php if(!empty($image)):?> parallax <?php endif; ?>" <?php if(!empty($image)): ?> style="background-image:url('<?php echo esc_url($image[0]); ?>');" <?php endif;?>>

     <?php if(!empty($image)):?> <div class="parallax-content"> <?php endif; ?>

     <?php $mt_home_full_screen =  get_post_meta($post->ID, "mt_home_full_screen", true);

        if(empty($mt_home_full_screen) || ( $mt_home_full_screen == 'off') ) $mt_home_full_screen = '0';

    ?>

      <?php if($mt_home_full_screen == '0'):?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

        <?php endif; ?>

        <?php the_content(); ?>

     <?php  if($mt_home_full_screen == '0'):?>

  </div><!--.col-md-12-->
      </div><!--.row-->
    </div><!--.container-->

    <?php endif; ?>

     <?php if(!empty($image)):?> </div> <?php endif; ?>

  </section>


<?php  endwhile;

wp_reset_postdata();

else: ?>

<p class="alignc"><?php esc_html_e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for. Try the menu above.', 'dina' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
