<?php
/*
 
 Template Name: Team 2 Cols
 
 */

get_header(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<?php $mt_page_title =  get_post_meta($post->ID, "mt_page_title", true);
	  $mt_page_subtitle = get_post_meta($post->ID, "mt_page_subtitle", true);
	  $mt_page_top_imgh = get_post_meta($post->ID, "mt_page_top_imgh", true);
  ?>

<section class="topSingleBkg topPageBkg" <?php if(!empty($mt_page_top_imgh)):?> style="height:<?php echo esc_attr( $mt_page_top_imgh ); ?>" <?php endif; ?>> 

<div class="item-content-bkg">

<div class="item-img" <?php if(!empty($image)):?> style="background-image:url('<?php echo esc_url($image[0]); ?>');" <?php endif;?>></div>

  <div class="inner-desc">	 
  
 <h1 class="post-title single-post-title"><?php if(!empty($mt_page_title)): echo esc_html($mt_page_title); else: the_title(); endif;?></h1>
 
 <?php if(!empty($mt_page_subtitle)): ?>
 
 <span class="post-subtitle"> <?php echo esc_html($mt_page_subtitle); ?></span>
 
 <?php endif; ?>
 
 	</div>
  
</div>  

</section>


<section id="wrap-content" class="page-content">

<div class="container">

<div class="row">

<div class="col-md-12">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" class="page-holder custom-page-template">

<?php the_content(); ?>

</div>
<?php  endwhile;

else: ?>

<p class="alignc"><?php esc_html_e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for. Try the menu above.', 'dina' ); ?></p>

<?php endif; ?>

<div class="team-holder">

   <?php	global $wp_query;
   			$count_team = 0;
   
   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
		
	$defaults = array('post_type' => 'mt_team', 'posts_per_page' => 12, 'paged'=> $paged);
	$wp_query = new WP_Query($defaults);
		
	?>
              
	<?php while (have_posts() ) : the_post(); 
    
    if ($count_team % 2 == 0):  ?> <div class="row"> <?php endif; ?>

 <div class="col-sm-6">

 <div class="team-post">
 
 <div class="team-img">
 
 <?php the_post_thumbnail('full', array('alt' => '', 'title' => '')); ?>
 
 </div>
 
<div class="team-content">
<h4><?php the_title(); ?></h4>

<?php the_content(); ?>
</div>


</div>

</div>

<?php $count_team++; if(($count_team % 2) == 0) {?> </div><!--end row--> <?php }?>
    
     <?php endwhile; if(($count_team % 2) == 1 ) {?> </div><!--end row--> <?php }
	 	wp_reset_postdata();
	  ?>

 
 <?php if(function_exists('dina_pagenavi') ) : ?>

	<?php dina_pagenavi();  ?>
        
	<?php else : ?>

  <ul class="other-entries">
			<li class="newer-entries"><span><?php previous_posts_link(esc_html__('Previous', 'dina')); ?></span></li>
            <li class="older-entries"><span><?php next_posts_link(esc_html__('Next', 'dina')); ?></span></li>
          </ul>
      
<?php endif; ?>

</div>

</div><!--col-md-12-->

</div><!--row-->
</div><!--container-->
</section>

<?php get_footer(); ?>