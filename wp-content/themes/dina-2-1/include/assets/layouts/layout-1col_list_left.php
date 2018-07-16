<?php $mt_sidebar = get_theme_mod( 'mt_sidebar', 'mt_sidebar_right'); ?>

<section id="wrap-content" class="blog-1col-list-left <?php if ( $mt_sidebar == 'mt_sidebar_no' ): ?> layout-1col-fw <?php endif;?>">

<?php 

	if( (int) get_query_var( 'paged' ) > 1 ){
    	$first_post = false;
	} else {
    	$first_post = true;
	}
	
	if (have_posts()) : while (have_posts()) : the_post(); 
	
	if ( $first_post ) :
	
	$first_post = false;
	
	get_template_part('include/assets/layouts/layout', 'first_article_full');
	
	else:
    
    $classes_post = array('blog-item','blog-item-1col-list');
		
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($classes_post); ?> >

<div class="clearfix">

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'dina-post-img' ); ?>

<?php if(!empty($image)): ?>

<div class="post-image">

<a href="<?php the_permalink();?>">
<div class="list-image" style="background-image:url('<?php echo esc_url($image[0]); ?>');"></div>
</a>

</div><!--post-image-->

<?php endif; ?>

<div class="post-holder <?php if(empty($image)):?> post-holder-noimg <?php endif; ?>">

<div class="post-category"><?php the_category(' '); ?></div><!--post-category-->

<h2 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<ul class="post-meta">

<li class="meta-date"><?php echo get_the_date(get_option('date_format')); ?></li>

<li class="post-author"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php echo get_avatar( get_the_author_meta( 'user_email' ), '20' ); ?> <?php the_author_meta( 'display_name' ); ?></a></li>

<?php if ( is_sticky() && is_home() ) : ?>

<li class="meta-sticky"><?php esc_html_e('Featured', 'dina'); ?></li>
	
<?php endif; ?>

</ul>

<div class="post-content">

<?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>

</div><!--post-content-->

<div class="more-btn">
<a class="view-more" href="<?php the_permalink() ?>"><?php esc_html_e('Read More', 'dina')?> </a>
</div>

</div><!--post holder-->

</div><!--clearfix-->

</article>

<?php endif; endwhile;

else: ?>

<div class="container">

<div class="row">

<div class="col-md-10 col-md-offset-1 alignc">

<h2 class="nothing-found"><?php esc_html_e( 'NOTHING FOUND', 'dina' ); ?></h2>

<p><?php esc_html_e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for. Try a new search or the menu above.', 'dina' ); ?></p>

<?php get_search_form(); ?>

</div>

</div>

</div>


<?php endif; ?>

<?php

 if(function_exists('dina_pagenavi') ) : ?>

	<?php dina_pagenavi();  ?>
       
	<?php else : ?>

  <ul class="other-entries">
			<li class="newer-entries"><span><?php previous_posts_link(esc_html__('&larr; Prev', 'dina')) ?></span></li>
            <li class="older-entries"><span><?php next_posts_link(esc_html__('Next &rarr;', 'dina')) ?></span></li>
          </ul>
      
<?php endif; ?>

</section><!--blog-1col-->