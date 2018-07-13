<?php get_header(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<section class="topSingleBkg topPageBkg topSinglePostBkg">  

<div class="item-content-bkg">

<div class="item-img" <?php if(!empty($image)):?> style="background-image:url('<?php echo esc_url($image[0]); ?>');" <?php endif;?>></div>

  <div class="inner-desc">	
  
  <div class="post-category"><?php the_category(' '); ?></div><!--post-category--> 
  
 <h1 class="post-title single-post-title"><?php the_title(); ?></h1>
 
 <ul class="post-meta">

<li class="meta-date"><?php echo get_the_date(get_option('date_format')); ?></li>

   <?php   $author_id = $post->post_author; ?>

  <li class="post-author"><a href="<?php echo esc_url( get_author_posts_url ( $author_id  ) ); ?>"> <?php echo get_avatar( get_the_author_meta( 'user_email' , $author_id ), '20' ); ?> <?php the_author_meta( 'display_name', $author_id  ); ?></a></li>

 <li class="meta-comm"> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></li>

</ul>

 
 </div>
  
</div>  

</section>

<section id="wrap-content" class="blog-post-single">

<div class="container">

<div class="row">

<div class="col-md-9 posts-holder">

<?php 

	if (have_posts()) : while (have_posts()) : the_post(); 
	
	$classes_post = array('blog-item-1col','single-post-holder');
		
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($classes_post); ?> >

<div class="post-content single-post-content clearfix">

<?php the_content(); ?>

</div><!--post-content-->

<?php
        wp_link_pages(array(
            'before' => '<div class="page-links">',
            'after' => '</div>',
            'nextpagelink' => '<span class="next-page">'.esc_html__('Next Page', 'dina').'</span>',
            'previouspagelink' => '<span class="previous-page">'.esc_html__('Previous Page', 'dina').'</span>',
            'next_or_number' => 'next'
        ));
?>

<?php if(has_tag()): ?>
<div class="tags-single-page">
  <?php the_tags('',' ', ''); ?>
</div><!--tags-single-page-->
  <?php endif; ?>
  
<?php $authordesc = get_the_author_meta( 'description' );

	if ( ! empty ( $authordesc ) ):
	
 ?>
  
<div class="author-single-page clearfix">

<div class="author-avatar"> <?php echo get_avatar( get_the_author_meta( 'user_email' ), '80' ); ?>  </div>

<div class="author-content">

<h4><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php the_author_meta( 'display_name' ); ?></a></h4>

<div class="author-text"> <?php the_author_meta( 'description' ); ?> </div>

<?php $twitter = get_the_author_meta('twitter');
	   		$facebook = get_the_author_meta('facebook');
			$gplus = get_the_author_meta('googleplus');
			
	    ?>
      
     <ul class="author-social">
   	 <?php if (!empty($facebook) ): ?>
     <li><a class="social-facebook" href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
	 <?php endif; ?>
     <?php if (!empty($twitter) ): ?>
     <li><a class="social-twitter" href="<?php echo esc_url($twitter); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
	 <?php endif; ?>
     <?php if (!empty($gplus) ): ?>
     <li><a class="social-gplus" href="<?php echo esc_url($gplus); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
	 <?php endif; ?>
     </ul>
      

</div><!--author-content-->
      
</div><!--author-single-page-->

<?php endif; ?>

<div class="row meta-nav-holder">

<div class="col-xs-6 meta-nav">
<div class="nav-post"><?php previous_post_link('<h4>' . esc_html__( 'Previous post', 'dina' ) . '</h4> %link','&larr; %title'); ?> </div></div>
<div class="col-xs-6 meta-nav meta-nav-right">
<div class="nav-post"><?php next_post_link('<h4>' . esc_html__( 'Next post', 'dina' ) . '</h4> %link','%title &rarr;'); ?> </div></div>

</div><!--meta-nav-holder-->

</article>

<?php  endwhile;

else: ?>

<p class="alignc"><?php esc_html_e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for. Try the menu above.', 'dina' ); ?></p>

<?php endif; ?>

<?php get_template_part('include/assets/layouts/mtsingle', 'relatedposts'); ?>   

<?php if ( comments_open() || get_comments_number() ) {	comments_template(); } ?>

</div><!--col-md-9-->

<?php get_sidebar(); ?>

</div><!--row-->
</div><!--container-->

</section>


<?php get_footer(); ?>